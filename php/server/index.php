<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../readme/index.js" defer></script>
  <link rel="stylesheet" href="../../cover/style.css" />
  <link rel="stylesheet" href="../../readme/style.css" />
  <link rel="stylesheet" href="../../hello/data_show.css" />
  <link rel="stylesheet" href="../../cover/mobile.css" media="screen and (max-width: 820px)">
  <style>
  #hello p {
    word-break: break-all;
  }
  </style>
</head>
<body id="cover">
  <main id="left">
    <?php require('hello.php'); ?>
    <section id="links"></section>
  </main>
  <article id="right">
    <section id="contents"></section>
    <?php require('howto.html'); ?>
  </article>
  <h1 id="title">$_SERVER | Personal Home Page Tools</h1>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="../../hello/data_show.js"></script>
</body>
</html>
