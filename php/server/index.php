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

  #contents::before {
    content:'関連記事';
    font-size: 95%;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
  }

  #contents::before,
  #links::before {
    display: block;
    font-family: "ipag", monospace;
    text-decoration: underline;
  }
  </style>
</head>
<body id="cover">
  <main id="left">
    <?php require('hello.php'); ?>
    <hr/>
    <section id="links"></section>
  </main>
  <article id="right">
    <?php require('howto.php'); ?>
    <br/>
    <section id="contents"></section>
    <hr/>
    <p id="lastModified"></p>
    <script>
    let lastModified = document.querySelector('#lastModified');

    lastModified.innerHTML =
    'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
    </script>
  </section>
  </article>
  <h1 id="title">$_SERVER | PHP: Hypertext Preprocessor</h1>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="../../hello/data_show.js"></script>
</body>
</html>
