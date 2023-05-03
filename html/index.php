<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../readme/index.js"></script>
  <base target="_blank" rel="noopener noreferrer">
  <link rel="stylesheet" href="elements.css" />
  <link rel="stylesheet" href="../hello/data_show.css" />
  <link rel="stylesheet" href="../readme/style.css" />
  <link rel="stylesheet" href="../cover/style.css" />
  <link rel="stylesheet" href="../cover/mobile.css" media="print">
  <link rel="stylesheet" href="../cover/mobile.css" media="screen and (max-width: 820px)">
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
  #lastModified,
  #contents::before,
  #links::before {
    font-family: "ipag", monospace;
  }

  #contents::before,
  #links::before {
    text-decoration: underline;
    display: block;
    margin: 0.5rem 0.25rem;
  }

  #hello .head::before,
  #hello .head::after,
  #hello .body::before,
  #hello .body::after {
    font-style: italic;
    font-family: "Times New Roman", serif;
    font-size: 111%;
  }

  #hello {
    line-height: 111%;
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
    <section id="hello">
      <?php include('hello.html'); ?>
    </section>
    <br/>
    <section id="links"></section>
  </main>
  <article id="right">
    <article id="howto" class="readme data_show">
      <?php include('howto.html'); ?>
    </article>
    <br/>
    <section id="contents"></section>
    <br/>
    <p id="lastModified"></p>
  </article>

  <h1 id="title">HTML | Hypertext Markup Language</h1>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="../hello/data_show.js"></script>

  <script>
  let lastModified = document.querySelector('#lastModified');
  lastModified.innerHTML =
  'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
  </script>
</body>
</html>
