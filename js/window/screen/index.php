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
      <hr/>
      <p id="lastModified"></p>
    </article>
    <hr/>
    <nav id="links"></nav>
  </article>

  <article id="main" class="readme">
    <h1>
      Screen<br/>
      <small>Width & Height</small>
    </h1>
    <table class="size">
      <tbody>
        <tr>
          <td>window.screen.width</td>
          <td>スクリーンサイズ(解像度)</td>
          <td id="outScreenWidth" class="nowValue"></td>
        </tr>
        <tr>
          <td>window.screen.availWidth </td>
          <td>タスクバーなどを除くスクリーン有効域の幅</td>
          <td id="outAvailWidth" class="nowValue"></td>
        </tr>
        <tr>
          <td>window.screen.height</td>
          <td>スクリーンサイズ(解像度)</td>
          <td id="outScreenheight" class="nowValue"></td>
        </tr>
        <tr>
          <td>window.screen.availHeight</td>
          <td>タスクバーなどを除くスクリーン有効域の高さ</td>
          <td id="outAvailHeight" class="nowValue"></td>
        </tr>
      </tbody>
    </table>
    <p>
      画面の色深度<br/>
      Screen<code class="red">.colorDepth</code> |
      <font id="colorDepth" class="nowValue"></font> bits per pixel
      <br/>
      <br/>
      画面のビット深度<br/>
      Screen<code class="red">.pixelDepth</code> |
      <font id="pixelDepth" class="nowValue"></font> bits per pixel
      <br/>
      <br/>
      画面の向き |
      Screen<code class="red">.orientation</code><br/>
      <code id="orientation" class="nowValue"></code>
    </p>
  </article>

  <script src="script.js"></script>
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
