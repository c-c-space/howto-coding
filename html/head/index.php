<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../readme/index.js" async></script>
  <base target="_blank" rel="noopener noreferrer">
  <link rel="stylesheet" href="../elements.css" />
  <link rel="stylesheet" href="../../hello/data_show.css" />
  <link rel="stylesheet" href="../../readme/style.css" />
  <link rel="stylesheet" href="../../cover/style.css" />
  <link rel="stylesheet" href="../../cover/mobile.css" media="print">
  <link rel="stylesheet" href="../../cover/mobile.css" media="screen and (max-width: 820px)">
  <style type="text/css">
  #contents::before {
    content:'関連記事';
    font-size: 100%;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
  }

  #hello,
  #contents::before,
  #links::before,
  #lastModified {
    font-family: "ipag", monospace;
  }

  #contents::before,
  #links::before {
    text-decoration: underline;
    display: block;
    margin: 0.5rem 0.25rem;
  }

  #hello u {
    font-style: italic;
    font-family: "Times New Roman", serif;
    font-size: 111%;
    line-height: 150%;
  }

  #hello {
    word-break: break-word;
  }

  #lastModified {
    text-align: right;
    line-height: 125%;
    word-break: break-word;
  }
  </style>
</head>
<body id="cover">
  <main id="left">
    <section id="hello" class="head data_show">
      <?php require('hello.html'); ?>
    </section>
    <hr/>
    <br/>
    <aside id="links"></aside>
  </main>
  <article id="right">
    <article id="howto" class="readme data_show">
      <?php require('howto.html'); ?>
    </article>
    <article id="meta" class="readme data_show">
      <?php require('meta.html'); ?>
    </article>
    <article id="icon" class="readme data_show">
      <?php require('icon.html'); ?>
    </article>
    <br/>
    <article id="link" class="readme data_show">
      <?php require('stylesheet.html'); ?>
    </article>
    <br/>
    <aside id="contents"></aside>
    <br/>
    <p id="lastModified"></p>
  </article>

  <h1 id="title">HEAD | Hypertext Markup Language</h1>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="../../hello/data_show.js" defer></script>

  <script type="text/javascript">
  let lastModified = document.querySelector('#lastModified');
  lastModified.innerHTML =
  'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
  </script>
</body>
</html>
