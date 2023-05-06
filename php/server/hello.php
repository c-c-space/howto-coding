<section id="hello">
  <p>
    <u>['SERVER_PROTOCOL']</u>
    <span>
      <?php
      echo $_SERVER['SERVER_PROTOCOL'];
      ?>
    </span>
    <br/>
    <u>['SERVER_ADDR']</u>
    <span>
      <br/>
      <?php
      echo $_SERVER['SERVER_ADDR'];
      ?>
    </span>
    <br/>
    <u>['SERVER_NAME']</u>
    <span>
      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
    </span>
    <br/>
    <u>['SERVER_PORT']</u>
    <span>
      <?php
      echo $_SERVER['SERVER_PORT'];
      ?>
    </span>
    <br/>
    <u>['SERVER_SOFTWARE']</u>
    <span>
      <?php
      echo $_SERVER['SERVER_SOFTWARE'];
      ?>
    </span>
    <br/>
    <u>['PHP_SELF']</u><br/>
    <span>
      <?php
      echo $_SERVER['PHP_SELF'];
      ?>
    </span>
  </p>
</section>
<hr/>
<p>
  <font>$_SERVER</font> は、サーバー関連情報を全て保持する 特別な <i>定義済みの変数</i> です。<br/>
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
