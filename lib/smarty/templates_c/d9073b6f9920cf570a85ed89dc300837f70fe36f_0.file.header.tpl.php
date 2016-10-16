<?php
/* Smarty version 3.1.30, created on 2016-10-16 21:55:22
  from "/var/www/html/Twitter-Copycat/templates/common/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5803db2ab5b620_65787237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9073b6f9920cf570a85ed89dc300837f70fe36f' => 
    array (
      0 => '/var/www/html/Twitter-Copycat/templates/common/header.tpl',
      1 => 1476646972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803db2ab5b620_65787237 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/register.php">Register</a>

    </header>
<?php }
}
