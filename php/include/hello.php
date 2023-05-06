<section id="hello">
  <div class="php">
    ?php
    <p><i>// 指定されたファイルを読み込み、評価する</i></p>
    <p>include('ファイルのURL');</p>
    <p><i>// include とほぼ同じですが、失敗した場合に E_COMPILE_ERROR レベルの致命的なエラーも発生する</i></p>
    <p>require('ファイルのURL');</p>
    <br/>
    <p><i>// include または require で読み込まれたファイルの名前を配列として返す</i></p>
    <p>$included_files = get_included_files()</p>
    <p>
      foreach ($included_files as $filename) {<br/>echo "$filename\n";<br/>}<br/>
    </p>
  </div>
  <br/>
  <div class="php">
    ?php
    <p><i>指定されたファイルを一度だけ読み込み、評価する</i></p>
    <p>?php include_once('ファイルのURL');</p>
    <p><i>require とほぼ同じですが、ファイルがすでに読み込まれているかどうかを PHP がチェックする</i></p>
    <p>?php require_once('ファイルのURL');</p>
    <p><i>// get_included_files() のエイリアス</i></p>
    <p>$required_files= get_required_files()</p>
    <p>
      foreach ($required_files as $requiredfilename) {<br/>echo "$requiredfilename\n";<br/>}<br/>
    </p>
  </div>
</section>
<br>
