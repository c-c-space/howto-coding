<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />

  <script src="../../readme/index.js" async></script>
  <script type="text/javascript" async>
  document.addEventListener('readystatechange', (event) => {
    if (event.target.readyState === 'interactive') {
      let titleH1 = document.querySelector('#cover h1');
      titleH1.textContent = `How to Coding`;
    } else if (event.target.readyState === 'complete') {
      let titleH1 = document.querySelector('h1');
      titleH1.innerHTML = '.cover H1';
      titleH1.style.textAlign = "center";
      titleH1.insertAdjacentHTML ( 'afterend', '<button type="button" id="lastModified" onclick="buttonClick()"></button>' );

      let lastModified = document.querySelector('#lastModified');
      lastModified.innerHTML =
      'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
    }
  });
  </script>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../window/style.css" />
  <link rel="stylesheet" href="../../readme/style.css" />
  <link rel="stylesheet" href="../../readme/active.css" />

  <style>
  #contents::before {
    content:'関連記事';
    display: inline-block;
    font-size: 90%;
  }

  #links::before {
    content:'参考資料';
    display: block;
    padding-top: 0.5rem;
    font-size: 75%;
  }

  #contents::before,
  #links::before,
  #lastModified {
    font-family: "ipag", monospace;
  }

  #contents::before,
  #links::before {
    text-decoration: underline;
    margin: 0.5rem 0.75rem 0.5rem 0.25rem;
  }

  #lastModified {
    padding: 0.25rem;
  }
  </style>
</head>
<body>
  <nav id="menu">
    <a href="#api">Element</a>
    <a href="#attributes">Attributes</a>
    <a href="#size">Width & Height</a>
    <a href="#etc">参考資料</a>
  </nav>

  <article class="readme">
    <section id="cover" class="active cover">
      <h1></h1>
    </section>
    <section id="api" class="is-hide">
      <?php require('api.html'); ?>
    </section>
    <section id="attributes" class="is-hide">
      <?php require('attributes.html'); ?>
    </section>
    <section id="size" class="is-hide">
      <?php require('size.html'); ?>
    </section>
    <section id="etc" class="is-hide">
      <aside id="links"></aside>
    </section>
  </article>

  <aside id="contents"></aside>

  <script src="script.js"></script>
  <script src="size.js"></script>
  <script src="../../readme/script.js"></script>

  <script type="text/javascript">
  "use strict"

  const result = document.getElementById("result");
  const attributes = document.querySelectorAll(".readme section");
  for (const attribute of attributes) {
    if (attribute.hasAttributes()) {
      let attrs = attribute.attributes;
      let output = "";
      for(var i = attrs.length - 1; i >= 0; i--) {
        output += `<code class="red">${attrs[i].name}</code>="<code class="red">${attrs[i].value}</code>" `;
      }
      result.innerHTML += `<h3>section ${output}</h3>`;
    } else {
      result.innerHTML = "表示する属性はありません";
    }
  }
  </script>
</body>
</html>
