<?php

require 'function.php';

// リファラ＝ユーザーがサイトに流入する時に利用したリンク元の情報。
$referer = $_SERVER['HTTP_REFERER'];  // $_SERVER['HTTP_REFERER']で直前にアクセスしてきたURLを取得する。
$url = parse_url($referer);  // 遷移させたいURL
$url = basename($url['path']);

if( $url !== 'contact.php' ){
    header("Location:contact.php");
}

if( isset($_POST['send']) ){

    // 通常動作
    try{
        // DB接続準備
        $dsn = 'mysql:dbname=cafe;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
        );

        $dbh = new PDO($dsn,$user,$password,$options);

        // SQL文（クエリー）作成
        $sql = 'INSERT INTO contacts (`fullname`,`kana`,`tel`,`email`,`body`) VALUES (:fullname,:kana,:tel,:email,:body)';
        $stmt = $dbh->prepare($sql);

        // プレースホルダに値をセットし、SQL文を実行
        $stmt->execute(array(
            ':fullname' => $_POST['fullName'],
            ':kana' => $_POST['fullName_kana'],
            ':tel' => $_POST['phoneNumber'],
            ':email' => $_POST['mailAdress'],
            ':body' => $_POST['free_form'],
        ));

        // 接続終了
        $dbh = null;

        header("Location:complete.php");

    
    }catch (Exception $e){
        //例外処理
        echo "エラー発生:" . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
        die();
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

    <body class="comfirm">
    <section class="form">
        <div class="form_top">
            <h1 class="form_title title_font">
                お問い合せ
            </h1>
        </div>

        <div class="inner2">
            <div class="form_lower">
                <p class="form_contents">
                    下記の内容をご確認の上送信ボタンを押してください。
                    <br>内容を訂正する場合は戻るを押してください。
                </p>
            </div>

            <form class="confirm_check" action="complete.php" method="post">
                <p class="check_item">氏名</p>
                <div class="check_contents">
                    <?php echo $_SESSION['fullName'] ?>
                </div>

                <p class="check_item">フリガナ</p>
                <div class="check_contents">
                    <?php echo $_SESSION['fullName_kana'];?>
                </div>

                <p class="check_item">電話番号</p>
                <div class="check_contents">
                    <?php echo $_SESSION['phoneNumber'];?>
                </div>

                <p class="check_item">メールアドレス</p>
                <div class="check_contents">
                    <?php echo $_SESSION['mailAdress'];?>
                </div>

                <p class="check_item">お問い合わせ内容</p>
                <div class="check_contents">
                    <?php echo $_SESSION['free_form'];?>
                </div>

                <div class="confirm_button">
                    <input class="submit_button" type="submit" name="send" value="送  信">
                    <input class="return_button" type="button" onclick="history.back()" value="戻  る">
                </div>

            </form>
        </div>
    </section>

    </body>

    <?php
        include('../parts/footer.php');
    ?>
</html>
