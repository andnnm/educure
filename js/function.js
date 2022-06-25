// --------------- jsバリデーション --------------- //
    $("form").submit(function validation (){

        var array = [];

        var mailPattern = /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;
        var fullName_result = $('#fullName').val();
        var fullName_kana_result = $('#fullName_kana').val();
    

            if( fullName_result.length == 0 ){
                array.push('氏名は必須入力です。10文字以内でご入力ください。');
            }else if( fullName_result.length > 10){
                array.push('氏名は10文字以内でご入力ください。');
            }

            if( fullName_kana_result.length == 0 ){
                array.push('フリガナは必須入力です。10文字以内でご入力ください。');
            }else if( fullName_kana_result.length > 10){
                array.push('フリガナは10文字以内でご入力ください。');
            }

            if($('#phoneNumber').val().match('/^[0-9]+$/')){
                array.push('電話番号は正しくご入力ください。');
            }

            if( $('#mailAdress').val().length == 0 ){
                array.push('メールアドレスは必須入力です。');
            }else if( !$('#mailAdress').val().match(mailPattern) ){
                array.push('メールアドレスは正しい形式でご入力ください。');
            }
            
            if( $('#free_form').val().length == 0 ){
                array.push('お問合せ内容は必須入力です。');
            }

            if (array.length > 0 ){
                alert(array.join('\n'));
                location.href = "contact.php";
            }
        

        });



