<section class="readme">
  <h2>
    <?php
    $name = '?php';
    if ( (print "＜") && true ) {
      echo $name, " ?＞";
    }
    else {
      echo "?= ", "?＞";
    }
    ?>
  </h2>
  <p>
    PHP (PHP: Hypertext Preprocessor) は、動的にウェブページを生成することができるサーバーサイドのスクリプト言語です。<br/>
    <i>ラスマス・ラードフが個人的に開発していたCGIプログラムである Personal Home Page Tools（PHP Tools）を起源とします。</i>
  </p>
  <br/>
  <p>
    PHP は、開始タグ <font><</font><font>?php</font> から 終了タグ <font>?</font><font>></font> の間に記述します。<br/>
    また、PHP の命令コードの最後には セミコロン <font>;</font> をつける決まりになっています。
  </p>
  <p>
    PHP タグ を組み込んだ HTML ドキュメントの拡張子を「.php」にすると、サーバーは "PHPモード" で処理を実行し、その結果をクライアントへ返します。<br/>
    <u>ファイルの拡張子が「.html」 の場合は、PHPは認識されず、処理は実行されません。</u><br/>
    <i>PHP は、クライアント側が処理を実行する JavaScript などと違い、サーバーが処理を実行するため クライアント側はプログラムを見ることができません。</i>
  </p>
  <hr/>
  <details>
    <summary>
      <i>print '<';</i>
      <i>echo $name, "?>";</i>
    </summary>
    <p>
      PHP を使って 文字列を出力する場合は、echo または print を使用します。<br/>
      echo は 文 として コンマで区切られた 複数の 文字列を出力することができ、戻り値はありません。<br/>
      print は 式 として 単一の文字列のみを受け付け、常に 戻り値 1 を返します。
    </p>
    <br/>
    <pre>
if ( (print "<") && true ) {
  echo $name, " ?>";
}
else {
  echo "?= ", " ?>";
}

// 最初に (print "<") が評価され、
// "<" を出力した後、print が 1 を返します。
// 戻り値 1 && true は true なので、if ブロックの中身が実行されます。
    </pre>
  </details>
  <hr/>
  <details>
    <summary>
      <i>$name = '?php';</i>
    </summary>
    <p>
      $（ドル記号）の後に名前（変数名）が続く形式で 変数を定義して、変数名から値を代入することができます。<br/>
      <i>
        変数名には、文字・数字・アンダースコアを使用でき、大文字小文字を区別します。
        また、変数名は 文字 または アンダースコアから始めなければいけません。
      </i>
    </p>
    <p>
      PHP で $変数名 を使うと、代入した値を呼び出すことができます。<br/>
      <i>例) echo $name, " ?>"; は、文字列 ?php ?> を出力します。</i><br/>
    </p>
    <hr/>
    <h3><i>定義済みの変数</i></h3>
    <p>
      PHP には さまざまな情報を代入・呼び出すために使用できる 定義済みの定数が多く用意されています。<br/>
      <i>定義済みの定数 を使って、サーバー情報やフォームに入力された値などのあらゆる内容が取得できます。</i>
    </p>
  </details>
  <br/>
</section>
