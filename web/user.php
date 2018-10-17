<?php
  require("../php/set.php");
  include("../php/linkmysql.php");
  include("../php/idcheck.php");

  try {
    if ( $idcheck ) {
      if( isset( $_FILES["pic"] ) ){
        include("../php/upload.php");
      }
      $smarty->display('../html/user.html') ;
    }
    else {
      throw new \Exception("Error Processing Request", 1);
    }
  } catch (\Exception $e) {
    $smarty->display('../html/nologin.html') ;
    header( 'refresh:0.1;  url="../index.php"' ) ;
  }

?>
