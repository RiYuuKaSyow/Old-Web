<?php
/* Smarty version 3.1.32, created on 2018-10-24 09:38:14
  from 'E:\xampp\htdocs\html\memberset.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd0216681a541_95295745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16db461a913bb2ae5bd9026fbd8ed1338f1679e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\memberset.html',
      1 => 1540366524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd0216681a541_95295745 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php echo '<script'; ?>
 type="text/javascript">
    function uploadmore(){
      morebtn = '' ;
      for( i = 0 ; i < 8 ; i++){
        morebtn += '<input type="file" name="pic' + i + ' value="選擇圖片">' +"\n" ;
      }
      $('#uploadbtn').html(morebtn);
    };
  <?php echo '</script'; ?>
>
</head>
<body>

  <form  action="../php/uploadpic.php" method="post" enctype="multipart/form-data">


      <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
      <br>

      <span id="uploadbtn" class="">
        <input type="file" name="pic0" value="選擇圖片">
      </span>

      <input type="button" onclick="uploadmore()"  value="多張上傳">
      <input type="submit" value="上傳">


  </form>

</body>
</html>
<?php }
}
