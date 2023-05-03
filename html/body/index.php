<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../readme/index.js"></script>
  <script src="../../js/window/online/script.js"></script>
  <base target="_blank" rel="noopener noreferrer">
  <link rel="stylesheet" href="../elements.css" />
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

  #contents::before,
  #links::before,
  #lastModified {
    font-family: "ipag", monospace;
  }

  #contents::before,
  #links::before {
    display: block;
    text-decoration: underline;
    margin: 0.5rem 0.25rem;
  }

  #flow_contents {
    background: yellow;
    font-size: 95%;
    height: 95%;
  }

  #flow_contents::before {
    content:'インターネットの交信状態をオフラインにすると、ここにフローコンテンツの一覧が表示されます。';
  }

  @media screen and (max-width: 820px) {
    #flow_contents {
      min-height: 75vh;
    }
  }

  #lastModified {
    text-align: right;
    line-height: 150%;
    word-break: break-word;
  }
  </style>
</head>
<body id="cover" ononline="update(true)" onoffline="update(false)" onload="update(navigator.onLine)">
  <main id="left">
    <font id="status">(Unknown)</font>
    <br/>
    <section id="flow_contents" class="hide_offline"></section>
    <hr/>
    <section id="greeting" class="hide_online">
      <?php include('../flow-content.html'); ?>
    </section>
    <hr/>
    <br/>
    <aside id="links"></aside>
  </main>
  <article id="right">
    <article id="howto" class="readme data_show">
      <?php include('howto.html'); ?>
    </article>
    <br/>
    <aside id="contents"></aside>
    <hr/>
    <p id="lastModified"></p>
  </article>

  <h1 id="title">BODY | Hypertext Markup Language</h1>

  <script type="text/javascript">
  let lastModified = document.querySelector('#lastModified');
  lastModified.innerHTML =
  'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
  </script>
</body>
</html>
