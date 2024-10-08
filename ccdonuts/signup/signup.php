<!DOCTYPE html>  <!-- 共有部分 -->
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./common/reset.css"> <!-- 先に読み込む -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./styles/style.css">
        <title>C.C.Donuts</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="menuicon">
                        <div class="icon"><a href="../index.php"><img src="../menu/images/ccddonatslogo.png"></a></div>
                        <div class="rogin"><a href="../login/login.php"><img src="../menu/images/roginrogo.png"></a></div>  <!--ログインサイトへ-->
                        <div class="cart"><a href="../cart/cart.php"><img src="../menu/images/cart.png"></a></div>  <!-- カートサイトへ -->
                        <form class="form-box">  <!-- 検索ボックス -->
                            <input class="form-input" type="search">
                            <button class="form-button"><img src="../menu/images/pcsrclogo.png" width="20px" height="20px"></button>
                        </form>
                </div>
            </nav>
        </header>  

        <main>
            <div class="section1">
                <nav class="pan"><!-- ぱんくずメニュー一部変更する -->
                    <ol>
                        <li><a href="../index.php">Top</a></li>
                        <li><a href="../login/login.php">&gt;ログイン</a></li>
                        <li><a href="../signup/signup.php">&gt;ログイン完了</a></li>
                    </ol>
                </nav>
                <p class="text2">ドーナツ太郎　様</p>
            </div> <!-- 共有終了 -->

            <h1>ログイン完了</h1>
            <div class="section2">
                <ul>
                    <p class="rogintext1">ログインが完了しました。</p>
                    
                    <p class="rogintext2">引き続きお楽しみください。</p>
                    
                </ul>
            </div>
                <a href="#"><p class="rogintext3">購入確認ページへすすむ</a></p>
                <a href="../index.php"><p class="rogintext4">TOPページへもどる</a></p>


                <div class="section4">  <!-- 共有部分 -->
                    <div class="gaid"></div>
                    <p class="gaidtext1">よくある質問</p>
                    <p class="gaidtext2">お問い合わせ</p>
                    <p class="gaidtext3">当サイトのポリシー</p>
                    <div class="snsicon">
                        <ul>
                            <div class="facebook"><li><a href="https://www.facebook.com/" target="_blank"><img src="./images/facebook.png"></a></li></div>  <!--フェイスブックへ-->
                            <div class="inst"><li><a href="https://www.instagram.com" target="_blank"><img src="./images/inst.png"></a></li></div>  <!--インスタグラムへ-->
                            <div class="twittr"><li><a href="https://twitter.com" target="_blank"><img src="./images/twittr.png"></a></li></div>  <!--ツイッターへ-->
                        </ul>
                    <div class="footericon"><a href="../index.php"><img src="../menu/images/footerccdonats.png"></a></div>
                </div>
        </main>

        <footer>
            <p class="footertext">Copyright (C) 2023 c.c.donuts</p>
        </footer>
    </body>
    
</html> <!-- 共有終了 -->
