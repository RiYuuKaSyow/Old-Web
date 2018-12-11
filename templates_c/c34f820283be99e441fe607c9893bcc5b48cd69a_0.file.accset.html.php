<?php
/* Smarty version 3.1.32, created on 2018-12-04 08:10:00
  from 'E:\xampp\htdocs\html\accset.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0628483a9147_86308684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c34f820283be99e441fe607c9893bcc5b48cd69a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\accset.html',
      1 => 1543907397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0628483a9147_86308684 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/web.css">
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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
      $pwdflag = 1 ;
      $mailflag = 1 ;

      if( <?php echo $_smarty_tpl->tpl_vars['opwd']->value;?>
 == 1 ){
        window.alert("密碼錯誤");
      }
      else if( <?php echo $_smarty_tpl->tpl_vars['opwd']->value;?>
 == 2 ) {
        window.alert("更改完成");
      }

      $("#ch_pwd_btn").click(function(){
        $("#ch_pwd").toggle();
        if($pwdflag){
          $("#ch_pwd_btn").attr( "value" , "關閉" ) ;
          $pwdflag = 0 ;
        }
        else {
          $("#ch_pwd_btn").attr( "value" , "更改密碼" ) ;
          $pwdflag = 1 ;
        }
      });
        $("#ch_mail_btn").click(function(){
          $("#ch_mail").toggle();
          if($mailflag){
            $("#ch_mail_btn").attr( "value" , "關閉" ) ;
            $mailflag = 0 ;
          }
          else {
            $("#ch_mail_btn").attr( "value" , "更改信箱" ) ;
            $mailflag = 1 ;
          }

      });
    });
  <?php echo '</script'; ?>
>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <table class="table-border">
          <tbody>
            <tr style="height:50px;" >
                <td style="width:150px;">帳號:</td>
                <td style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>
</td>
            </tr>
            <tr style="height:200px;">
              <td ><input class="btn btn-outline-info" type="button" id="ch_pwd_btn" value="更改密碼"></td>
              <td>
                <div id="ch_pwd" class=""   style="display:none; border: 3px solid #FFAE7F;border-collapse: collapse;">
                  <form class="" action="../web/accset.php" method="post">
                    <span>
                      目前的密碼 <input type="password" name="pwd_old" class="" required="required"><br>
                    </span>
                    <span>
                      新密碼<input type="password" name="pwd_ch" class="" required="required"><br>
                    </span>
                    <span>
                      再次輸入新密碼<input type="password" class="" required="required"><br>
                    </span>
                    <button type="submit" name="button">確認</button>
                  </form>
                </div>
              </td>
            </tr>
            <tr style="height:120px;">
              <td style="width:150px;">信箱:</td>
              <td style="width:250px;"><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
</td>
              <td > <input class="btn btn-outline-primary" type="button" id="ch_mail_btn" value="更改信箱"> </td>
              <td style="width:250px;">
                <div id="ch_mail" class="" style="display:none; border: 3px solid #AE7FFF;border-collapse: collapse;" >
                  <form class="" action="../web/accset.php" method="post">
                    <div>
                      新電子郵件地址： <input type="email" name="new_mail" value="" required="required">
                      <button type="submit" name="button">確認</button>
                    </div>
                  </form>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
<?php }
}
