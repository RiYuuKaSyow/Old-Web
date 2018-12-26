<?php
  require( "../php/set.php" ) ;
  require( "../php/function.php" ) ;

  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy() ;
  }
  else{
    //檢查帳號
    list( $user , $user_check ) = id_check() ;
  }

  //註冊
  $sign_up = 0 ;

  $smarty->display("../html/index.html") ;
?>
