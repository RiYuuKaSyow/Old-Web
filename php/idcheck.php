<?php

  $fuser = $fpwd = $idcheck = 0 ;

  //接收post
  if( isset( $_POST['user'] ) && isset( $_POST['pwd'] ) ) {
    $puser = $_POST['user'];
    $ppwd = $_POST['pwd'] ;
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
        if ( $user->pwd === $ppwd ) {
          //連線成功 建立session
          $_SESSION['acc'] =  $user->user ;
          $_SESSION['pwd'] =  $user->pwd ;
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

    $sqll = "select user,pwd,mail from data" ;
    $mysqli->query('set names utf8') ;
    $sqllog = $mysqliuser->query($sqll) ;
    while ( $user = $sqllog->fetch_object() ){

      if ( $user->user === $_SESSION['acc'] and $user->pwd === $_SESSION['pwd'] ) {
        $_SESSION['acc'] =  $user->user ;
        $_SESSION['pwd'] =  $user->pwd ;
        $idcheck = 1 ;
        $smarty->assign( 'user' , $user ) ;
        break ;

      }
    }
  }
  $smarty->assign( 'idcheck' , $idcheck ) ;
  $smarty->assign( 'pwdcheck' , $fpwd ) ;
  $smarty->assign( 'usercheck' , $fuser ) ;


?>
