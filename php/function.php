<?php
  //連資料庫

  //檢查帳號
  function id_check(){
    include("linkmysql.php") ;
    $user0 = " " ;
    $user_check = 0 ;
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
        $user_check = 2 ;
      }
      else{
        while ( $sqllog and $user = $sqllog->fetch_object() ){
          if ( $user->pwd === $md5pwd ) {
            //連線成功 建立session
            $_SESSION['acc'] =  $user->user ;
            $_SESSION['pwd'] =  $ppwd ;
            $user_check = 1 ;
            $user0 = $user ;
            break ;
          }
          else{
            $user_check = 3 ;
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
          $user_check = 1 ;
          $user0 = $user ;
          break ;
        }
      }
    }
    return array( $user0 , $user_check ) ;
  }

  //註冊
  function sign_up(){
    include("linkmysql.php") ;
    $sign_up = 0 ;

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
        $sign_up = 1 ;
      }
      else if( $rows1 ==""){
        $sign_up = 3 ;
      }
      else {
        $sign_up = 2 ;
      }
    }
    return $sign_up ;
  }

  //上傳圖片
  function upload_pic(){
    include("linkmysql.php") ;
    $sql1 = "insert into member (member_name , user_name , image_path) values (" ;
    try {
      if( isset($_POST['member_name']) ){
        $member_name = $_POST['member_name'] ;
      }
      else {
        throw new \Exception("沒有檔案");
      }
      $dir = "../uploadpic/";

      for( $i = 0 ; $i <8 ; $i++){

        $tmp = $_FILES['pic'.$i]["tmp_name"] ;
        $file = $_FILES['pic'.$i]["name"] ;

        if(move_uploaded_file( $tmp , $dir . $file .$member_name ."0".$i.".jpg")){
          $f = 1 ;
        }

      }

      if($f){
        //header(' refresh:2 ; url="../web/memberset.php" ') ;
        $mysqliuser->query($sql1 . $member_name . ',' . $_SESSION['acc'] . ',' . $dir . $file . ');' ) ;
        echo "上傳成功" ;
      }
      else{
         //header(' refresh:2 ; url="../web/memberset.php" ') ;
         echo "上傳失敗";
      }

    } catch (\Exception $e) {
      $smarty->display("../html/memberset.html");
    }
  }

  //資料
  function data_base(){

    include("linkmysql.php") ;
    $sqls = "select year,month,day,hour,min,sec,member,img from video1" ;
    $sqlm = "select member from member" ;
    //刪除語法
    $sqldel = "delete from video1 where id =";
    $mysqli->query('set names utf8') ;
    $sql1 = $mysqli->query($sqls) ;
    $sql2 = $mysqliuser->query($sqlm) ;
    //取資料
    $i = 0 ;
    while ($sql1 and $list = $sql1->fetch_object() ) {

      //查詢
      if( isset($_POST['sermon1']) ){
        if($_POST['sermon1'] === '-1' or ( (int)$list->month>= (int)$_POST['sermon1'] and (int)$list->month <=(int)$_POST['sermon2'] ) ){
          if( $_POST['serday1']=== '-1' or ( ((int)$list->month < (int)$_POST['sermon2'] and (int)$list->day >= (int)$_POST['serday1']) or ((int)$list->month === (int)$_POST['sermon2'] and (int)$list->day <= (int)$_POST['serday2']) ) ){
            if( $_POST['serh1']=== '-1' or ( ((int)$list->day < (int)$_POST['serday2'] and (int)$list->day >= (int)$_POST['serh1']) or ((int)$list->month === (int)$_POST['serday2'] and (int)$list->day <= (int)$_POST['serh2']) ) ){
              $all_list[$i] = $list ;
              $i++ ;
            }
          }
        }
      }
      //如果尚未查詢
      else{
        $all_list[$i] = $list ;
        $i++ ;
      }

      //刪除
      if ( isset($_POST['id'.$i])  ) {
        $sqlde = $mysqli->query( $sqldel . $list->id  ) ;
        $_POST['id'.$i] = 0 ;
      }
    }
      //查詢成員
      $i = 0 ;
      while ( $sql2 and $list2 = $sql2->fetch_object() ) {
        $member_list[$i] = $list2->member ;
        $i++ ;
      }
      return array( $all_list , $member_list ) ;
  }

?>
