<section id="hello" class="data_show">
  <p>
    <i>$_SERVER</i>
    <br/>
    <u data-id="http">['SERVER_PROTOCOL']</u>
    <span id="http" class="hide">
      <?php
      echo $_SERVER['SERVER_PROTOCOL'];
      ?>
    </span>
    <br/>
    <u data-id="addr">['SERVER_ADDR']</u>
    <span id="addr" class="hide">
      <br/>
      <?php
      echo $_SERVER['SERVER_ADDR'];
      ?>
      <br/>
    </span>
    <u data-id="name">['SERVER_NAME']</u>
    <span id="name" class="hide">
      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
      <br/>
    </span>
    <u data-id="cgi">['SERVER_PORT']</u>
    <span id="cgi" class="hide">
      <?php
      echo $_SERVER['SERVER_PORT'];
      ?>
    </span>
    <br/>
    <u data-id="software">['SERVER_SOFTWARE']</u>
    <span id="software" class="hide">
      <?php
      echo $_SERVER['SERVER_SOFTWARE'];
      ?>
      <br/>
    </span>
    <u data-id="php">['PHP_SELF']</u>
    <span id="php" class="hide">
      <br/>
      <?php
      echo $_SERVER['PHP_SELF'];
      ?>
    </span>
  </p>
</section>
<hr/>
<p>
  <font>$_SERVER</font> は、サーバー関連情報を全て保持する 特別な <code>定義済みの変数</code> です。<br/>
   $_SERVER['キーワード'] を使って、サーバー情報および実行時の環境情報を取得できます。
</p>
<pre>
<font>$_SERVER['SERVER_PROTOCOL']</font>;
プロトコルの名前とバージョン

<font>$_SERVER['SERVER_ADDR']</font>;
サーバーの IP アドレス

<font>$_SERVER['SERVER_NAME']</font>;
サーバーのホスト名

<font>$_SERVER['SERVER_PORT']</font>;
サーバーの通信ポートとして使用されているポート番号

<font>$_SERVER['SERVER_SOFTWARE']</font>;
サーバーの認識文字列

<font>$_SERVER['PHP_SELF']</font>;
現在実行しているPHPファイル名
</pre>
<br/>
