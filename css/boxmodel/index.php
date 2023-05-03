<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <script src="../../readme/index.js" async></script>
  <link rel="stylesheet" href="../cascading.css" />
  <link rel="stylesheet" href="../../html/elements.css" />
  <link rel="stylesheet" href="../../readme/style.css" />
  <link rel="stylesheet" href="../pseudo-classes/lightbox.css" />
  <style type="text/css">
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
    text-decoration: underline;
    display: block;
    font-family: "ipag", monospace;
    margin: 0.5rem 0.25rem;
  }

  #lastModified {
    font-family: "ipag", monospace;
    line-height: 125%;
    word-break: break-word;
  }

  .ruleset {
    list-style: inside "　";
  }

  .ruleset::before {
    content: 'コンテンツ領域';
    color: #000;
    font-size: 1rem;
    font-weight: bold;
    position: relative;
    top: 0;
  }
  </style>
</head>
<body class="body">
  <nav class="nav special buttons">
    <br/>
    <a href="#howto" class="special a_tag">ボックスモデル</a>
    <a href="#style_css" class="special a_tag" onclick="styleClick()">style.css</a>
    <a href="#etc" class="special a_tag">関連記事</a>
    <br/>
  </nav>

  <h1 id="title" class="h1">The Box Model | Cascading Style Sheets</h1>

  <ul class="ruleset special">
    <i>body, h1, .special</i>
    <li class="declaration">
      <b>border</b>
      <span id="borderOutput" class="special">none</span>
    </li>
    <li class="declaration">
      <b>padding</b>
      <span id="paddingOutput" class="special">unset</span>
    </li>
    <li class="declaration">
      <b>margin</b>
      <span id="marginOutput" class="special">unset</span>
    </li>
  </ul>

  <section class="special section buttons">
    <br/>
    <b>境界領域</b>
    <br/>
    <button class="special" onclick="setBorder('none');">border: none;</button>
    <button class="special" onclick="setBorder('solid 1px');">border: solid 1px;</button>
    <button class="special" onclick="setBorder('dashed 2px');">border: dashed 2px;</button>
    <button class="special" onclick="setBorder('dotted 3px');">border: dotted 3px;</button>
    <button class="special" onclick="setBorder('double 4px');">border: double 4px;</button>
    <button class="special" onclick="setBorder('groove 2.5vw');">border: groove 2.5vw;</button>
    <button class="special" onclick="setBorder('ridge 2.5vw');">border: ridge 2.5vw;</button>
    <button class="special" onclick="setBorder('inset 1rem');">border: inset 1rem;</button>
    <button class="special" onclick="setBorder('outset 1rem');">border: outset 1rem;</button>
    <br/>
  </section>
  <section class="special section buttons">
    <br/>
    <b>パディング領域</b>
    <br/>
    <button class="special" onclick="setPadding('0');">padding: 0;</button>
    <button class="special" onclick="setPadding('10px');">padding: 10px;</button>
    <button class="special" onclick="setPadding('1.25rem');">padding: 1.25rem;</button>
    <button class="special" onclick="setPadding('2.5vw');">padding: 2.5vw;</button>
    <button class="special" onclick="setPadding('5.55%');">padding: 5.55%;</button>
    <br/>
  </section>
  <section class="special section buttons">
    <br/>
    <b>マージン領域</b>
    <br/>
    <button class="special" onclick="setMargin('0');">margin: 0;</button>
    <button class="special" onclick="setMargin('10px');">margin: 10px;</button>
    <button class="special" onclick="setMargin('1.25rem');">margin: 1.25rem;</button>
    <button class="special" onclick="setMargin('2.5vw');">margin: 2.5vw;</button>
    <button class="special" onclick="setMargin('5.55%');">margin: 5.55%;</button>
    <br/>
  </section>

  <p id="lastModified" class="p_element"></p>

  <article class="lightbox" id="howto">
    <a href="#" class="close" onclick="window.history.back(); return false;"></a>
    <section id="coding" class="readme translate_center">
      <?php readfile('howto.html'); ?>
    </section>
  </article>

  <article class="lightbox" id="style_css">
    <a href="#" class="close" onclick="window.history.back(); return false;"></a>
    <section id="stylesheet" class="readme translate_center">
      <?php readfile('stylesheet.html'); ?>
    </section>
  </article>

  <aside class="lightbox" id="etc">
    <a href="#" class="close" onclick="window.history.back(); return false;"></a>
    <section id="contents" class="translate_center"></section>
    <section id="links" class="fixed_bottom"></section>
  </aside>

  <script src="script.js" defer></script>
  <script>
  function styleClick(){
    const styleCSS = document.createElement( "link" );
    styleCSS.href = "style.css";
    styleCSS.type = "text/css";
    styleCSS.rel = "stylesheet";
    document.getElementsByTagName("head")[0].appendChild(styleCSS);
  }

  let lastModified = document.querySelector('#lastModified');
  lastModified.innerHTML =
  'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>' + '</time>';
  </script>
</body>
</html>
