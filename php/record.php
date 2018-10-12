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
      $mysqliuser = new mysqli('120.101.8.38' , 'root' , '' ,'user') ;
      $mysqli = new mysqli('120.101.8.38' , 'root' , '' ,'record') ;
    //  $mysqli = new mysqli('localhost' , 'root' , '' ,'record') ;
    //  $mysqli = new mysqli('localhost','root','','user') ;
      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }

      //sql查詢語法
      $sqls = "select month,day,hour,min,sec,member,img from video1" ;
    //  $sql2 = "select member from member" ;
      $mysqli->query('set names utf8') ;

      $sql1 = $mysqli->query($sqls) ;
      //$sql4 = $mysqli->query($sql2) ;

      //刪除語法
      $sqldel = "delete from test2 where id =";

      //確認登入
      $idcheck = 0 ;
      $flag = 0;
      $sqll = "select user,pwd from data" ;
      $mysqli->query('set names utf8') ;
      $sqllog = $mysqliuser->query($sqll) ;
      while ( $user = $sqllog->fetch_object() ){
        if ( $user->user === $_SESSION['acc'] and $user->pwd === $_SESSION['pwd'] ) {
          $_SESSION['acc'] =  $user->user ;
          $_SESSION['pwd'] =  $user->pwd ;
          $idcheck = 1 ;
          break ;
        }
      }
      if( $idcheck ){
        //取資料
        $i = 0 ;
        while ($list = $sql1->fetch_object() ) {

          //查詢
          if( isset($_POST['sermon1']) ){
            if($_POST['sermon1'] === '-1' or ( (int)$list->month>= (int)$_POST['sermon1'] and (int)$list->month <=(int)$_POST['sermon2'] ) ){
              if( $_POST['serday1']=== '-1' or ( ((int)$list->month < (int)$_POST['sermon2'] and (int)$list->day >= (int)$_POST['serday1']) or ((int)$list->month === (int)$_POST['sermon2'] and (int)$list->day <= (int)$_POST['serday2']) ) ){
                if( $_POST['serh1']=== '-1' or ( ((int)$list->day < (int)$_POST['serday2'] and (int)$list->day >= (int)$_POST['serh1']) or ((int)$list->month === (int)$_POST['serday2'] and (int)$list->day <= (int)$_POST['serh2']) ) ){
                  $all_list[$i] = $list ;
                  $i++ ;
                  $flag = 1;
                }
              }
            }
          }
          //如果尚未查詢
          else{
            $all_list[$i] = $list ;
            $i++ ;
            $flag = 1 ;
          }

          //刪資料
          if ( isset($_POST['id'.$i])  ) {
            $sqlde = $mysqli->query( $sqldel . $list->id  ) ;
        }
        $i = 0 ;

        /*
        while ($list = $sql4->fetch_object() ) {
          $member_list[$i] = $list->member ;
          $i++ ;
        }
        $smarty ->assign( "sqlmeb" , $member_list);
        */
        if( $flag )
          $smarty ->assign( "sqldb" ,$all_list );
      }


      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);

      $smarty->display('../html/record.html');

      $sql1->close() ;
      //
    //$sql4->close() ;
      $mysqli->close() ;

   ?>
