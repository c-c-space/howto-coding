<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../../readme/index.js" async></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../../style.css" />
  <link rel="stylesheet" href="../../elements.css" />
  <link rel="stylesheet" href="../../../readme/style.css" />
  <link rel="stylesheet" href="../../../css/pseudo-classes/lightbox.css" />
  <style>
  .sample {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  #one:target,
  #two:target,
  #three:target,
  #four:target {
    color: #fff;
    background: #000;
  }

  .readme a {
    color: #000;
    filter: invert();
  }

  #contents::before {
    content:'関連記事';
    font-size: 90%;
  }

  #links::before {
    content:'参考資料';
    font-size: 75%;
  }

  #contents::before,
  #links::before {
    display: block;
    text-decoration: underline;
    margin: 0.5rem 0.25rem;
  }

  pre {
    font-size: 125%;
  }

  pre,
  code,
  .sample,
  #lastModified {
    font-family: "ipag", monospace;
  }

  .sample {
    box-sizing: border-box;
    font-size: 1.5rem;
    line-height: 150%;
    width: 100%;
  }

  #lastModified {
    position: fixed;
    bottom:0;
    right: 0;
    padding: 0.5rem;
    margin: 0;
    word-break: break-word;
  }

  @media screen and (max-width: 820px) {
    .sample {
      font-size: 3.21vw;
    }
  }
  </style>
</head>
<body>
  <nav id="nav">
    <a href="#one">高度なテキスト整形</a>
    <a href="#two">引用・略語</a>
    <a href="#three">編集・コード</a>
    <a href="#etc">関連記事</a>
  </nav>

  <h1 class="sample">
    <blockquote class="blockquote" contenteditable="true"></blockquote>
    <cite class="cite_element" contenteditable="true"></cite>
    <q class="q_element" contenteditable="true"></q>
    <hr/>
    <abbr class="abbr_element" contenteditable="true"></abbr>
    <dfn class="dfn_element" contenteditable="true"></dfn>
    <hr/>
    <ins class="ins" contenteditable="true"></ins>
    <del class="del" contenteditable="true"></del>
    <br/>
    <s class="s_element" contenteditable="true"></s>
    <hr/>
    <mark class="mark_element" contenteditable="true"></mark>
  </h1>

  <article id="howto">
    <?php readfile('howto.html'); ?>
  </article>

  <aside class="lightbox" id="etc">
    <a href="#" class="close" onclick="window.history.back(); return false;"></a>
    <section id="contents" class="translate_center"></section>
    <section id="links" class="fixed_bottom"></section>
  </aside>
  <br/>
  <p id="lastModified"></p>

  <script type="text/javascript">
  document.addEventListener('readystatechange', (event) => {
    if (event.target.readyState === 'interactive') {
      let lastModified = document.querySelector('#lastModified');
      lastModified.innerHTML =
      'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
    }

    else if (event.target.readyState === 'complete') {
      function random(number) {
        return Math.floor(Math.random() * (number+1));
      }

      function randomRGB() {
        let random255 = `rgb(${random(255)},${random(255)},${random(255)})`;
        return random255;
      }

      const colorAll = document.querySelectorAll('body, #nav a, .sample *, #sample *, #lastModified');
      for (const colorItem of colorAll) {
        colorItem.style.backgroundColor = randomRGB();
        colorItem.style.color = randomRGB();
      }

      const randomRGBbgAll = document.querySelectorAll('#nav a');
      for (const randomRGBbg of randomRGBbgAll) {
        randomRGBbg.addEventListener('click', function(event) {
          const bgSectionAll = document.querySelectorAll('#one, #two, #three, #four');
          for (const bgSection of bgSectionAll) {
            bgSection.style.backgroundColor = randomRGB();
          }
        });
      }
    }
  });
</script>
</body>
</html>
