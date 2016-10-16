<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');

  $username = $_GET['username'];
  if ( !isset($_GET['username']) )
    die('username missing');

  $tweets = getUserTweets($username);

  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>
