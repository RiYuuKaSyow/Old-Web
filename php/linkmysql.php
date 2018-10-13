<?php

  //連接mysql
  //$mysqli = new mysqli('120.101.8.38' , 'root' , '' ,'record') ;
  //$mysqliuser = new mysqli('120.101.8.38' , 'root' , '' ,'user') ;
  $mysqli = new mysqli('localhost' , 'root' , '' ,'record') ;
  $mysqliuser = new mysqli('localhost','root','','user') ;
  //連接是否失敗 true 錯誤訊息
  if($mysqli->connect_error){
    die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;
  }

?>
