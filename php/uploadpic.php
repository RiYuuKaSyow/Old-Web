<?php
  $dir = "../uploadpic/";
  $tmp = $_FILES['pic0']["tmp_name"] ;
  $file = $_FILES['pic0']["name"] ;
  if(move_uploaded_file( $tmp , $dir . "0001.jpg" )){
    echo "上傳成功" ;
  }
  else{
      echo "上傳失敗";
  }
?>
