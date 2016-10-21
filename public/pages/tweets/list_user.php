<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');

  $username = $_GET['username'];
  if (!$_GET['username']) {
    $_SESSION['error_messages'][] = 'Undefined username'; //criamos um array de erros porque pode acontecer que tenhamos mais que um -> mais seguro
    header("Location: $BASE_URL");
    exit;
  }

  $tweets = getUserTweets($username);

  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>
