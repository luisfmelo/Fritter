<?php
/* Smarty version 3.1.30, created on 2016-10-21 22:38:43
  from "/var/www/public/templates/common/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a98f36d8544_74866822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945a10ae0dc3867f3dab08449371a53cf64c4d0b' => 
    array (
      0 => '/var/www/public/templates/common/header.tpl',
      1 => 1477084255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./menu_logged_in.tpl' => 1,
    'file:./menu_logged_out.tpl' => 1,
  ),
),false)) {
function content_580a98f36d8544_74866822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Twitter Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
  </head>
  <body>
    <header>
      <h1><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/tweets/list_all.php">Fritter</a></h1>
      <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value != '') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./menu_logged_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:./menu_logged_out.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </header>

    <div id="error_messages">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

    <div id="success_messages">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['success']->value != '') {?>
        <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php }
}
