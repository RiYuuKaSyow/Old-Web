<?php
  //設定
  session_start();
  require("../lib/libs/Smarty.class.php");
  define ( 'APP_PATH' , '../'  );
  $smarty = new Smarty() ;
  $smarty ->template_dir = APP_PATH . "templates" ;
  $smarty ->compile_dir = APP_PATH . "templates_c" ;
  $smarty ->config_dir = APP_PATH . "configs" ;
  $smarty ->cache_dir = APP_PATH . "cache" ;
?>
