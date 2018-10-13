  <?php
      //設定
      require("../php/set.php");


      for ($j=0; $j < 60; $j++) {
        $number[$j] = $j;
      }
      $smarty->assign( "number" ,$number );

      //連接mysql
      include("../php/linkmysql.php");

      //確認登入
      $idcheck = 0 ;
      include("../php/idcheck.php");

      //取資料
      $flag = 0;
      if( $idcheck ){
        include("../php/data.php") ;
      }
      //成功取道資料
      if($flag){
        $smarty ->assign( "sqldb" ,$all_list ) ;
      }

      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);
      //套用樣板
      $smarty->display('../html/record.html');

      $sql1->close() ;
    //  $smarty ->assign( "sqlmeb" , $member_list);
    //  $sql4->close() ;
      $mysqli->close() ;

 ?>
