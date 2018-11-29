<?php
  $fuser = 0 ;
  $fmail = 0 ;
  $signup = 0 ;

  if(  isset($_POST['sign_user'])  &&  isset($_POST['sign_pwd'] )   &&   isset($_POST['sign_email']) )  {
    $user = $_POST['sign_user'] ;  $pwd = md5($_POST['sign_pwd']) ; $email = $_POST['sign_email'] ;

    //查詢帳號信箱
    $sqlsel1 = "select user,mail from data where user = '$user' ;" ;
    $sqlsel2 = "select user,mail from data where mail = '$email' ;" ;
    //查詢是否重複
    $mysqli->query('set names utf8') ;
    $sql1 = $mysqliuser->query($sqlsel1) ;
    $sql2 = $mysqliuser->query($sqlsel2) ;
    $rows1 = $sql1->num_rows ;
    $rows2 = $sql2->num_rows ;

    //$sql1 = $mysqli->query($sqlsel) ;
    //如果沒有重複 新增帳號
    if ( $rows1 =="" && $rows2 =="" ) {
      //新增帳號
      $sqlup = "insert into data (user,pwd,mail) values ( '$user' , '$pwd' , '$email' ) ; " ;
      $sql2 = $mysqliuser->query($sqlup) ;
      $signup = 1 ;
    }
    else if( $rows1 ==""){
      $fmail = 1 ;
    }
    else {
      $fuser = 1 ;
    }
  }
  $smarty->assign( "signup " , $signup );
  $smarty->assign("mailsame" , $fmail ) ;
  $smarty->assign("usersmae" , $fuser ) ;

?>
