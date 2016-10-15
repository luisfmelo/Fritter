<?php
  require_once 'dbconfig.php';

  $BASE_DIR = '/var/www/html/Twitter-Copycat/';
  $BASE_URL = '../..';

  $conn = new PDO('pgsql:host=' . $host . ';dbname=' . $db, $username, $password);

  if ( $conn == NULL )
    die("Error connecting to Database");

  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Smarty Template Engine
  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

  $smarty = new Smarty();
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'lib/smarty/templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
?>
