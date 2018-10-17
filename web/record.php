  <?php
      //設定
      require("../php/set.php");


      for ($j=0; $j < 60; $j++) {
        $number[$j] = $j;
      }
      $smarty->assign( "number" ,$number );
      try {
        //連接mysql
        include("../php/linkmysql.php");
        if( !$link ){
          throw new \Exception("Error Processing Request", 1);
        }

      } catch ( Exception $e) {
        $smarty->display('../html/linkerror.html');
      }

      //確認登入
      include("../php/idcheck.php");
      try {
        if( $idcheck ){
          //取資料
          $flag = 0 ;
          include("../php/data.php") ;

          //成功取道資料
          if($flag){
            $smarty ->assign( "sqldb" ,$all_list ) ;
          }


          //套用樣板
          $smarty->display('../html/record.html');

          $sql1->close() ;
        //  $smarty ->assign( "sqlmeb" , $member_list);
        //  $sql4->close() ;
          $mysqli->close() ;
        }
        else {
          throw new Exception("Error Processing Request", 1);
        }
      } catch ( Exception $e) {
        $smarty->display("../html/nologin.html") ; 
        header( 'refresh:0.1;  url="../index.php"' ) ;
      }



 ?>
