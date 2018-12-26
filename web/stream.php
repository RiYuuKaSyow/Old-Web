<?php
  //設定+連上mysql+帳號檢查
  require("../php/set.php");
  include("../php/function.php");

  try {
    list($user , $check) = id_check();
    if ( $check ) {
      //套用樣板
      $smarty->display("../html/stream.html") ;
    }
    else {
      throw new \Exception("Error Processing Request", 1);
    }
  } catch (\Exception $e) {
    $smarty->display('../html/nologin.html') ;
    header( 'refresh:0.1;  url="index.php"' ) ;
  }



?>
