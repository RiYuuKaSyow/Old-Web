<?php
  require( "set.php" ) ;
  require( "function.php" ) ;

  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy() ;
  }
  else{
    //檢查帳號
    list( $user , $user_check ) = id_check() ;
    $smarty->assign( "user" , $user ) ;
    $smarty->assign( "user_check" , $user_check ) ;
  }
  //註冊
  $sign_up = 0 ;
  $sign_up = sign_up() ;
  $smarty->assign( "sign_up" , $sign_up ) ;

  $smarty->display( "../html/navbar.html" ) ;
?>
