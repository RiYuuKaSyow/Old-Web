<!DOCTYPE html>
<html lang="zh" style="background:gray">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧型監視器</title>

</head>
<body>
  <link rel = "stylesheet"  href = "dev.css">
  <dev><b>智慧監視器紀錄網站</b></dev>
  <br><img src = "cats.jpg"   > <br>
  <?php include('database.php'); ?>
  <!---表單-->
  <form name="form1" action="inex.php" method="post">
      <p id="usernamestyle" > 使用者名稱: <input type="text" name="username" maxlength="12"></p>
      <p id="userpassword"> 密碼: <input type="text" name="password" maxlength="12" ></p>
       <br> <input id="submitpos" type="submit" value="登入">
  </form>
</body>
</html>
