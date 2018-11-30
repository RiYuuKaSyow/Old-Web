  <?php
      //設定
      require( "../php/set.php" ) ;
      require( "../php/function.php" ) ;

      for ($j=0; $j < 60; $j++) {
        $number[$j] = $j;
      }
      $smarty->assign( "number" ,$number );

      try {
        //確認登入
        list( $user , $user_check ) = id_check() ;
        if( $user_check ){
          //取資料
          list( $all_list , $member_list ) = data_base() ;
          $smarty ->assign( "sqldb" ,$all_list ) ;
          $smarty ->assign( "sqlmeb" ,$member_list);
          //套用樣板
          $smarty->display('../html/record.html');
        }
        else {
          throw new Exception("Error Processing Request", 1);
        }
      } catch ( Exception $e) {
        $smarty->display("../html/nologin.html") ;
        header( 'refresh:0.1;  url="index.php"' ) ;
      }



 ?>
