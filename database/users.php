<?php
  function createUser($username, $realname, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO twitter_copycat.users VALUES ('$username', '$realname', '$password')");
    $stmt->execute();
  }
?>
