<?php
  function createUser($username, $realname, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO twitter_copycat.users
                            VALUES ('$username', '$realname', '$password')");
    $stmt->execute();
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM twitter_copycat.users
                            WHERE username = '$username' AND
                                  password = '$password';");
    $stmt->execute();
    return $stmt->fetch() == true; // return 1 or 0 if login correct or not
  }
?>
