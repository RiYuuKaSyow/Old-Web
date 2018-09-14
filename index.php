<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧型監視器</title>
</head>
<body>
  <?php
      //開頭文字
      echo "<b>智慧監視器紀錄</b>"."<br><br><br><br>";

      //連接mysql
      $mysqli = new mysqli('localhost','root','','test1');

      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error)
        die('連結錯誤訊息:'.$mysqli->connect_error."<br>");

      //sql查詢語法
      $sql = "select date,hour,min,sec,who from test";
      $mysqli->query('set names utf8');
      $sql2=$mysqli->query($sql);
      //印出資料
      while ($list3=$sql2->fetch_object()) {
        // code...
        echo $list3->date."_".$list3->hour."_";
        echo $list3->min."_".$list3->sec."---";
        echo $list3->who."<br>";
      }
      $sql2->close();
      $mysqli->close();
   ?>
</body>
</html>
