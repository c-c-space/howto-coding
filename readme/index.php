<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="index.js" defer></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../hello/data_show.css" />
  <link rel="stylesheet" href="../html/elements.css" />
  <link rel="stylesheet" href="../cover/style.css" />
  <link rel="stylesheet" href="../cover/mobile.css" media="screen and (max-width: 820px)">
  <style>
  .readme section {
    box-sizing: border-box;
    transition: 1s;
  }

  .readme .active {
    opacity: 1;
    overflow: auto;
    height: auto;
  }

  .readme .is-hide {
    height: 0;
    opacity: 0;
    overflow: hidden;
  }

  .HTMLcomments::before {
    content: '<!-- ';
  }

  .HTMLcomments::after {
    content: ' -->';
  }

  #contents::before {
    content:'ID #contents';
  }

  #links::before {
    content:'ID #links';
  }

  #contents::before,
  #links::before {
    display: block;
    font-size: 90%;
    text-decoration: underline;
    margin: 1rem 0.25rem;
  }

  #lastModified {
    text-align: right;
    line-height: 125%;
    word-break: break-word;
  }

  @media screen and (max-width: 820px) {
    #lastModified {
      font-size: 2vw;
    }
  }
  </style>
</head>

<body id="cover">
  <article id="left" class="readme">
    <h2>
      <a href="#index_html">index.html</a>
      <a href="#index_json">index.json</a>
      <a href="#index_js">index.js</a>
    </h2>
    <hr/>
    <section id="index_json" class="data_show is-hide">
      <?php require('index_json.html'); ?>
    </section>
    <section id="index_js" class="data_show is-hide">
      <?php require('index_js.html'); ?>
    </section>
    <section id="index_html" class="data_show active">
      <?php require('index_html.html'); ?>
    </section>
  </article>
  <aside id="right">
    <div id="contents"></div>
    <hr/>
    <div id="links"></div>
    <hr/>
    <p id="lastModified">Copyright (C) 2022 creative-community.space</p>
  </aside>

  <h1 id="title">The List of Contents | How to Coding</h1>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="../hello/data_show.js"></script>
  <script src="script.js"></script>
</body>
</html>
