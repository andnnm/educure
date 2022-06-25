<?php
require 'function.php';

//入力不備チェック→不備がない場合はDB送信し、confirm.phpへ遷移

if( !empty($_POST) ){
    $name = $_POST['fullName'];
    $kana = $_POST['fullName_kana'];
    $tel = $_POST['phoneNumber'];
    $mail = $_POST['mailAdress'];
    $free = $_POST['free_form'];

    valiEmpty($name,'fullName');
    valiEmpty($kana,'fullName_kana');
    valiEmpty($mail,'mailAdress');
    valiEmpty($free,'free_form');

    if( empty($errMsg)){

        valiMaxlen($name,'fullName');
        valiMaxlen($kana,'fullName_kana');

        valiNumber($tel,'phonenumber');

        valiMail($mail,'mailAdress');

            if( empty($errMsg) ){

                $_SESSION['fullName'] = sanitize($name);
                $_SESSION['fullName_kana'] = sanitize($kana);
                $_SESSION['phoneNumber'] = sanitize($tel);
                $_SESSION['mailAdress'] = sanitize($mail);
                $_SESSION['free_form'] = sanitize($free);

                header('Location:confirm.php');
            }
    }
    
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

    <?php
        include('../parts/header.php');
    ?>


    <body class="contact">
    <section class="form">

        <div class="form_top">
            <h1 class="form_title title_font">
                お問い合せ
            </h1>
        </div>


        <div class="inner2">
                <div class="guide">
                    <p class="contact_2_sentence">
                        下記の項目をご記入の上送信ボタンを押してください
                    </p>
                </div>
                <div>
                    <p class="contact_2_sentence_lower">
                        送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。
                        <br>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。
                        <br> <span class="must"> * </span> は必須項目となります。
                    </p>
                </div>

                <div class="contact_form_input">
                    <form class="personal" method="post" action="">
                        <!-------------------- 氏名 -------------------->
                        <label class="form_item">氏名<span class="must"> * </span></label>
                        
                        <span class="err_msg">
                            <br><?php getErrMsg('fullName'); ?>
                        </span>

                        <input class="input_form" type="text" name="fullName" id="fullName" placeholder="山田太郎" 
                        value="<?php validateOk('fullName') ?>">

                        <!-------------------- フリガナ -------------------->
                        <label class="form_item">フリガナ<span class="must"> * </span></label>
                        
                        <span class="err_msg">
                            <br><?php getErrMsg('fullName_kana'); ?>
                        </span>

                        <input class="input_form" type="text" name="fullName_kana" id="fullName_kana" placeholder="ヤマダタロウ"
                        value="<?php validateOk('fullName_kana') ?>">

                        <!-------------------- 電話番号 -------------------->
                        <label class="form_item">電話番号</label>
                        
                        <span class="err_msg">
                            <br><?php getErrMsg('phoneNumber'); ?>
                        </span>
                        
                        <input class="input_form" type="number" name="phoneNumber" id="phoneNumber" placeholder="09012345678"
                        value="<?php validateOk('phoneNumber') ?>" >

                        <!-------------------- メールアドレス -------------------->
                        <label class="form_item">メールアドレス<span class="must"> * </span></label>
                        
                        <span class="err_msg">
                            <br><?php getErrMsg('mailAdress'); ?>
                        </span>

                        <input class="input_form" type="text" name="mailAdress" id="mailAdress" placeholder="test@test.co.jp" 
                        value="<?php validateOk('mailAdress') ?>">

                        <!-------------------- お問合せ内容 -------------------->
                        <div class="guide">
                            <label>お問い合わせ内容をご記入ください<span class="must"> * </span></label>
                        </div>
                        
                        <span class="err_msg"><?php getErrMsg('free_form'); ?></span>

                        <textarea name="free_form" id="free_form" cols="30" rows="10" maxlength="1000"><?php validateOk('free_form') ?></textarea>

                        <!-------------------- 送信ボタン -------------------->
                        <input class="button" type="submit" name="btn_confirm" id="btn_confirm" value="送  信">
                    </form>

                </div>
        </div>

    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/function.js"></script>

    </body>

    <?php
        include('../parts/footer.php');
    ?>


</html>


