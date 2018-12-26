<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="UserContent-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <title>智慧監視系統</title>
</head>
<body style="max-width: 1100px ;background-color:black " >
  <script type="text/javascript">
    $(function(){
      $("#div1").fadeIn(2000) ;
      $("#div2").fadeIn(2000) ;
      $("#div3").delay(1000).fadeIn(2000) ;
    });
  </script>
  <?php
    $rep_date = new DateTime("now" , new DateTimeZone('Asia/Taipei') ) ;
    $now_time = new DateTime("now" , new DateTimeZone('Asia/Taipei') ) ;
    $rep_date->setDate(2019,01,02) ;
    $rep_date->setTime(14,00,00) ;
    $t = $rep_date->diff($now_time) ;
    header( 'refresh:3.5;  url="web/index.php"' ) ;
    echo '<div id="div1" style=" position:relative; top:200px; left:400px; font-size:400% ; color:white ; display: none;" >
            2019/1/2
            即將到來
          </div>
          <div id="div2" style=" position:relative; top:230px; left:350px; font-size:400% ; color:white ; display: none;" >
            剩餘'. $t->format('%d') .'天' . $t->format('%h') .'時' . $t->format('%i') .'分' . $t->format('%s') .'秒' .'
          </div>
          <div id="div3" class="h4" style="position:relative; top:400px; left:1000px; color:red ; width:150px ; display: none;" >
             coming soon
          </div>' ;


?>
</body>
</html>
