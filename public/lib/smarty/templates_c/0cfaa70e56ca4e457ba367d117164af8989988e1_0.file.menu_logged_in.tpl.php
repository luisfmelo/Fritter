<?php
/* Smarty version 3.1.30, created on 2016-10-21 22:39:01
  from "/var/www/public/templates/common/menu_logged_in.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a9905cd8277_66855328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cfaa70e56ca4e457ba367d117164af8989988e1' => 
    array (
      0 => '/var/www/public/templates/common/menu_logged_in.tpl',
      1 => 1477084255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a9905cd8277_66855328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }
}
