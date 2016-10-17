<!DOCTYPE html>
<html>
  <head>
    <title>Twitter Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{$BASE_URL}/css/style.css">
  </head>
  <body>
    <header>
      <h1><a href="{$BASE_URL}/pages/tweets/list_all.php">Fritter</a></h1>
      {if $USERNAME != ''}
        {include file='./menu_logged_in.tpl'}
      {else}
        {include file='./menu_logged_out.tpl'}
      {/if}
    </header>

    <div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
      {if $error != ''}
        <div class="error">{$error}</div>
      {/if}
    {/foreach}
    </div>

    <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
      {if $success != ''}
        <div class="success">{$success}</div>
      {/if}
    {/foreach}
    </div>
