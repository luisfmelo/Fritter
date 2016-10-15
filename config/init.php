<?php
  require_once 'dbconfig.php';

  $BASE_DIR = '/var/www/html/Twitter-Copycat/';
  $BASE_URL = '../../';
  $dsn = "pgsql:host=$host;user=$username;password=$password";

  $conn = new PDO('pgsql:host=' . $host . ';dbname=' . $db, $username, $password);

  if ( $conn == NULL )
    die("Error connecting to Database");

  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
