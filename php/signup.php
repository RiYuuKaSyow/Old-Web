<?php



  if(  isset($_POST['sign_user'])  &&  isset($_POST['sign_pwd'] )   &&   isset($_POST['sign_email']) )  {
    //查詢帳號信箱
    $sqlsel = "select user,mail from data" ;
    //查詢是否重複
    $sql1 = $mysqli->query($sqlsel) ;
    $same = 0 ;
    $signup = 0 ;
    while ( $sql1 && $sqlsame = $sql1->fetch_object() ){
      if( ( $sqlsame->user == $_POST('sign_user') ) or ( $sqlsame->mail == $_POST('sign_email') ) ){
        $same = 1 ;
        break ;
      }
    }
    //如果沒有重複 新增帳號
    if( $same === 0 ){
      //新增帳號
      $user = $_POST['sign_user'] ;  $pwd = $_POST['sign_pwd'] ; $email = $_POST['sign_email'] ;
      $sqlup = "insert into data (user,pwd,mail) values ( '$user' , '$pwd' , '$email' ) ; " ;
      $sql2 = $mysqliuser->query($sqlup) ;
      $signup = 1 ;
    }
    $smarty->assign( "same" , $same ) ;
    $smarty->assign( "signup " , $signup );
  }

?>
