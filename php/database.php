  <?php
      //帳號密碼變數 直接用post會有風險存在
      $account = $_POST['username'] ;
      $password = $_POST['password'] ;
      //連接mysql
      $mysqli = new mysqli('localhost',$account,$password,'test1') ;

      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }
      //sql查詢語法
      $sql = "select id,date,hour,min,sec,who from test" ;
      $mysqli->query('set names utf8') ;
      $sql2 = $mysqli->query($sql) ;

      //開頭文字
      echo "<b>智慧監視器紀錄</b>"."<br>" ;

      //印出資料
      $i=0;
      while ($list[$i] = $sql2->fetch_object()) {
        // code...
        echo $list[$i]->id . '.      ' ;
        echo $list[$i]->date . "日" . $list[$i]->hour . "點" ;
        echo $list[$i]->min . "分" . $list[$i]->sec . "秒   :  " ;
        echo $list[$i]->who .'    ' ;
        echo '<img id = "img"+i src="../img/cats.jpg" style="display:none" >' . '<input type="button" onclick="imgchange(img234)" value="圖片" >' . '<br>' ;
        $i++;
      }
      $sql2->close() ;
      $mysqli->close() ;
   ?>
