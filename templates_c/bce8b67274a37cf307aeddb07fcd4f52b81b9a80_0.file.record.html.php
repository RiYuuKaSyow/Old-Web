<?php
/* Smarty version 3.1.32, created on 2018-10-05 06:32:09
  from 'E:\xampp\htdocs\html\record.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb6e949b10457_54814867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce8b67274a37cf307aeddb07fcd4f52b81b9a80' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\record.html',
      1 => 1538713925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6e949b10457_54814867 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!----->
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/gradient.css">
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
  <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ><?php echo '</script'; ?>
>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視器</title>

  <?php echo '<script'; ?>
 type="text/javascript">
    //ajax練習
    $(function(){
      $("a.btn").click(function(){
        for( var i = 0 ; i <)


        /*
        var link = "../php/" + $(this).attr("title") + ".php" ;
        $("div#serch").load( link )
        */
      });
    });

  <?php echo '</script'; ?>
>

</head>
<body class="bg-secondary">

  <!--網頁開頭標題-->
  <div class="text-center text-light">
    <div class="bg-primary">
      <h1 class="font-weight-bold display-3" >
        智慧監視器紀錄
      </h1>
    <!--搜尋功能-->
    <!--
          <select class="" id = "sermb" name="sermeb" size="1">
            <option value="-1">成員</option>
            <?php
$__section_member_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sqlmeb']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_member_0_total = $__section_member_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_member'] = new Smarty_Variable(array());
if ($__section_member_0_total !== 0) {
for ($__section_member_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] = 0; $__section_member_0_iteration <= $__section_member_0_total; $__section_member_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']++){
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['sqlmeb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)];?>
" size="1"><?php echo $_smarty_tpl->tpl_vars['sqlmeb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)];?>
</option>
            <?php
}
}
?>
          </select>
    -->
          <form class="" action="database.php" method="post">
          從
          <select class="" name="sermon1" id = "sermon1" size="1">
            <option value="-1">月份</option>
            <?php
$__section_month_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_month_1_start = min(1, $__section_month_1_loop);
$__section_month_1_total = min(($__section_month_1_loop - $__section_month_1_start), 12);
$_smarty_tpl->tpl_vars['__smarty_section_month'] = new Smarty_Variable(array());
if ($__section_month_1_total !== 0) {
for ($__section_month_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] = $__section_month_1_start; $__section_month_1_iteration <= $__section_month_1_total; $__section_month_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']++){
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] : null)];?>
月</option>
            <?php
}
}
?>
          </select>
          <select class="" name="serday1" id = "serday1" size="1">
            <option value="-1">日期</option>
            <?php
$__section_day_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_day_2_start = min(1, $__section_day_2_loop);
$__section_day_2_total = min(($__section_day_2_loop - $__section_day_2_start), 31);
$_smarty_tpl->tpl_vars['__smarty_section_day'] = new Smarty_Variable(array());
if ($__section_day_2_total !== 0) {
for ($__section_day_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] = $__section_day_2_start; $__section_day_2_iteration <= $__section_day_2_total; $__section_day_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] : null)];?>
日</option>
            <?php
}
}
?>
          </select>
          <select class="" name="serh1" id = "serh1" size="1">
            <option value="-1">小時</option>
            <?php
$__section_hour_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_hour_3_start = min(0, $__section_hour_3_loop);
$__section_hour_3_total = min(($__section_hour_3_loop - $__section_hour_3_start), 24);
$_smarty_tpl->tpl_vars['__smarty_section_hour'] = new Smarty_Variable(array());
if ($__section_hour_3_total !== 0) {
for ($__section_hour_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] = $__section_hour_3_start; $__section_hour_3_iteration <= $__section_hour_3_total; $__section_hour_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] : null)];?>
時</option>
            <?php
}
}
?>
          </select>
          到
          <select class="" name="sermon2" id = "sermon2" size="1">
            <option value="-1">月份</option>
            <?php
