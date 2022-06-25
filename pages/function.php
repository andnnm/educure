<?php
date_default_timezone_set('Asia/Tokyo');
session_start();

function getErrMsg($key) {
    global $errMsg;
    if( !empty($errMsg[$key]) ){
        echo $errMsg[$key];
    }
}

function validateOk($key){
    if( !empty($_POST[$key]) ){
        echo $_POST[$key];
    }
}

$errMsg = [];

// --------------- バリデーション --------------- //

//未入力チェック
function valiEmpty($str,$key){
    if( empty($str) ){
        global $errMsg;
        $errMsg[$key] = '入力必須です。';
    }
}

//文字数チェック
function valiMaxlen($str,$key){
    if(mb_strlen($str) > 10 ){
        global $errMsg;
        $errMsg[$key] = '10文字以内で入力してください。';
    }
}

//電話番号チェック
function valiNumber($str,$key){
    if( !empty($str) ){
        if( !preg_match('/^[0-9]+$/', $str) ){
            global $errMsg;
            $errMsg[$key] = '電話番号は0-9の数字で入力してください。';
        }
    }
}

//メールアドレスチェック
function valiMail($str,$key){
    if( !preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/' , $str) ){
        global $errMsg;
        $errMsg[$key] = 'メールアドレスは正しく入力してください。';
    }
}

// --------------- バリデーション --------------- //
function sanitize($str){
    return htmlspecialchars($str,ENT_QUOTES);
}


?>