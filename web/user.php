<?php
  require( "../php/set.php" ) ;
  require( "../php/function.php" ) ;
  try {
    list( $user , $user_check ) = id_check() ;
    if ( $user_check ) {
      $smarty->display('../html/user.html') ;
    }
    else {
      throw new \Exception("Error Processing Request", 1);
    }
  } catch (\Exception $e) {
    $smarty->display('../html/nologin.html') ;
    header( 'refresh:0.1;  url="index.php"' ) ;
  }

?>
