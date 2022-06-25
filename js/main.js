// ヘッダーナビ
$(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 61) {
            $('.toppage .top_header').addClass('fixed','fadeIn');
        } else {
            $('.toppage .top_header').removeClass('fixed','fadeIn');
        }
    });
});

//トップへ戻る
$(function(){
    var pagetop = $('#page_top');
    //ボタン非表示
    pagetop.hide();
    //ボタン表示
    $(window).scroll(function(){
        if($(this).scrollTop() > 800){
            pagetop.fadeIn();
        }else{
            pagetop.fadeOut();
        }
    });
    pagetop.click(function(){
        $('body,html').animate({
            screenTop:0
        },500);
        // jsやjqueryには、要素で発火した処理はその全ての親要素に伝搬するため、
        // return false で親要素に何も返さない
        return false;
    });
});


// サインイン画面表示
$(function(){
    $('.signin').click(function(){
        $('#overlay, .signinPop').fadeIn();
    });
    $('#overlay').click(function(){
        $('#overlay, .signinPop').fadeOut();
    })
});

