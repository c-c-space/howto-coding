<!DOCTYPE html>
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
  .php::before {
    content: '<?';
  }

  .php::after {
    content: ' ?>';
  }

  #hello p {
    word-break: break-all;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
  }

  #links::before {
    font-family: "ipag", monospace;
    display: block;
    text-decoration: underline;
  }
  </style>
</head>
<body id="cover">
  <main id="left">
    <section id="contents"></section>
    <?php include('hello.php'); ?>
    <hr/>
    <section id="links"></section>
  </main>
  <article id="right">
    <?php require('howto.html'); ?>
  </article>
  <h1 id="title">include | Personal Home Page Tools</h1>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="../../hello/data_show.js"></script>
</body>
</html>
