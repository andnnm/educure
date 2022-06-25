<?php

require 'function.php';

$referer = $_SERVER['HTTP_REFERER'];
$url = parse_url($referer);
$url = basename($url['path']);

if( $url !== 'contact.php' ){
    header("Location:contact.php");
}

if( isset($_POST['send']) ){
    header("Location:complete.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Lesson Sample Site</title>
        <link rel ="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body class="comfirm">

    <?php
        include('../parts/header.php');
    ?>

    <section class="form">
        <div class="form_top">
            <h1 class="form_title title_font">
                お問い合せ
            </h1>
        </div>

        <div class="inner2 complete_form">
            <p class="complete_form_lower">
                お問い合せ頂きありがとうございます。
                <br>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。
                <br>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。
            </p>

            <div class="return_toppage">
            <a href="index.php">トップへ戻る</a>
            </div>
        </div>
    </section>

    </body>

    <?php
        include('../parts/footer.php');
    ?>

</html>
