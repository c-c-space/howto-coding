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
  <p>
    <i>通信に必要な情報</i>
    <br/>
    <u data-id="ip">IP</u>
    <span id="ip" class="hide">
      <?php
      echo $_SERVER['REMOTE_ADDR'];
      ?>
    </span>
    <br/>
    <u data-id="host">HOST</u>
    <span id="host" class="hide">
      <?php
      $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
      echo $host
      ?>
      <br/>
    </span>
    <u data-id="port">PORT</u>
    <span id="port" class="hide">
      <?php
      echo $_SERVER['REMOTE_PORT'];
      ?>
    </span>
  </p>
  <p>
    <i>ブラウザ等情報</i>
    <br/>
    <u data-id="user">['HTTP_USER_AGENT']</u>
    <span id="user" class="hide">
      <br/>
      <?php
      echo $_SERVER['HTTP_USER_AGENT'];
      ?>
    </span>
  </p>
  <hr/>
</section>

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
現在実行しているファイル名

</pre>
<hr/>
