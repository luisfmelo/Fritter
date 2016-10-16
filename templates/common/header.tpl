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
      <a href="{$BASE_URL}/pages/users/register.php">Register</a>
    </header>

    <div id="error_messages">
      {foreach $ERROR_MESSAGES as $error}
        {if $error != ''}
          <div class="error">{$error}</div>
        {/if}
      {/foreach}
    </div>
