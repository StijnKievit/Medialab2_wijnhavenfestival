/**
 * Created by stijn on 13-6-2016.
 */
var arrow_down_container = $('.arrow_down_container');
var zeebonk_share_bar = $('.zeebonk_redo_test_bar');
var zeebonk_img = $('.zeebonk_img');
var bar_height = 60;

$(window).ready(function(e){
    check_bar_positions();

    console.log(zeebonk_img.position());
});

arrow_down_container.click(function(e){

    var main_content = $('.main_content');
    $("html, body").animate({ scrollTop: main_content.position().top }, 600);


});

$(window).scroll(function (event) {
    check_bar_positions();
});

function check_bar_positions(){

    if(  ( getTopScroll() + getWindowHeight()  ) < getImageLimit() + bar_height + zeebonk_img.height())
    {
        zeebonk_share_bar.hide();
        arrow_down_container.show();
    }
    else {
        zeebonk_share_bar.show();
        arrow_down_container.hide();
    }
}

function getWindowHeight(){
    return $(window).height();
}

function getTopScroll(){
    return $(window).scrollTop();
}

function getImageLimit(){
    return zeebonk_img.position().top;
}


