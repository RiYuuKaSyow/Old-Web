<?php

  require("../lib/libs/Smarty.class.php");
  require("../php/set.php") ;
  include("../php/idcheck.php") ;

  $smarty->assign( "opwd" , '0' ) ;

  if( isset( $_POST['pwd_ch'] ) ){
    $user = $_SESSION['acc'] ;
    $opwd = $_POST['pwd_old'] ;
    $npwd =  $_POST['pwd_ch'] ;
    if( $opwd === $_SESSION['pwd'] ){
      $mysqliuser->query( "update data set pwd = '$npwd' where pwd ='$opwd' and user = '$user' " ) ;
      $_SESSION['pwd'] = $npwd ;
      $smarty->assign( "opwd" , '2' ) ;
    }
    else {
      $smarty->assign( "opwd" , '1' ) ;
    }
  }
  if( isset( $_POST['new_mail'] ) ){
    $mail = $_POST['new_mail'] ;
    $mysqliuser->query( "update data set mail = '$mail' where user = '$user' " ) ;
  }

  $smarty->display("../html/accset.html") ;



?>
