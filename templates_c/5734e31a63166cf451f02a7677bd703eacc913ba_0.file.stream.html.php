<?php
/* Smarty version 3.1.32, created on 2018-10-15 17:59:13
  from 'E:\xampp\htdocs\html\stream.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc4b951613cd7_64884572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5734e31a63166cf451f02a7677bd703eacc913ba' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\stream.html',
      1 => 1539619150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc4b951613cd7_64884572 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
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
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視器</title>

  <?php echo '<script'; ?>
 type="text/javascript">

    $(function(){

      //檢查登入 顯示按鈕
      if (<?php echo $_smarty_tpl->tpl_vars['idcheck']->value;?>
) {
        $("#login_btn").hide();
        $("#signup_btn").hide();
        $("#dropbtn").show();
      };

      //下拉選單
      $("#dropbtn").click(function(){
        $("#dropmenu").toggle();
      });
      $("#dropbtn").mouseover(function(){
        $("#dropmenu").show();
      });
      $("#outbtn").mouseover(function(){
        $("#outbtn").css("background-color","red");
        $("#outbtn").css("color","white");
      });
      $("#outbtn").mouseleave(function(){
        $("#outbtn").css("color","black");
        $("#outbtn").css("background-color","#00000000");
      });

      //登出
      $("#outbtn").click(function(){
        $("#logout").show();
      });
      //取消
      $("#outcan").click(function(){
        $("#logout").hide();
      });

      $("#chbtn").click(function(){
        switch($('#streamch').find(':selected').val()) {
          case '1':
            $("#stream").attr( "src" , "<?php echo $_smarty_tpl->tpl_vars['channel1']->value;?>
" );
            $("#stream").show();
            break ;
          case '2':
            $("#stream").attr( "src" , "<?php echo $_smarty_tpl->tpl_vars['channel2']->value;?>
" );
            $("#stream").show();
            break ;
          case '3':
            $("#stream").attr( "src" , "<?php echo $_smarty_tpl->tpl_vars['channel3']->value;?>
" );
            $("#stream").show();
            break ;
        }
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
        <div class="col-sm-10 col-xs-10 text-light h2">
          智慧監視器
          <!---下拉選單-->
        </div>
        <div class="dropdown align-item-end col-sm-1.5 col-xs-1.5 " style="height:60px;">
          <button class="btn btn-dark dropdown-toggle" id="dropbtn" type="button" style="height:60px; display:none;">
            <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>

          </button>
          <div class="dropdown dropdown-menu-right bg-secondary" id="dropmenu" aria-labelledby="dropbtn" style="z-index:999; display:none;">
            <a class="dropdown-item text-light" href="../index.php">首頁</a>
            <a class="dropdown-item text-light" href="../phpweb/record.php">紀錄</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-light"  id="outbtn">登出</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!---選擇頻道--->
  <div class="text-center" style="height:80px;">
    <select class="" id="streamch">
      <option value="0">請選擇頻道</option>
      <option value="1">頻道1</option>
      <option value="2">頻道2</option>
      <option value="3">頻道3</option>
    </select>
    <button type="button" id="chbtn" class="btn btn-yellow">選擇頻道</button>
  </div>

  <!---即時影像--->
  <div class="mx-auto text-center" >
    <iframe id="stream" width="600px" height="400px" src="https://www.youtube.com/embed/PRlAY486hVg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:none;"></iframe>
  </div>

</body>
</html>
<?php }
}
