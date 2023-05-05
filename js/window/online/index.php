<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="script.js"></script>
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
    filter: invert(1);
    mix-blend-mode: exclusion;
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
  #links,
  #lastModified {
    padding: 0.5rem;
    margin: 0;
  }
  </style>
</head>
<body onload="update(navigator.onLine)" ononline="update(true)" onoffline="update(false)">
  <button type="button" id="js-button"><b></b></button>
  <article id="hidden">
    <aside id="contents" class="hide_offline"></aside>
    <article id="howto" class="readme">
      <?php require('howto.html'); ?>
      <p id="lastModified"></p>
    </article>
    <nav id="links" class="hide_offline"></nav>
  </article>

  <article id="main" class="readme">
    <h1 id="status">(Online or Offline?)</h1>
    <div id="log"></div>
  </article>

  <script src="network.js" defer></script>
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
