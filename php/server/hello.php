<section id="hello" class="data_show">
  <p>
    <i>サーバー情報</i>
    <br/>
    <u data-id="php">PHP_SELF</u>
    <span id="php" class="hide">
      <br/>
      <?php
      echo $_SERVER['PHP_SELF'];
      ?>
    </span>
    <br/>
    <u data-id="cgi">CGI</u>
    <span id="cgi" class="hide">
      <?php
      echo $_SERVER['GATEWAY_INTERFACE'];
      ?>
    </span>
    <u data-id="http">PROTOCOL</u>
    <span id="http" class="hide">
      <?php
      echo $_SERVER['SERVER_PROTOCOL'];
      ?>
    </span>
    <br/>
    <u data-id="software">SOFTWARE</u>
    <span id="software" class="hide">
      <?php
      echo $_SERVER['SERVER_SOFTWARE'];
      ?>
      <br/>
    </span>
    <u data-id="time">REQUEST TIME</u>
    <span id="time" class="hide">
      <?php
      echo $_SERVER['REQUEST_TIME'];
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
    <u data-id="user">USER_AGENT</u>
    <span id="user" class="hide">
      <br/>
      <?php
      echo $_SERVER['HTTP_USER_AGENT'];
      ?>
    </span>
  </p>
  <hr/>
  <p>
    インターネットに接続してウェブサイトにアクセスすると、ウェブサイトの管理人やウェブサイトを公開(管理)しているサーバーに、さまざまな情報が発信(送信)されます。<br/>
    <i>
      これらの情報は、個人情報を直接含むような情報ではなく、安心・安全にインターネットを利用するための仕組みとして必ず発信しなければいけない情報です。
    </i>
  </p>
</section>
<br/>
<pre>
  <font>$_SERVER['REMOTE_ADDR']</font>;
  現在ページをみているユーザーの IP アドレス

  <font>gethostbyaddr($_SERVER['REMOTE_ADDR']</font>;
  現在ページをみているユーザーの IP アドレスに対応するインターネットホスト名

  <font>$_SERVER['REMOTE_PORT']</font>;
  ユーザーのマシンから Web サーバーへの通信に使用されているポート番号

  <font>$_SERVER['HTTP_USER_AGENT']</font>;
  ページを見ているユーザーが使用しているブラウザの種類

</pre>
