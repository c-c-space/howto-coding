<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../../readme/index.js" async></script>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../../event/style.css" />
  <link rel="stylesheet" href="../../event/hidden.css" />
  <link rel="stylesheet" href="../../../readme/style.css" />
  <style>
  body {
    background: #000;
  }

  #hidden {
    mix-blend-mode: difference;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
  }

  #links::before,
  #lastModified {
    display: block;
    font-family: "ipag", monospace;
  }

  #contents::before,
  #links::before {
    text-decoration: underline;
    margin: 0.5rem 0.75rem 0.5rem 0.25rem;
  }

  #contents,
  #links {
    padding: 0.5rem;
    margin: 0;
  }
  </style>
</head>
<body>
  <button type="button" id="js-button"><b></b></button>
  <article id="hidden">
    <aside id="contents"></aside>
    <article id="howto" class="readme">
      <?php require('howto.html'); ?>
      <br/>
      <p id="lastModified"></p>
    </article>
    <hr/>
    <nav id="links"></nav>
  </article>

  <article id="main" class="readme">
    <h1>
      <b>Screen | Orientation API</b><br/>
      <small>
        <code id="orientation"></code><br/>
        <code id="angle"></code>
      </small>
    </h1>
  </article>

  <script src="orientation.js"></script>
  <script type="text/javascript">
  const button = document.querySelector('#js-button');
  const body = document.querySelector('body');

  button.addEventListener('click', event => {
    button.classList.toggle('close');
    body.classList.toggle('open');
  });

  let lastModified = document.querySelector('#lastModified');
  lastModified.innerHTML =
  'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
  </script>
</body>
</html>
