<?php
  //sql查詢
  $sqls = "select month,day,hour,min,sec,member,img from video1" ;
  //  $sql2 = "select member from member" ;

  //刪除語法
  $sqldel = "delete from video1 where id =";

  $mysqli->query('set names utf8') ;

  $sql1 = $mysqli->query($sqls) ;

  //取資料
  $i = 0 ;
  while ($list = $sql1->fetch_object() ) {

    //查詢
    if( isset($_POST['sermon1']) ){
      if($_POST['sermon1'] === '-1' or ( (int)$list->month>= (int)$_POST['sermon1'] and (int)$list->month <=(int)$_POST['sermon2'] ) ){
        if( $_POST['serday1']=== '-1' or ( ((int)$list->month < (int)$_POST['sermon2'] and (int)$list->day >= (int)$_POST['serday1']) or ((int)$list->month === (int)$_POST['sermon2'] and (int)$list->day <= (int)$_POST['serday2']) ) ){
          if( $_POST['serh1']=== '-1' or ( ((int)$list->day < (int)$_POST['serday2'] and (int)$list->day >= (int)$_POST['serh1']) or ((int)$list->month === (int)$_POST['serday2'] and (int)$list->day <= (int)$_POST['serh2']) ) ){
            $all_list[$i] = $list ;
            $flag = 1 ;
            $i++ ;
          }
        }
      }
    }
    //如果尚未查詢
    else{
      $all_list[$i] = $list ;
      $flag = 1 ;
      $i++ ;
    }

    //刪除
    if ( isset($_POST['id'.$i])  ) {
      $sqlde = $mysqli->query( $sqldel . $list->id  ) ;
    }

    /* 偵測成員
    while ($list = $sql4->fetch_object() ) {
      $member_list[$i] = $list->member ;
      $i++ ;
    }
    */

    }

?>
