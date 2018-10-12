<?php
  //連接mysql
  $mysqliuser = new mysqli('120.101.8.86' , 'root' , '' ,'user') ;
  $mysqli = new mysqli('120.101.8.86' , 'root' , '' ,'record') ;
//  $mysqli = new mysqli('localhost' , 'root' , '' ,'record') ;
//  $mysqli = new mysqli('localhost','root','','user') ;
  //查詢帳號信箱
  $sqlsel = "select user,mail from data" ;
  //新增帳號
  $sqlup = "insert into data user,pwd,mail values " ;
  //查詢是否重複
  $sql1 = $mysqli->query($sqlsel) ;
  $same = 0
  while( $sql1->fetch_object() ){
    if( $sql1->user === $_POST('sign_user') || $sql1->mail === $_POST('sign_email') ){
      $same = 1 ;
      break ;
    }
  }
  //如果沒有重複 新增帳號
  if( $same === 0 ){
    $sql2 = $mysqli->query($sqlup . $_POST('sign_user') . ',' . $_POST('sign_pwd') . ',' . $_POST('sign_email')  )
  }
  $smarty->assign( "same" , $same ) ;
?>
