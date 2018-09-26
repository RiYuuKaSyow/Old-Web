<?php
/* Smarty version 3.1.32, created on 2018-09-19 14:55:06
  from 'E:\xampp\htdocs\php\record.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2472a2c78e3_41588309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6a6ba29bec15abd66c0f893177becaf4db626d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php\\record.html',
      1 => 1537361703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2472a2c78e3_41588309 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視器紀錄</title>

  <?php echo '<script'; ?>
 type="text/javascript">
    function imgchange(that){
        document.getElementById(img1).display = 'block' ;
    }
  <?php echo '</script'; ?>
>

</head>
<body class="bg-info">

    <dev class="sm-12">
    </dev>
  <!-- smarty section迴圈 取mysql資料-->
  <?php
$__section_sqlid_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sqldb']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sqlid_0_total = $__section_sqlid_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sqlid'] = new Smarty_Variable(array());
if ($__section_sqlid_0_total !== 0) {
for ($__section_sqlid_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] = 0; $__section_sqlid_0_iteration <= $__section_sqlid_0_total; $__section_sqlid_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']++){
?>
    <li>
      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->id;?>

      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->date;?>
日
      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->hour;?>
點
      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->min;?>
分
      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->sec;?>
秒:
      <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->who;?>

      <img src="../img/img1.jpg" alt="" id = "img".sqlid style = " display : none ">
      <input type="button" onClick="imgchange()" value="開啟圖片" >
    </li>
  <?php
}
}
?>

</body>
</html>
<?php }
}
