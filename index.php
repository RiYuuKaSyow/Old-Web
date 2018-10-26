<?php

  //設定
  session_start();
  require("lib/libs/Smarty.class.php") ;
  define ( 'APP_PATH' , '../'  ) ;
  $smarty = new Smarty() ;
  $smarty ->template_dir = APP_PATH . "templates" ;
  $smarty ->compile_dir = APP_PATH . "templates_c" ;
  $smarty ->config_dir = APP_PATH . "configs" ;
  $smarty ->cache_dir = APP_PATH . "cache" ;

  //連接mysql
  include("php/linkmysql.php") ;

  //登出
  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy() ;
  }
  //檢查帳號
  else {
    include("php/idcheck.php") ;
  }

  //註冊
  include("php/signup.php") ;

  //套用樣板
  $smarty->display( "html/index.html" ) ;

?>
