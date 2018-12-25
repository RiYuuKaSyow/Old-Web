<?php

  require( "../php/set.php" ) ;
  require( "../php/function.php" ) ;

  list( $user , $user_check ) = id_check() ;

  $smarty->assign( "opwd" , '0' ) ;

  if( isset( $_POST['pwd_ch'] ) ){
    $user = $_SESSION['acc'] ;
    $opwd = $_POST['pwd_old'] ;
    $npwd =  md5( $_POST['pwd_ch'] ) ;
    if( $opwd === $_SESSION['pwd'] ){
      $mysqliuser->query( "update data set pwd = '$npwd' where pwd ='$opwd' and user = '$user' " ) ;
      $_SESSION['pwd'] = $npwd ;
      $smarty->assign( "opwd" , '2' ) ;
    }
    else {
      $smarty->assign( "opwd" , '1' ) ;
    }
    $_POST['pwd_old'] = $_POST['pwd_ch'] = 0 ;
  }
  if( isset( $_POST['new_mail'] ) ){
    $mail = $_POST['new_mail'] ;
    $mysqliuser->query( "update data set mail = '$mail' where user = '$user' " ) ;
    $_POST['new_mail'] = 0 ;
  }
  $smarty->assign( "user" , $user ) ;
  $smarty->display("../html/accset.html") ;



?>
