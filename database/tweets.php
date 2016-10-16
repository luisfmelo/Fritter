<?php
  function getAllTweets() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM twitter_copycat.tweets
                            JOIN twitter_copycat.users USING (username)
                            ORDER BY time DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getUserTweets($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM twitter_copycat.tweets JOIN
                                 twitter_copycat.users USING (username)
                            WHERE username = '$username'
                            ORDER BY time DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
