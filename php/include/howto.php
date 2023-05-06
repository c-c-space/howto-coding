<section class="readme">
  <h2>
    <code>include()</code>;
    <code>require()</code>;
  </h2>
  <p>
    ウェブサイトで同じパーツを使いまわす際などに、include() または require() を使って外部ファイルを読み込みます。<br/>
    <i>
      include と require の違いは、指定したファイルが見つからなかった際の処理です。<br/>
      include は エラーが出ても その後の処理を続ける のに対して、 require は エラーが出た場合に PHP の 処理を中止します。
    </i>
  </p>
  <br>
  <h3>
    <code>include_once()</code>;
    <code>require_once()</code>;
  </h3>
  <p>
    ページ内に同じファイルを読み込まない場合は、include_once() または require_once() を使用します。
  </p>
  <p>この方法は、WordPress の テーマ・テンプレートの作成などに使用されています。</p>
</section>
