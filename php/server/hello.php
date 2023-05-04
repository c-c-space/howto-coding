<section id="hello" class="data_show readme">
  <p>
    <i>サーバー情報</i>
    <br/>
    <u data-id="http">PROTOCOL</u>
    <span id="http" class="hide">
      <?php
      echo $_SERVER['SERVER_PROTOCOL'];
      ?>
    </span>
    <br/>
    <u data-id="addr">ADDR</u>
    <span id="addr" class="hide">
      <br/>
      <?php
      echo $_SERVER['SERVER_ADDR'];
      ?>
      <br/>
    </span>
    <u data-id="name">NAME</u>
    <span id="name" class="hide">
      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
      <br/>
    </span>
    <u data-id="cgi">PORT</u>
    <span id="cgi" class="hide">
      <?php
      echo $_SERVER['SERVER_PORT'];
      ?>
      <br/>
    </span>
    <br/>
    <u data-id="software">SOFTWARE</u>
    <span id="software" class="hide">
      <?php
      echo $_SERVER['SERVER_SOFTWARE'];
      ?>
      <br/>
    </span>
    <u data-id="php">PHP_SELF</u>
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
    <u data-id="user">USER_AGENT</u>
    <span id="user" class="hide">
      <br/>
      <?php
      echo $_SERVER['HTTP_USER_AGENT'];
      ?>
    </span>
  </p>
  <hr/>
</section>
