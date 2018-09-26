<?php
    session_start();
    require("../lib/libs/Smarty.class.php");
    define ( 'APP_PATH' , '../'  );

    $smarty = new Smarty() ;
    $smarty ->template_dir = APP_PATH . "templates" ;
    $smarty ->compile_dir = APP_PATH . "templates_c" ;
    $smarty ->config_dir = APP_PATH . "configs" ;
    $smarty ->cache_dir = APP_PATH . "cache" ;

    for ($j=0; $j < 60; $j++) {
      $number[$j] = $j;
    }
    $smarty->assign( "number" ,$number );
    //帳號密碼變數 直接用post會有風險存在
    if( ! ( isset( $_SESSION['acc'] ) && isset( $_SESSION['pwd'] ) ) ){
      $account = $_POST['username'] ;
      $password = $_POST['password'] ;
      //session
      $_SESSION['acc'] = $account ;
      $_SESSION['pwd'] = $password ;
    }

    //連接mysql
    //$mysqli = new mysqli('120.101.8.136',$account,$password,'test1') ;
    $mysqli = new mysqli('localhost',  $_SESSION['acc'] , $_SESSION['pwd'] ,'test1') ;
    //連接是否失敗 true 錯誤訊息
    if($mysqli->connect_error){

      die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

    }
    //sql查詢語法
    $sql1 = "select MONTH,DAY,HOUR,MINS,SEC,MEMBER from test2" ;
    $mysqli->query('set names utf8') ;

    $sql2 = $mysqli->query($sql1) ;

    //刪除語法
    $sqldel = "delete from test2 where ";
    //新增語法
    $sqlupd = "update test2 set ID =";

    //刪資料
    $i = 1 ;
    $j = 0 ;
    $flag = 0 ;
    while ($list = $sql2->fetch_object() ) {
      if ( $_POST['id'.$i] === 'on' ) {
        $sqlde = $mysqli->query( $sqldel . 'ID = '.$i ) ;
        $j++;
      }
      $sqlup = $mysqli->prepare($sqlupd . $i . " where ID = " . $i+$j );
      $i++ ;
    }


    $smarty->display('../html/test.html');

    $sql2->close() ;
    $mysqli->close() ;
 ?>
