<?php
/* Smarty version 3.1.32, created on 2018-12-20 13:42:12
  from 'E:\xampp\htdocs\html\stream.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1b8e243ba453_54636363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5734e31a63166cf451f02a7677bd703eacc913ba' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\stream.html',
      1 => 1545309730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1b8e243ba453_54636363 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/web.css">
  <link rel="stylesheet" href="../css/test.css">
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視系統</title>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
      $("#navbar").load("../php/navbar.php") ;
    });
  <?php echo '</script'; ?>
>
</head>
<body>

  <!--頁面導覽-->
  <div id="navbar" >
  </div>
  <!--網頁內容div-->
  <div class="text-center">
    <!--標題-->
    <div class="col-sm-12 col-xs-12">
      <div class="h2">
        即時影像
      </div>
    </div>
<!--
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
-->
  <div id="detcdiv" class="container">
    <div class="row">
      <!---溫度感測-->
      <div id="MyWidgetWrap1" style="width: 400px; height: 300px;">
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
                url: "http://120.101.8.8:8080/qiot/#/shareqboard/5bf800c69c31dc003388a5da#5bf800c69c31dc003388a5d7#d5a19379ef2311e8bb31932b984fcfcf@admin/jo8d5cfh000h1e40e3e2cpxn",
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
      <!--濕度感測-->
      <div id="MyWidgetWrap2" style="width: 400px; height: 300px;">
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


      </div>
    </div>
  </div>


<!--<iframe src="http://120.101.8.8:8080/qiot/#/shareqboard/5bf800c69c31dc003388a5da#5bf800c69c31dc003388a5d7#d5a19379ef2311e8bb31932b984fcfcf@admin/jo8d5cfh000h1e40e3e2cpxn" width="600" height="400"></iframe>-->
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
