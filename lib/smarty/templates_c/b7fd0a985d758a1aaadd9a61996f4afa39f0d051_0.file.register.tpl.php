<?php
/* Smarty version 3.1.30, created on 2016-10-16 22:00:04
  from "/var/www/html/Twitter-Copycat/templates/users/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5803dc444d2e33_72217973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7fd0a985d758a1aaadd9a61996f4afa39f0d051' => 
    array (
      0 => '/var/www/html/Twitter-Copycat/templates/users/register.tpl',
      1 => 1476648001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5803dc444d2e33_72217973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2>Register</h2>

<form action="../../actions/users/register.php" method="post">
  <label>Name: <input type="text" name="realname" value=""></label><br>
  <label>Username: <input type="text" name="username" value=""></label><br>
  <label>Password: <input type="password" name="password" value=""></label><br>
  <input type="submit" value="Register">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
