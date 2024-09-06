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
                        <li><a href="../credit/credit.php">&gt;会員登録</a></li>
                    </ol>
                </nav>
                <p class="text2">ようこそ　ゲスト様</p>
            </div> <!-- 共有終了 -->

            <h1>会員登録</h1>
            <div class="section2">
                <div class="hisssu">
                    <p class="nametext1">お名前</p>
                    <p class="hissutext1">（必須）</p>
                </div>
                <form class="name-box">
                    <input type="text" placeholder="ドーナツ太郎">
                </form>

                <div class="hisssu">
                    <p class="furigana">お名前（フリガナ）</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <form class="furigana-box">
                    <input type="text" placeholder="ドーナツタロウ">
                </form>

                <div class="hisssu">
                    <p class="yuubinntext">郵便番号</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <div class="yuubinn-box">
                        <div class="yuubinn-box1"><input type="text" maxlength="3" placeholder="123"></div>                   
                        <div class="yuubinn-box2"><input type="text" maxlength="" placeholder="4567"></div>    
                </div>

                <div class="hisssu">
                    <p class="addresstext">住所</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <form class="address-box">
                    <input type="text" placeholder="千葉県〇〇市中央1-1-1">
                </form>

                <div class="hisssu">
                    <p class="mailtext1">メールアドレス</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <form class="mail-box">
                    <input type="email" placeholder="123@gmail.com">
                </form>

                <div class="hisssu">
                    <p class="mailtext2">メールアドレス確認用</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <form class="mail-box2">
                    <input type="email" placeholder="123@gmail.com">
                </form>                    
                  
                <div class="hisssu">
                    <p class="passwordtext1">パスワード</p>
                    <p class="hissutext2">（必須）</p>
                </div>
                <p class="passwordtext2">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</p>
                    <form class="password-box">
                        <input type="password" placeholder="123456abcd">
                    </form>  

                <div class="hisssu">
                    <p class="passwordtext3">パスワード確認用</p>
                    <p class="hissutext3">（必須）</p>
                </div>
                    <form class="password-box2">
                        <input type="password" placeholder="123456abcd">
                    </form>  
            </div>

                <a href="../creditcheck/creditcheck.php"><p class="kakuninn">入力確認する</a></p>


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
