<?php
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . 'database/tweets.php');

  $tweets = getAllTweets();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Twitter</title>
  <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
  <meta charset="utf-8">
</head>
  <body>
    <section id="tweets">
      <h2>Tweets</h2>

      <?php foreach ($tweets as $tweet) { ?>
      <article class="tweet">

        <div class="tweet-data">
          <span class="realname"><?=$tweet['realname']?></span>
          <a href="#" class="username">@<?=$tweet['username']?></a>
          <span class="time"><?=$tweet['time']?></span>
        </div>

        <div class="tweet-text"><?=$tweet['text']?></div>
      </article>
      <?php } ?>

    </section>
  </body>
</html>
