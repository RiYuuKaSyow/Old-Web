<?php
  //設定+連上mysql+帳號檢查
  require("../php/set.php");
  include("../php/linkmysql.php");
  include("../php/idcheck.php") ;

  //設定頻道
  $smarty->assign("channel1" , "https://www.youtube.com/embed/PRlAY486hVg") ;
  $smarty->assign("channel2" , "https://www.youtube.com/embed/86jRi9goYLQ") ;
  $smarty->assign("channel3" , "https://www.youtube.com/embed/fXudTNYXnw0") ;

  //套用樣板
  $smarty->display("../html/stream.html") ;

?>
