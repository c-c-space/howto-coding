<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../readme/index.js" defer></script>
  <link rel="stylesheet" href="../cover/style.css" />
  <link rel="stylesheet" href="../readme/style.css" />
  <link rel="stylesheet" href="../hello/data_show.css" />
  <link rel="stylesheet" href="../cover/mobile.css" media="screen and (max-width: 820px)">
  <style>
  .php::before {
    content: '<';
  }

  .php::after {
    content: ' ?>';
  }

  .readme summary {
    font-size: 150%;
  }

  #contents::before {
    content:'関連記事';
    font-size: 95%;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
    margin-bottom: 0.75rem;
  }

  #contents::before,
  #links::before {
    font-family: "ipag", monospace;
    display: block;
    text-decoration: underline;
  }

  #lastModified {
    text-align: right;
  }
  </style>
</head>
<body id="cover">
  <main id="left">
    <?php include('hello.php'); ?>
    <hr/>
    <section id="links"></section>
  </main>
  <article id="right">
    <?php include('howto.php'); ?>
    <br/>
    <nav id="contents"></nav>
    <hr/>
    <p id="lastModified"></p>
    <script>
      let lastModified = document.querySelector('#lastModified');

      lastModified.innerHTML =
      'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
    </script>
  </article>
  <h1 id="title">PHP: Hypertext Preprocessor</h1>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="../hello/data_show.js"></script>
</body>
</html>
