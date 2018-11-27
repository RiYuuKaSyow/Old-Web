<?php
/* Smarty version 3.1.32, created on 2018-11-27 14:46:02
  from 'E:\xampp\htdocs\html\stream.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd4a9a368a99_74461862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5734e31a63166cf451f02a7677bd703eacc913ba' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\stream.html',
      1 => 1543326360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd4a9a368a99_74461862 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/fixcolor.css">
  <link rel="stylesheet" href="/css/test.css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../js/navbar.js"><?php echo '</script'; ?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視器</title>

  <?php echo '<script'; ?>
 type="text/javascript">

    $(function(){

    });

  <?php echo '</script'; ?>
>

</head>
<body>
  <!---網頁navbar--->
  <div class="container col-sm-12 col-xs-12" style="height:80px">
    <nav class="nav-tabs navbar-sticky-top" style="height:73px">
      <div class="row bg" style="height:60px" >
        <div class="col-sm-10 col-xs-10">
          <div class="col-sm-3 col-xs-3">
            <a href="../index.php" class="h2" style=" text-decoration:none;" >
              智慧監視器
            </a>
          </div>
        </div>
        <!--下拉選單-->
        <div class="dropdown align-item-end col-sm-1.5 col-xs-1.5 " style="height:60px;">
          <button class="btn bg-white dropdown-toggle" id="dropbtn" type="button" style="height:60px;">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>

          </button>
          <div class="dropdown dropdown-menu-right" id="dropmenu" aria-labelledby="dropbtn" style="z-index:999; display:none;">
            <a class="dropdown-item " href="../index.php">首頁</a>
            <a class="dropdown-item " href="../web/record.php">紀錄</a>
            <a class="dropdown-item " href="../web/user.php">設定</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  id="outbtn">登出</a>
          </div>
        </div>
      </div>
      <div class="anima">
      </div>
    </nav>
  </div>

  <!--網頁內容div-->
  <div class="text-center">
    <!--標題-->
    <div class="col-sm-12 col-xs-12">
      <div class="h2">
        即時影像
      </div>
    </div>
    <!---即時影像
    <div class="" style=" width:400px;heigh:300px; ">
    <div id="MyWidgetWrap" style="width: 400px; height: 300px;">
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/jquery.jqplot.min.css" rel="stylesheet" />
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/freeboard.css" rel="stylesheet" />
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/js/freeboard.thirdparty.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
          _res = {};
          $.ajax({
              type: 'GET',
              async: false,
              url: "http://120.101.8.8:8080/qiotapp/v1/freeboardwidgetdetails/5bf8014f9c31dc003388a62a?key=jo8d5cfh000h1e40e3e2cpxn",
              success: function(ret) {
                  if (ret.hasOwnProperty('result')) {
                      _res.layout = ret.result;
                      _res.id = "5bf800c69c31dc003388a5d7";
                      _res.url = "http://120.101.8.8:8080";
                      _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
                      _res.datasources = "http://120.101.8.8:8080/qiotapp/v1/livedata/?topic=qiot/things/admin/cap&key=jo8d5cfh000h1e40e3e2cpxn";
                      _res.APIKey = "jo8d5cfh000h1e40e3e2cpxn";
                  } else {
                  _res.error = true;
                  }
              },error: function(ret) {
                  _res = JSON.parse(ret.responseText);
                  _res.url = "http://120.101.8.8:8080";
                  _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
              }
            });
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.dom.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.load.js"><?php echo '</script'; ?>
>
    </div>
  </div>
--->
    <!---溫度感測--->
    <div id="MyWidgetWrap" style="width: 400px; height: 300px;">
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/jquery.jqplot.min.css" rel="stylesheet" />
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/freeboard.css" rel="stylesheet" />
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/js/freeboard.thirdparty.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
          _res = {};
          $.ajax({
              type: 'GET',
              async: false,
              url: "http://120.101.8.8:8080/qiotapp/v1/freeboardwidgetdetails/5bfd3a809c31dc00338909dc?key=jo8d5cfh000h1e40e3e2cpxn",
              success: function(ret) {
                  if (ret.hasOwnProperty('result')) {
                      _res.layout = ret.result;
                      _res.id = "5bf800c69c31dc003388a5d7";
                      _res.url = "http://120.101.8.8:8080";
                      _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
                      _res.datasources = "http://120.101.8.8:8080/qiotapp/v1/livedata/?topic=qiot/things/admin/arduino/temperature&key=jo8d5cfh000h1e40e3e2cpxn";
                      _res.APIKey = "jo8d5cfh000h1e40e3e2cpxn";
                  } else {
                  _res.error = true;
                  }
              },error: function(ret) {
                  _res = JSON.parse(ret.responseText);
                  _res.url = "http://120.101.8.8:8080";
                  _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
              }
            });
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.dom.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.load.js"><?php echo '</script'; ?>
>
  </div>
    <!---濕度感測--->
    <div id="MyWidgetWrap" style="width: 400px; height: 300px;">
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/jquery.jqplot.min.css" rel="stylesheet" />
      <link href="http://120.101.8.8:8080/qiot/freeboard/css/freeboard.css" rel="stylesheet" />
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/js/freeboard.thirdparty.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
          _res = {};
          $.ajax({
              type: 'GET',
              async: false,
              url: "http://120.101.8.8:8080/qiotapp/v1/freeboardwidgetdetails/5bfd3a799c31dc00338909d6?key=jo8d5cfh000h1e40e3e2cpxn",
              success: function(ret) {
                  if (ret.hasOwnProperty('result')) {
                      _res.layout = ret.result;
                      _res.id = "5bf800c69c31dc003388a5d7";
                      _res.url = "http://120.101.8.8:8080";
                      _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
                      _res.datasources = "http://120.101.8.8:8080/qiotapp/v1/livedata/?topic=qiot/things/admin/arduino/humidity&key=jo8d5cfh000h1e40e3e2cpxn";
                      _res.APIKey = "jo8d5cfh000h1e40e3e2cpxn";
                  } else {
                  _res.error = true;
                  }
              },error: function(ret) {
                  _res = JSON.parse(ret.responseText);
                  _res.url = "http://120.101.8.8:8080";
                  _res.urlport = "http://120.101.8.8:8080/qiot/freeboard/";
              }
            });
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.dom.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="http://120.101.8.8:8080/qiot/freeboard/plugins/customize/embed.load.js"><?php echo '</script'; ?>
>
    </div>
  </div>

  <!---登出提醒-->
  <div class="modal" id="logout" role="dialog" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-label="Close">
          </button>
        </div>
        <div class="modal-body text-center">
            確定要登出嗎?
        </div>
        <div class="modal-footer">
          <form class="" action="../index.php" method="post">
            <button type="submit" name="dia-logout-btn">
              確定
            </button>
          </form>
          <button type="button" id="outcan" >
            取消
          </button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
<?php }
}
