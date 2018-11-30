<?php

  $fuser = $fpwd = $idcheck = 0 ;

  //接收post
  if( isset( $_POST['user'] ) && isset( $_POST['pwd'] ) ) {
    $puser = $_POST['user'];
    $ppwd = $_POST['pwd'] ;
    $md5pwd = md5($ppwd) ;
    $sqll = "select user,pwd from data where user = '$puser' " ;
    $mysqli->query('set names utf8') ;
    $sqllog = $mysqliuser->query($sqll) ;
    $urows = $sqllog->num_rows ;
    if($urows =="" ){
      $fuser = 1 ;
    }
    else{
      $fuser = 0 ;
      while ( $sqllog and $user = $sqllog->fetch_object() ){
        if ( $user->pwd === $md5pwd ) {
          //連線成功 建立session
          $_SESSION['acc'] =  $user->user ;
          $_SESSION['pwd'] =  $ppwd ;
          $idcheck = 1 ;
          $smarty->assign( 'user' , $user ) ;
          $fpwd = 0 ;
          break ;
        }
        else{
          $fpwd = 1 ;
        }
      }
    }
  }
  //接收session
  else if( isset($_SESSION['acc']) && isset($_SESSION['pwd']) ){
    $user = $_SESSION['acc'];
    $pwd = $_SESSION['pwd'] ;
    $md5pwd = md5($pwd) ;
    $sqll = "select user,pwd,mail from data where user = '$user' " ;
    $mysqli->query('set names utf8') ;
    $sqllog = $mysqliuser->query($sqll) ;
    while ( $user = $sqllog->fetch_object() ){

      if ( $user->pwd === $md5pwd ) {
        $_SESSION['acc'] =  $user->user ;
        $_SESSION['pwd'] =  $pwd ;
        $idcheck = 1 ;
        $smarty->assign( 'user' , $user ) ;
        break ;
      }
    }
  }
  $smarty->assign( 'idcheck' , $idcheck) ;
  $smarty->assign( 'pwdcheck' , $fpwd ) ;
  $smarty->assign( 'usercheck' , $fuser ) ;

?>
