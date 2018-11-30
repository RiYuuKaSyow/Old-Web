<?php
  session_start() ;
  //設定
  header("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  require( "lib/libs/Smarty.class.php" ) ;
  define ( 'APP_PATH' , '../'  );
  $smarty = new Smarty() ;
  $smarty ->template_dir = APP_PATH . "templates" ;
  $smarty ->compile_dir = APP_PATH . "templates_c" ;
  $smarty ->config_dir = APP_PATH . "configs" ;
  $smarty ->cache_dir = APP_PATH . "cache" ;

  require( "php/function.php" ) ;

  //登出
  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy() ;
  }
  else {
    //檢查帳號
    list( $user , $user_check ) = id_check() ;
    $smarty->assign( "user" , $user ) ;
    $smarty->assign( "user_check" , $user_check ) ;
  }
  //註冊
  $sign_up = 0 ;
  $sign_up = sign_up() ;

  //套用樣板
  $smarty->assign( "sign_up" , $sign_up ) ;
  $smarty->display( "index.html" ) ;

?>
