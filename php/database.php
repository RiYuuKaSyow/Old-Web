  <?php
      //設定
      session_start();
      require("../lib/libs/Smarty.class.php");
      define ( 'APP_PATH' , '../'  );
      $smarty = new Smarty() ;
      $smarty ->template_dir = APP_PATH . "templates" ;
      $smarty ->compile_dir = APP_PATH . "templates_c" ;
      $smarty ->config_dir = APP_PATH . "configs" ;
      $smarty ->cache_dir = APP_PATH . "cache" ;

      for ($j=0; $j < 60; $j++) {
        $number[$j] = $j;
      }
      $smarty->assign( "number" ,$number );
      /*
      //帳號密碼變數 直接用post會有風險存在
      $account = $_POST['username'] ;
      $password = $_POST['password'] ;
      */


      //連接mysql
      $mysqliuser = new mysqli('120.101.8.140' , 'root' , '' ,'user') ;
      $mysqli = new mysqli('120.101.8.140' , 'root' , '' ,'record') ;
      //$mysqli = new mysqli('localhost','root','','test1') ;
      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }

      //sql查詢語法
      $sql1 = "select month,day,hour,min,sec,member from video1" ;
    //  $sql2 = "select member from member" ;
      $mysqli->query('set names utf8') ;

      $sql3 = $mysqli->query($sql1) ;
      //$sql4 = $mysqli->query($sql2) ;

      //確認登入
      $idcheck = 0 ;
      $sqll = "select user,pwd from data" ;
      $mysqli->query('set names utf8') ;
      $sqllog = $mysqliuser->query($sqll) ;
      while ( $user = $sqllog->fetch_object() ){
        if ( $user->user === $_SESSION['acc'] and $user->pwd === $_SESSION['pwd'] ) {
          $idcheck = 1 ;
          break ;
        }
      }
      if( $idcheck ){
        //取資料
        $i = 0 ;
        while ($list = $sql3->fetch_object() ) {
            $all_list[$i] = $list ;
            $i++ ;
        }
        $i = 0 ;
        /*
        while ($list = $sql4->fetch_object() ) {
          $member_list[$i] = $list->member ;
          $i++ ;
        }
        $smarty ->assign( "sqlmeb" , $member_list);
        */
        $smarty ->assign( "sqldb" ,$all_list );
      }


      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);

      $smarty->display('../html/record.html');

      $sql3->close() ;
      $sql4->close() ;
      $mysqli->close() ;

   ?>