$__section_month_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_month_4_start = min(1, $__section_month_4_loop);
$__section_month_4_total = min(($__section_month_4_loop - $__section_month_4_start), 12);
$_smarty_tpl->tpl_vars['__smarty_section_month'] = new Smarty_Variable(array());
if ($__section_month_4_total !== 0) {
for ($__section_month_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] = $__section_month_4_start; $__section_month_4_iteration <= $__section_month_4_total; $__section_month_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month']->value['index'] : null)];?>
月</option>
            <?php
}
}
?>
          </select>
          <select class="" name="serday2" id = "serday2" size="1">
            <option value="-1">日期</option>
            <?php
$__section_day_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_day_5_start = min(1, $__section_day_5_loop);
$__section_day_5_total = min(($__section_day_5_loop - $__section_day_5_start), 31);
$_smarty_tpl->tpl_vars['__smarty_section_day'] = new Smarty_Variable(array());
if ($__section_day_5_total !== 0) {
for ($__section_day_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] = $__section_day_5_start; $__section_day_5_iteration <= $__section_day_5_total; $__section_day_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day']->value['index'] : null)];?>
日</option>
            <?php
}
}
?>
          </select>
          <select class="" name="serh2" id = "serh2" size="1">
            <option value="-1">小時</option>
            <?php
$__section_hour_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['number']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_hour_6_start = min(0, $__section_hour_6_loop);
$__section_hour_6_total = min(($__section_hour_6_loop - $__section_hour_6_start), 24);
$_smarty_tpl->tpl_vars['__smarty_section_hour'] = new Smarty_Variable(array());
if ($__section_hour_6_total !== 0) {
for ($__section_hour_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] = $__section_hour_6_start; $__section_hour_6_iteration <= $__section_hour_6_total; $__section_hour_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']++){
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hour']->value['index'] : null)];?>
時</option>
            <?php
}
}
?>
          </select>
            <a class=" btn btn-primary " title="serch" >搜尋</a>
          </form>
      </div>
    </div>
  <!--表格-->
  <div class="container"  id="serch">
    <div class="row">
      <div class="col">
      </div>
      <div class="col-md-9">
        <table class="table table-striped table-border table-hover table-sm ">
          <thead class="thead-dark">
            <th scope="col">
              <form class="" action="del.php" method="post">
                <input type="submit"  class="btn btn-dark" value="刪除">
            </th>
            <th scope="col-xs-2">月份</th>
            <th scope="col">日期</th>
            <th scope="col">小時</th>
            <th scope="col">分鐘</th>
            <th scope="col">秒</th>
            <th scope="col">成員</th>
            <th scope="col"></th>
          </thead>
          <tbody>
            <!-- smarty section迴圈 取mysql資料-->
            <?php
$__section_sqlid_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sqldb']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sqlid_7_total = $__section_sqlid_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sqlid'] = new Smarty_Variable(array());
if ($__section_sqlid_7_total !== 0) {
for ($__section_sqlid_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] = 0; $__section_sqlid_7_iteration <= $__section_sqlid_7_total; $__section_sqlid_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] = $__section_sqlid_7_iteration;
?>
              <tr>
                <td><input type="checkbox" name="id<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
" style="zoom:3">
                <td> <?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->month;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->day;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->hour;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->min;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->sec;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sqldb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['index'] : null)]->member;?>
</td>
                <td>
                  <!--開啟圖片按鈕-->
                  <button type="button" class="btn btn-secondary text-dark" data-toggle="modal" data-target="#imgid<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
">
                    圖片
                  </button>
                  <!--開啟影片按鈕-->
                  <button type="button" class="btn btn-secondary text-dark" data-toggle="modal" data-target="#vidid<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
">
                    影片
                  </button>
                </td>
              </tr>
                <!--開啟dialog顯示圖片-->
                <div class="modal fade" id="imgid<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" >
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="../i/img<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
.jpg" width="400px" height="200px">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="vidid<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_sqlid']->value['rownum'] : null);?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" >
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <video id="vid1"height="200px" width="450px" preload="" controls controlsList="nodownload">
                          <source src="../video/test.mp4" type="video/mp4">
                          你的瀏覽器不支援mp4檔案格式
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php
}
}
?>
            </form>
          </tbody>
        </table>
      </div>
      <div class="col">
      </div>
    </div>
  </div>


</body>
</html>
<?php }
}
