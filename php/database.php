  <?php
      require("../lib/libs/Smarty.class.php");
      define ( 'APP_PATH' , '../'  );

      $smarty = new Smarty() ;
      $smarty ->template_dir = APP_PATH . "templates" ;
      $smarty ->compile_dir = APP_PATH . "templates_c" ;
      $smarty ->config_dir = APP_PATH . "configs" ;
      $smarty ->cache_dir = APP_PATH . "cache" ;


      //帳號密碼變數 直接用post會有風險存在
      $account = $_POST['username'] ;
      $password = $_POST['password'] ;
      //連接mysql
      $mysqli = new mysqli('120.101.8.136',$account,$password,'test1') ;

      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }
      //sql查詢語法
      $sql = "select month,day,hour,min,sec,member from test1" ;
      $mysqli->query('set names utf8') ;
      $sql2 = $mysqli->query($sql) ;

      //開頭文字

      //取資料
      $i = 0 ;
      while ($list = $sql2->fetch_object() ) {
        // code...
        $all_list[$i] = $list ;
        $i++ ;
      }

      $smarty ->assign( "sqldb" ,$all_list );
      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);
      // 上面兩行也可以用這行代替
      // $tpl->assign(array("title" => "測試用的網頁標題", "content" => "測試用的網頁內容"));
      $smarty->display('../html/record.html');

      $sql2->close() ;
      $mysqli->close() ;
   ?>
