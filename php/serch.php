  <?php
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


      //連接mysql
      //$mysqliuser = new mysqli('120.101.8.38' , 'root' , '' ,'user') ;
      //$mysqli = new mysqli('120.101.8.140' , 'root' , '' ,'record') ;
      $mysqli = new mysqli('localhost' , 'root' , '' ,'record') ;
      $mysqli = new mysqli('localhost','root','','user') ;
      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }
      //sql查詢語法
      $sql1 = "select month,day,hour,min,sec,member from video1" ;
      $sql2 = "select member from member" ;
      $mysqli->query('set names utf8') ;

      $sql3 = $mysqli->query($sql1) ;
      $sql4 = $mysqli->query($sql2) ;

      //刪除語法
      $sqldel = "delete from test1 where ";

      //取資料
      $i = 0 ;
      $flag = 0 ;
      while ($list = $sql3->fetch_object() ) {
        if( $_POST['sermeb'] === '-1' or $list->MEMBER === $_POST['sermeb'] ){
          if($_POST['sermon1'] === '-1' or ( (int)$list->MONTH>= (int)$_POST['sermon1'] and (int)$list->MONTH <=(int)$_POST['sermon2'] ) ){
            if( $_POST['serday1']=== '-1' or ( ((int)$list->MONTH < (int)$_POST['sermon2'] and (int)$list->DAY >= (int)$_POST['serday1']) or ((int)$list->MONTH === (int)$_POST['sermon2'] and (int)$list->DAY <= (int)$_POST['serday2']) ) ){
              if( $_POST['serh1']=== '-1' or ( ((int)$list->DAY < (int)$_POST['serday2'] and (int)$list->DAY >= (int)$_POST['serh1']) or ((int)$list->MONTH === (int)$_POST['serday2'] and (int)$list->DAY <= (int)$_POST['serh2']) ) ){
                $all_list[$i] = $list ;
                $i++ ;
                $flag = 1;
              }
            }
          }
        }
      }
      $i = 0 ;
      while ($list = $sql4->fetch_object() ) {
        $member_list[$i] = $list->member ;
        $i++ ;
      }
      //成員assign
      $smarty ->assign( "sqlmeb" , $member_list);
      //資料assign
      if($flag)
        $smarty ->assign( "sqldb" ,$all_list );
      else {
      }


      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);
      // 上面兩行也可以用這行代替
      // $tpl->assign(array("title" => "測試用的網頁標題", "content" => "測試用的網頁內容"));
      $smarty->display('../html/record.html');

      $sql3->close() ;
      $sql4->close() ;
      $mysqli->close() ;
   ?>
