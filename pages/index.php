<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Lesson Sample Site</title>
        <link rel ="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body class="toppage">

<header>
    <div class="top_attention_bar">
        <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
    </div>

    <section class="top_header_wp section">

        <div>
            <img class="top_img img" src="../img/eyecatch.jpg" alt="">
        </div>


    <?php
        include('../parts/header.php');
    ?>

    <h1 class="top_eyecatch top_cl">
        あなたの
        <br>好きな空間を作る。
    </h1>

    </section>
</header>

<!--------------------- サインインフォーム --------------------->
<div id="overlay"></div>


<div class="signinPop">

    <div class="signinTitle">
        <h2>ログイン</h2>
    </div>
    <form class="signinForm">
        <div class="mail">
            <input type="text" class="input" name="signinMail" id="signinMail" placeholder="メールアドレス">
        </div>
        <div class="pass">
            <input type="password" class="input" name="password" id="password" placeholder="パスワード">
        </div>

        <input type="button" class="input signinSubmit" type="submit" name="signinButton"  id="signinButton" value="送  信">
    </form>

    <div class="SNS">
        <a href="#">
            <div class="twitter snsLink">
                <img class="snsImg" src="../img/twitter.png" alt="Twitter">
            </div>
        </a>
        <a href="#">
            <div class="facebook snsLink">
                <img class="snsImg" src="../img/fb.png" alt="facebook">
            </div>
        </a>
        <a href="#">
            <div class="google snsLink">
                <img class="snsImg" src="../img/google.png" alt="google">
            </div>
        </a>
        <a href="#">
            <div class="apple snsLink">
                <img class="snsImg" src="../img/apple.png" alt="apple">
            </div>
        </a>
    </div>

</div>


<!--------------------- エリア --------------------->
<section class="choise_area inner section">
        <!--------------------- 東京 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe1.jpg" alt="Tokyo">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">東京
                    <br>車で15分
                </p>
            </div>
        </div>
        <!--------------------- 神奈川 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe2.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">神奈川
                    <br>車で30分
                </p>
            </div>
        </div>
        <!--------------------- 愛知 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe3.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">愛知
                    <br>車で１時間
                </p>
            </div>
        </div>
        <!--------------------- 京都 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe4.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">京都
                    <br>車で40分
                </p>
            </div>
        </div>
        <!--------------------- 岡山 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe5.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">岡山
                    <br>車で1.5時間
                </p>
            </div>
        </div>
        <!--------------------- 鹿児島 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe6.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">鹿児島
                    <br>車で50分
                </p>
            </div>
        </div>
        <!--------------------- 鹿児島 --------------------->
        <div class="choise_city">
            <div class="choise_city_img">
                <img class="city_img" src="../img/cafe7.jpg" alt="Kanagawa">
            </div>
            <div class="choise_city_sentence">
                <p class="title_font">沖縄
                    <br>車で２時間
                </p>
            </div>
        </div>
</section>

<!--------------------- ロケーション --------------------->
<section class="favorite_location inner section">
    <div>
        <h2 class="h2 title_font">
            好きなロケーションを選ぼう
        </h2>
    </div>

    <div class="atmosphere_wrapper">
        <!--------------------- クラシック --------------------->
        <div class="atmosphere">
            <div class="atmosphere_icon">
                <img class="atmosphere_img" src="../img/intro1.jpg" alt="classic img">
            </div>
            <div class="atmosphere_detail title_font">
                <p class="title_font">クラシック</p>
            </div>
        </div>
        <!--------------------- バー --------------------->
        <div class="atmosphere">
            <div class="atmosphere_icon">
                <img class="atmosphere_img" src="../img/intro2.jpg" alt="bar_img">
            </div>
            <div class="atmosphere_detail title_font">
                <p class="title_font">バー</p>
            </div>
        </div>
        <!--------------------- キャンプ --------------------->
        <div class="atmosphere">
            <div class="atmosphere_icon">
                <img class="atmosphere_img" src="../img/intro3.jpg" alt="camp_img">
            </div>
            <div class="atmosphere_detail title_font">
                <p class="title_font">キャンプ</p>
            </div>
        </div>
        <!--------------------- リゾート --------------------->
        <div class="atmosphere">
            <div class="atmosphere_icon">
                <img class="atmosphere_img" src="../img/intro4.jpg" alt="camp_img">
            </div>
            <div class="atmosphere_detail title_font">
                <p class="title_font">リゾート</p>
            </div>
        </div>
    </div>
</section>

<!--------------------- Go To Eats --------------------->
<section class="GoToEats inner section">
    <div class="GoToEats_wrapper">
        <div class="GoTo_backimg">
            <img class="GoTo_img" src="../img/goto.jpg" alt="">
        </div>
        <div class="GoTo_explain">
            <p class="title_font GoTo_explain_upper">Go To Eats</p>
            <p class="GoTo_explain_bottom">キャンペーンを利用して、全国で食事しよう。
                <br>いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
            </p>
        </div>
    </div>
</section>

<!--------------------- カフェ作り体験 --------------------->
<section class="experience section">
    <div class="experience_title">
        <h2 class="h2 title_font inner">カフェ作りを体験しよう</h2>
        <p class="title_font inner">お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
    </div>

    <div class="experience_job inner">
        <!--------------------- ジョブ体験 --------------------->
        <div class="job_box">
            <img class="job_img" src="../img/exp1.jpg" alt="">
            <div class="job_exp">
                <p class="job_title title_font">
                    ジョブ体験
                </p>
                <p class="job_sentence">
                    カフェカウンターを体験しよう。
                </p>
            </div>
        </div>
        <!--------------------- レシピ体験 --------------------->
        <div class="job_box">
            <img class="job_img" src="../img/exp2.jpg" alt="">
            <div class="job_exp">
                <p class="job_title title_font">
                    レシピ体験
                </p>
                <p class="job_sentence">
                    美味しいレシピを考えてみよう。
                </p>
            </div>
        </div>
        <!--------------------- プロモーション体験 --------------------->
        <div class="job_box">
            <img class="job_img" src="../img/exp3.jpg" alt="">
            <div class="job_exp">
                <p class="job_title title_font">
                    プロモーション体験
                </p>
                <p class="job_sentence">
                    お店の宣伝を手伝ってみよう。
                </p>
            </div>
        </div>

    </div>
</section>

<!--------------------- 全国のホストに仲間入り --------------------->
<section class="join_host inner section">
    <h2 class="title_font h2">
        全国のホストに仲間入りしよう
    </h2>

    <div class="host_group">
        <!--------------------- ビジネス --------------------->
        <div class="host_group_list">
            <img class="host_img" src="../img/host1.jpg" alt="">
            <p class="title_font hostName">ビジネス</p>
        </div>
        <!--------------------- コミュニティ --------------------->
        <div class="host_group_list">
            <img class="host_img" src="../img/host2.jpg" alt="">
            <p class="title_font hostName">コミュニティ</p>
        </div>
        <!--------------------- 食べ歩き --------------------->
        <div class="host_group_list">
            <img class="host_img" src="../img/host3.jpg" alt="">
            <p class="title_font hostName">食べ歩き</p>
        </div>
    </div>
</section>



<!--------------------- フッター --------------------->
<?php
    include('../parts/footer.php');
?>


<!--------------------- トップへ戻る --------------------->
    <div id="page_top">
        <a href="#">Jump To Top</a>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "../js/main.js"></script>

</body>
</html>


