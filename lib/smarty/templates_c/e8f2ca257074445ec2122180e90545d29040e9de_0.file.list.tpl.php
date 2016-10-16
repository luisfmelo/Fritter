<?php
/* Smarty version 3.1.30, created on 2016-10-16 20:55:58
  from "/var/www/html/Twitter-Copycat/templates/tweets/list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5803cd3eafd238_23025135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f2ca257074445ec2122180e90545d29040e9de' => 
    array (
      0 => '/var/www/html/Twitter-Copycat/templates/tweets/list.tpl',
      1 => 1476569693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803cd3eafd238_23025135 (Smarty_Internal_Template $_smarty_tpl) {
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

    <section id="tweets">
        <h2>Tweets</h2>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tweets']->value, 'tweet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->value) {
?>

      <article class="tweet-data">
        <span class="realname"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['realname'];?>
</span>
        <a href="#" class="username">@<?php echo $_smarty_tpl->tpl_vars['tweet']->value['username'];?>
</a>
        <span class="time"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['time'];?>
</span>
        <div class="tweet-text"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['text'];?>
</div>
      </article>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </section>

  </body>
</html>
<?php }
}
