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
  <hr/>
  <p>
    <i>print 'Hello ';</i>
    <i>echo "World", "!"</i>
  </p>
  <p>
    指定した文字列を出力する場合は、echo または print を使用します。<br/>
    echo は 文 として コンマで区切られた 複数の 文字列を出力することができ、戻り値はありません。<br/>
    print は 式 として 単一の文字列のみを受け付け、常に 戻り値 1 を返します。
  </p>
  <br/>
  <pre>
    // 例) print を使った式
    if ( (print "Hello") && false ) {
      echo " World", "!";
    } else {
      echo " - ?";
    }
  </pre>
  <?php
  if ( (print "hello") && false ) {
    print " - inside if";
  }
  else {
    print " - inside else";
  }
  // "hello - inside else" を出力します。
  // 直前の例と異なり、(print "hello") が最初に評価され、
  // "hello" を出力した後、print が1を返します。
  // 1 && false は false なので、else ブロックの中身が実行されます。

  print "hello " && print "world";
  // "world1"; を出力します。print "world" が先に評価され、
  // "hello " && 1 が次に評価され、左辺の print に渡されます。

  (print "hello ") && (print "world");
  // "hello world" を出力します; 括弧が print を && より前に評価させているからです。
  ?>
</section>
