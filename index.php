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


  $idcheck = 0 ;
  $usercheck = $idcheck ;
  if (  isset( $_POST['user'] ) && isset( $_POST['pwd'] )   ) {
    $mysqli = new mysqli('120.101.8.38','root','','user') ;
    //連接是否失敗 true 錯誤訊息
    if($mysqli->connect_error){

      die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

    }
    //連線成功 檢查帳密
    else {
      $sql = "select user,pwd from data" ;
      $mysqli->query('set names utf8') ;
      $sql2 = $mysqli->query($sql) ;
      while ( $user = $sql2->fetch_object() ){
        if ( $user->user === $_POST['user'] and $user->pwd === $_POST['pwd'] ) {
          //連線成功 建立session
          $_SESSION['acc'] =  $user->user ;
          $_SESSION['pwd'] =  $user->pwd ;
          $idcheck = 1 ;
          $smarty->assign( 'userid' , $user->user ) ;
          break ;
        }
      }
    }
    $usercheck = $idcheck ;
  }
  //檢查seesion(帳號密碼)是否成立且存在
  if( isset($_SESSION['acc']) && isset($_SESSION['pwd']) ){
    $idcheck = 1 ;
  }
  //登出
  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy();
  }

  //註冊
  if(  isset($_POST['sign_user'])  &&  isset($_POST['sign_pwd'] )   &&   isset($_POST['sign_email']) )  {
    //查詢帳號信箱
    $sqlsel = "select user,mail from data" ;
    //查詢是否重複
    $sql1 = $mysqli->query($sqlsel) ;
    $same = 0 ;
    while ( $sqlsame = $sql1->fetch_object() ){
      if( $sqlsame->user === $_POST('sign_user') || $sqlsame->mail === $_POST('sign_email') ){
        $same = 1 ;
        break ;
      }
    }
    //如果沒有重複 新增帳號
    if( $same === 0 ){
      //新增帳號
      $user = $_POST['sign_user'] ;  $pwd = $_POST['sign_pwd'] ; $email = $_POST['sign_email'] ;
      $sqlup = "insert into data (user,pwd,mail) values ( $user , $pwd , $email )" ;
      $sql2 = $mysqli->query($sqlup) ;
    }
    $smarty->assign( "same" , $same ) ;
  }

  $smarty->assign( 'idcheck' , $idcheck ) ;
  $smarty->assign( 'usercheck' , $usercheck ) ;

  $smarty->display( "html/index.html" ) ;
?>
