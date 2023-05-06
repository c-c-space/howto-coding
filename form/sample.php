<?php
$name = htmlspecialchars($_POST['name']);
$email  = htmlspecialchars($_POST['email']);
$website  = htmlspecialchars($_POST['website']);
$phone  = htmlspecialchars($_POST['phone']);
$message  = htmlspecialchars($_POST['message']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
  @font-face {
    font-family: "ipag";
    src: url("https://creative-community.space/ver/font/ipag.ttf");
  }

  main {
    font-family: 'Arial Narrow', 'Arial', sans-serif;
    font-size: 1rem;
    margin: 2.5rem auto 5rem;
    max-width: 500px;
    width: 75%;
  }

  a,
  u {
    color: #000;
    word-break: break-all;
  }

  h1 {
    padding: 0;
    margin: 0.5rem 0 1rem;
  }

  h2,
  h3 {
    padding: 0.25rem;
    margin: 0;
  }

  h2 {
    font-size: 200%;
    font-weight: 200;
  }

  h3,
  a,
  u {
    font-size: 125%;
    font-weight: 500;
  }

  strong,
  code {
    font-size: 150%;
    font-weight: 500;
  }

  pre,
  code {
    font-family: "ipag", monospace;
  }

  pre {
    width: 100%;
    overflow: auto;
  }

  details {
    margin: auto;
    max-width: 750px;
  }

  summary {
    display: block;
    position: relative;
    width: 100%;
  }

  summary::marker,
  summary::-webkit-details-marker {
    display: none;
  }

  summary::before {
    content: "→";
    display: inline-block;
    background-color: #000;
    border-radius: 0.5rem;
    color: #fff;
    font-size: 125%;
    padding: 0.25rem 0.5rem;
    margin: 0.25rem 0.5rem 0.25rem 0;
    transition: 0.5s;
  }

  /* オープン時 */
  details[open] summary::before {
    transform: rotate(90deg); /* 90度回転 */
  }
  </style>
</head>
<body>
  <h1>Web Form | Retrieving the data by PHP</h1>
  <main>
    <h2>I am <strong><?php echo $name ?></strong></h2>
    <h3>Email: <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></h3>
    <h3>Website: <a href="<?php echo $website ?>" target="_blank" rel="noreferrer"><?php echo $website ?></a></h3>
    <br/>
    <h3>Phone: <u><?php echo $phone ?></u></h3>
    <hr/>
    <p><?php echo $message ?></p>
  </main>
  <details open>
    <summary>フォームのデータを取得する</summary>
    <p>
      <i>$変数名</i> <small>値 を 代入する 変数名 を設定</small><br/>
      <i>htmlspecialchars</i>( ) <small>特殊文字を HTML エンティティに変換する</small><br/>
      <i>$_POST</i>['コントロール名'] <small>フォームコントロールの name 属性に設定した値を記述する</small>
    </p>
    <pre>
<<code>?php</code>

$name = <code>htmlspecialchars</code>(<code>$_POST['name']</code>);
$email  = <code>$_POST['email']</code>;
$website  = <code>$_POST['website']</code>;
$phone  = <code>$_POST['phone']</code>;
$message  = <code>htmlspecialchars</code>(<code>$_POST['message']</code>);

<code>?</code>>
    </pre>
    <p>
      PHP の グローバル変数 $_POST は、POST メソッドで送信されたデータへ名前でアクセスします。<br/>
      <small>GET メソッドで送信されたデータにアクセスするには、$_GET を使用します。</small>
    </p>
    <br/>
  </details>
</body>
</html>
