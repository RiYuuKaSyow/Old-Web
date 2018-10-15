<?php

  $idcheck = 0 ;
  $usercheck = $idcheck ;

  //接收session
  if( isset($_SESSION['acc']) && isset($_SESSION['pwd']) ){

    $sqll = "select user,pwd from data" ;
    $mysqli->query('set names utf8') ;
    $sqllog = $mysqliuser->query($sqll) ;
    while ( $user = $sqllog->fetch_object() ){

      if ( $user->user === $_SESSION['acc'] and $user->pwd === $_SESSION['pwd'] ) {
        $_SESSION['acc'] =  $user->user ;
        $_SESSION['pwd'] =  $user->pwd ;
        $idcheck = 1 ;
        $smarty->assign( 'userid' , $user->user ) ;
        break ;
      }

      $usercheck = $idcheck ;

    }
  }

  //接收post
  if( isset( $_POST['user'] ) && isset( $_POST['pwd'] ) ) {
    $sqll = "select user,pwd from data" ;
    $mysqli->query('set names utf8') ;
    $sqllog = $mysqliuser->query($sqll) ;
    while ( $user = $sqllog->fetch_object() ){

      if ( $user->user === $_POST['user'] and $user->pwd === $_POST['pwd'] ) {
        //連線成功 建立session
        $_SESSION['acc'] =  $user->user ;
        $_SESSION['pwd'] =  $user->pwd ;
        $idcheck = 1 ;
        $smarty->assign( 'userid' , $user->user ) ;
        break ;
      }

      $usercheck = $idcheck ;

    }
  }
  $smarty->assign( 'idcheck' , $idcheck ) ;
  $smarty->assign( 'usercheck' , $usercheck ) ;

?>
