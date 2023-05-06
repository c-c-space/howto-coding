<section class="readme">
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
  <p>$_SERVER から取得できる 通信に必要な情報（IP アドレス・ポート番号など）は、インターネットに接続してウェブサイトにアクセスする際に 必ずサーバー に送信されます。</p>
  <p>
    <i>これらの情報は、個人情報を直接含むような情報ではなく、安心・安全にインターネットを利用するための仕組みとして必ず発信しなければいけない情報です。</i>
  </p>
  <hr/>
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
  <pre>
    <font>$_SERVER['REMOTE_ADDR']</font>;
    現在ページをみているユーザーの IP アドレス

    <font>gethostbyaddr($_SERVER['REMOTE_ADDR']</font>;
    現在ページをみているユーザーの IP アドレスに対応するインターネットホスト名

    <font>$_SERVER['REMOTE_PORT']</font>;
    ユーザーのマシンから Web サーバーへの通信に使用されているポート番号
  </pre>
  <hr/>
  <p>
    <font>$_SERVER['HTTP_USER_AGENT']</font> は、
    ユーザーが使用しているブラウザの種類が保存される変数です。<br/>
    ブラウザ等情報は、ウェブサイトの表示を最適化するためにサーバーへ必ず発信しなければいけない情報です。
  </p>
  <p>
    <i>
      この情報は、レジストリの変更やブラウザの設定により加工(偽装)することができるため、100%の精度ではありません。
    </i>
  </p>
  <hr/>
  <p id="lastModified"></p>
  <script>
    let lastModified = document.querySelector('#lastModified');

    lastModified.innerHTML =
    'Last Modified: <time datetime="' + document.lastModified + '">' + document.lastModified + '</time>';
  </script>
</section>
