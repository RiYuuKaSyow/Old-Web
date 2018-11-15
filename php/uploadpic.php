<?php

  require("set.php");
  include("linkmysql.php");

  $sql1 = "insert into member (member_name , user_name , image_path) values (" ;
  try {
    if( isset($_POST['member_name']) ){
      $member_name = $_POST['member_name'] ;
    }
    else {
      throw new \Exception("沒有檔案");
    }
    $dir = "../uploadpic/";

    for( $i = 0 ; $i <8 ; $i++){

      $tmp = $_FILES['pic'.$i]["tmp_name"] ;
      $file = $_FILES['pic'.$i]["name"] ;

      if(move_uploaded_file( $tmp , $dir . .$member_name ."0".$i.".jpg")){
        $f = 1 ;
      }

    }

    if($f)){
      //header(' refresh:2 ; url="../web/memberset.php" ') ;
      $mysqliuser->query($sql1 . $member_name . ',' . $_SESSION['acc'] . ',' . $dir . $file . ');' ) ;
      echo "上傳成功" ;
    }
    else{
       //header(' refresh:2 ; url="../web/memberset.php" ') ;
       echo "上傳失敗";
    }

  } catch (\Exception $e) {
    $smarty->display("../html/memberset.html");
  }

?>
