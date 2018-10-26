<?php
/* Smarty version 3.1.32, created on 2018-10-24 11:01:44
  from 'E:\xampp\htdocs\html\stream.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd034f8135e10_24420167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5734e31a63166cf451f02a7677bd703eacc913ba' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\stream.html',
      1 => 1540371696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd034f8135e10_24420167 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
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

      //切換頻道
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
          case '0':
            $("#stream").hide();
            break;
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
      <div class="row bg-success" style="height:60px" >
        <div class="col-sm-10 col-xs-10">
          <div class="col-sm-3 col-xs-3">
            <a href="../index.php" class="text-light h2" style=" text-decoration:none;" >智慧監視器</a>
          </div>
        </div>
        <!--下拉選單-->
        <div class="dropdown align-item-end col-sm-1.5 col-xs-1.5 " style="height:60px;">
          <button class="btn btn-success dropdown-toggle" id="dropbtn" type="button" style="height:60px;">
            <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>

          </button>
          <div class="dropdown dropdown-menu-right bg-success" id="dropmenu" aria-labelledby="dropbtn" style="z-index:999; display:none;">
            <a class="dropdown-item text-light" href="../index.php">首頁</a>
            <a class="dropdown-item text-light" href="../web/record.php">紀錄</a>
            <a class="dropdown-item text-light" href="../web/user.php">設定</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-light"  id="outbtn">登出</a>
          </div>
        </div>
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
    <!---選擇頻道--->
    <div class="col-sm-12 col-xs-12" style="height:40px;">
      <select class="" id="streamch">
        <option value="0">請選擇頻道</option>
        <option value="1">頻道1</option>
        <option value="2">頻道2</option>
        <option value="3">頻道3</option>
      </select>
      <button type="button" id="chbtn" class="btn btn-light" style="height:40px;">確認</button>
    </div>
    <!---即時影像--->
    <div class="col-sm-12 col-xs-12">
      <div class="mx-auto text-center" >
        <iframe id="stream" width="600px" height="380px"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:none;"></iframe>
      </div>
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
