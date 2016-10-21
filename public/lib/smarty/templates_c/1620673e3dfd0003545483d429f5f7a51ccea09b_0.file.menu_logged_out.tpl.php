<?php
/* Smarty version 3.1.30, created on 2016-10-21 22:38:43
  from "/var/www/public/templates/common/menu_logged_out.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a98f3738082_18415748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1620673e3dfd0003545483d429f5f7a51ccea09b' => 
    array (
      0 => '/var/www/public/templates/common/menu_logged_out.tpl',
      1 => 1477084255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a98f3738082_18415748 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }
}
