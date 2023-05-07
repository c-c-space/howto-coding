<section id="hello">
  <div class="php">
    ?php
    <p><i>// 指定されたファイルを読み込み、評価する</i></p>
    <p>include('ファイル名');</p>
    <p><i>// include とほぼ同じですが、失敗した場合に E_COMPILE_ERROR レベルの致命的なエラーも発生する</i></p>
    <p>require('ファイル名');</p>
  </div>
  <hr/>
  <div class="php">
    ?php
    <p><i>指定されたファイルを一度だけ読み込み、評価する</i></p>
    <p>include_once('ファイル名');</p>
    <p><i>require とほぼ同じですが、ファイルがすでに読み込まれているかどうかを PHP がチェックする</i></p>
    <p>require_once('ファイル名');</p>
  </div>
</section>
<br>
