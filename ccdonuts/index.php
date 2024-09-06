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
                        <div class="icon"><a href="./index.php"><img src="./images/pc/ccddonatslogo.png"></a></div>
                        <div class="rogin"><a href="./login/login.php"><img src="./images/pc/roginrogo.png"></a></div>  <!--ログインサイトへ-->
                        <div class="cart"><a href="./cart/cart.php"><img src="./images/pc/cart.png"></a></div>  <!-- カートサイトへ -->
                        <form class="form-box">  <!-- 検索ボックス -->
                            <input class="form-input" type="search">
                            <button class="form-button"><img src="./images/pc/pcsrclogo.png" width="20px" height="20px"></button>
                        </form>
                </div>
            </nav>
        </header>  <!-- 共有終了 -->
        <main>
            <div class="section1">
                <div class="text1"><p>ようこそ　ゲスト様</p></div>
                <div class="hero"><img src="./images/pc/pcheroimage.png"></div>
                <div class="column">
                    <div class="section1img">
                        <p class="text2">新商品</p>
                        <p class="text3">サマーシトラス</p>
                        <img src="./images/pc/newdonats.png">
                        
                    </div>
                    <div class="section1img">
                        <p class="text4">ドーナツのある生活</p>
                        <img src="./images/pc/newdonats2.png">
                        
                    </div>
                </div>
                <div class="menu">
                    <a href="./menu/index.php"><p>商品一覧</p></a> <!-- 商品一覧リンク先 -->
                </div>
            </div>

            <div class="section2">
                <div class="section2text1">Philosophy</div>
                <h4>私たちの信念</h4>
                <h3>"Creating Connections"</h3>
                <p>「ドーナツでつながる」</p>
            </div>

            <div class="section3">
                <h2>人気ランキング</h2>
                <div class="column1">
                    <ul class="Donuts1">  <!-- 共有部分　一部変更する -->
                        <li><p class="rank1">1</p></li>
                        <li><a href="./menu2/index.php"><img src="./images/pc/donats1.png"></a></li>
                        <li><p class="menu1">CCドーナツ 当店オリジナル（5個入り）</p></li>
                        <li><p class="prise1">税込  ￥1,500</p></li>
                        <li><a href="./cart/cart.php"><p class="cart1">カートに入れる</p></a></li>
                    </ul>

                    <ul class="Donuts2">
                        <li><p class="rank2">2</p></li>
                        <li><a href="./menu3/index.php"><img src="./images/pc/donats2.png"></li></a>
                        <li><p class="menu2">フルーツドーナツセット（12個入り）</p></li>
                        <li><p class="prise2">税込  ￥3,500</p></li>
                        <li><a href="./cart/cart.php"><p class="cart2">カートに入れる</p></a></li>
                    </ul>
                </div>

                <div class="column2">
                    <ul class="Donuts3">  <!-- 共有部分　一部変更する -->
                        <li><p class="rank3">3</p></li>
                        <li><img src="./images/pc/donats3.png"></a></li>
                        <li><p class="menu3">フルーツドーナツセット（14個入り）</p></li>
                        <li><p class="prise3">税込  ￥4,000</p></li>
                        <li><a href="./cart/cart.php"><p class="cart3">カートに入れる</p></a></li>
                    </ul>

                    <ul class="Donuts4">
                        <li><p class="rank4">4</p></li>
                        <li><img src="./images/pc/donats4.png"></li>
                        <li><p class="menu4">チョコレートデライト（5個入り）</p></li>
                        <li><p class="prise4">税込  ￥1,600</p></li>
                        <li><a href="./cart/cart.php"><p class="cart4">カートに入れる</p></a></li>
                    </ul>
                </div>


                <div class="column3">
                    <ul class="Donuts5">  <!-- 共有部分　一部変更する -->
                        <li><p class="rank5">5</p></li>
                        <li><img src="./images/pc/donats5.png"></a></li>
                        <li><p class="menu5">ベストセレクションボックス（4個入り）</p></li>
                        <li><p class="prise5">税込  ￥1,200</p></li>
                        <li><a href="./cart/cart.php"><p class="cart5">カートに入れる</p></a></li>
                    </ul>

                    <ul class="Donuts6">
                        <li><p class="rank6">6</p></li>
                        <li><img src="./images/pc/donats6.png"></li>
                        <li><p class="menu6">ストロベリークラッシュ（5個入り）</p></li>
                        <li><p class="prise6">税込  ￥1,800</p></li>
                        <li><a href="./cart/cart.php"><p class="cart6">カートに入れる</p></a></li>
                    </ul>
                </div>

            <div class="section4">  <!-- 共有部分 -->
                <div class="gaid"></div>
                <p class="gaidtext1">よくある質問</p>
                <p class="gaidtext2">お問い合わせ</p>
                <p class="gaidtext3">当サイトのポリシー</p>
            <div class="snsicon">
                <ul>
                    <div class="facebook"><li><a href="https://www.facebook.com/" target="_blank"><img src="./images/pc/facebook.png"></a></li></div>  <!--フェイスブックへ-->
                    <div class="inst"><li><a href="https://www.instagram.com" target="_blank"><img src="./images/pc/inst.png"></a></li></div>  <!--インスタグラムへ-->
                    <div class="twittr"><li><a href="https://twitter.com" target="_blank"><img src="./images/pc/twittr.png"></a></li></div>  <!--ツイッターへ-->
                </ul>
                <div class="footericon"><a href="./index.php"><img src="./images/pc/footerccdonats.png"></a></div>
            </div>
        </main>
        <footer>
            <p class="footertext">Copyright (C) 2023 c.c.donuts</p>
        </footer>
    </body>

</html>
<!--
共通基本ルール
余白：4倍数
PCコンテンツ幅：1200px
font: Noto Sans JP
font-size: ベース16px 4の倍数
見出しfont-size: SP→20px,PC→32px
ＳＰ幅:375px 
PC幅:1366px
-->