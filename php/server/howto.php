<section class="readme">
  <p>通信に必要な情報</p>
  <p>
    <u>IP</u>
    <font>
      <?php
      echo $_SERVER['REMOTE_ADDR'];
      ?>
    </font>
    <br/>
    <u>HOST</u>
    <font>
      <?php
      $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
      echo $host
      ?>
    </font>
    <br/>
    <u>PORT</u>
    <font>
      <?php
      echo $_SERVER['REMOTE_PORT'];
      ?>
    </font>
  </p>
  <p>$_SERVER から取得できる 通信に必要な情報（IP アドレス・ポート番号など）は、インターネットに接続してウェブサイトにアクセスする際に 必ずサーバー に送信されます。</p>
  <pre>
<code>$_SERVER['REMOTE_ADDR']</code>;
現在ページをみているユーザーの IP アドレス

<code>gethostbyaddr($_SERVER['REMOTE_ADDR']</code>;
現在ページをみているユーザーの IP アドレスに対応するインターネットホスト名

<code>$_SERVER['REMOTE_PORT']</code>;
ユーザーのマシンから Web サーバーへの通信に使用されているポート番号
  </pre>
  <p>
    <i>これらの情報は、個人情報を直接含むような情報ではなく、安心・安全にインターネットを利用するための仕組みとして必ず発信しなければいけない情報です。</i>
  </p>
  <br/>
  <hr/>
  <p>ブラウザ等情報</p>
  <h3>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
  </h3>
  <p>
    <code>$_SERVER['HTTP_USER_AGENT']</code> は、
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
