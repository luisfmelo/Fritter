<?php
  function getAllTweets() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM twitter_copycat.tweets JOIN twitter_copycat.users USING (username) ORDER BY time DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
