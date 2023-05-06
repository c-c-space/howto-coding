<section class="readme">
  <h2 class="php">?php </h2>
  <p>
    PHP (PHP: Hypertext Preprocessor) は、動的にウェブページを生成することができるサーバーサイドのスクリプト言語です。<br/>
    <i>ラスマス・ラードフが個人的に開発していたCGIプログラムである Personal Home Page Tools（PHP Tools）を起源とします。</i>
  </p>
  <p>
    <i>PHP は、クライアント側が処理を実行する JavaScript などと違い、サーバーが処理を実行するため クライアント側はプログラムを見ることができません。</i><br/>
    PHP タグ を組み込んだ HTML ドキュメントの拡張子を「.php」にすると、サーバーは "PHPモード" で処理を実行し、その結果をクライアントへ返します。<br/>
    ファイルの拡張子が「.html」 の場合は、PHPは認識されず、処理は実行されません。
  </p>
  <br/>
  <pre>
print 'Hello ';

if ( print 'Hello ' ) {
  echo "World", "!";
}
  </pre>
  <p>
    指定した文字列を出力する場合は、echo または print を使用します。<br/>
    echo は コンマで区切られた 複数の 文字列を出力することができ、
    print は 単一の文字列のみを受け付け、常に 戻り値 1 を返します。
    <i>他の言語構造と異なり echo には戻り値がありません。</i>
  </p>
  <?php
  if ( print 'Hello ' ) {
    echo "World", "!";
  }

  ( 1 === 1 ) ? print 'World' : print "World!";
  ?>
</section>
