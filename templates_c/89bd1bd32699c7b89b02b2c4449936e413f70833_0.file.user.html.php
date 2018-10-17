<?php
/* Smarty version 3.1.32, created on 2018-10-17 12:44:24
  from 'E:\xampp\htdocs\html\user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc7128870c1b7_57753326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89bd1bd32699c7b89b02b2c4449936e413f70833' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\user.html',
      1 => 1539768687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc7128870c1b7_57753326 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <link rel="stylesheet" href="../css/user.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/fixcolor.css">
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
 src="../js/navbar.js"><?php echo '</script'; ?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視器</title>
  <?php echo '<script'; ?>
 type="text/javascript">
    //檢查登入 顯示按鈕
    $(function(){
      //帳號設定頁面
      $("#setting").click(function(){
        $("#setdiv").attr( "src" , "userset.html");
        $("#setdiv").show();
      });

      //管理成員頁面
      $("#setmember").click(function(){
        $("#setdiv").attr( "src" , "../html/memberset.html") ;
        $("#setdiv").show();
      });

    });
  <?php echo '</script'; ?>
>
</head>
<body>

  <!---網頁navbar--->
  <div class="container col-sm-12 col-xs-12" style="height:80px">
    <nav class="nav-tabs navbar-sticky-top" style="height:63px">
      <div class="row bg-dark" style="height:60px" >
        <div class="col-sm-10 col-xs-10">
          <div class="col-sm-3 col-xs-3">
            <a href="../index.php" class="text-light h2" style=" text-decoration:none;" >智慧監視器</a>
          </div>
        </div>
        <!--下拉選單-->
        <div class="dropdown align-item-end col-sm-1.5 col-xs-1.5 " style="height:60px;">
          <button class="btn btn-dark dropdown-toggle" id="dropbtn" type="button" style="height:60px;">
            <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>

          </button>
          <div class="dropdown dropdown-menu-right bg-secondary" id="dropmenu" aria-labelledby="dropbtn" style="z-index:999; display:none;">
            <a class="dropdown-item text-light" href="../index.php">首頁</a>
            <a class="dropdown-item text-light" href="../web/record.php">紀錄</a>
            <a class="dropdown-item text-light" href="../web/stream.php">即時影像</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-light"  id="outbtn">登出</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row">
      <div id="userleft" class="text-center "  style="width: 150px; height:130px;">
        <p>
          <a class="leftbtn"  id="setting" >帳號設定</a>
          <div class="dropdown-divider"></div>
          <a class="leftbtn"  id="setmember" >
            管理成員
            <div style="display:none;">
              <a id="">新增</a>
              <a id="">修改</a>
              <a id="">刪除</a>
            </div>
          </a>
        </p>
      </div>
      <div class="col-xs-8 col-sm-8" >
          <iframe id="setdiv" style="display:none; width: 750px; height:400px ;" ></iframe>
      </div>
    </div>
  </div>

</body>
</html>
<?php }
}