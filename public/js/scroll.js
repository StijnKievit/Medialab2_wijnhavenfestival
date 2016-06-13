/**
 * Created by stijn on 13-6-2016.
 */
var arrow_down_container = $('.arrow_down_container');
var zeebonk_share_bar = $('.zeebonk_redo_test_bar');
var arrow_down_base_pos = arrow_down_container.position();
var window_height;

$(window).ready(function(e){
    check_bar_positions();
});

arrow_down_container.click(function(e){

    var main_content = $('.main_content');

/*    console.log(main_content.position().top);*/

    $("html, body").animate({ scrollTop: main_content.position().top }, 600);

    /* window.scrollBy(0,670);*/
    /*console.log('scroll to content');*/


});

$(window).scroll(function (event) {
    check_bar_positions();
});

function check_bar_positions(){
   /* console.log(getWindowHeight());
    console.log();*/

    if($(window).scrollTop() < 150)
    {
        /*console.log('position is fixed');*/
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

/*console.log(arrow_down_container.position());
console.log($(window).height());*/

