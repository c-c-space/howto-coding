<section class="readme">
  <h2>
    <font>include()</font>;
    <font>require()</font>;
  </h2>
  <p>
    外部ファイルを読み込む PHP 関数 include と require の違いは、指定したファイルが見つからなかった際の処理です。<br/>
    <i>include は エラーが出ても その後の処理を続ける のに対して、 require は エラーが出た場合に PHP の 処理を中止します。</i>
  </p>
  <hr>
  <h3>
    <font>include_once()</font>;
    <font>require_once()</font>;
  </h3>
  <p>
    ページ内に同じファイルを読み込まない場合は、include_once() または require_once() を使用します。<br/>
    <i>include_once と require_once の違いは include と require の違いと同じです。</i>
  </p>
  <hr>
  <br>
  <p>
    これらの関数は 複雑になったコードを分解して、外部ファイルとして読み込む際などに多く使用されます。<br/>
    例えば、サイト内で共通して使用するヘッダーやフッターなどの部分を 別々のファイルとして管理し、簡易的なテンプレートを作成することができます。
  </p>
</section>
