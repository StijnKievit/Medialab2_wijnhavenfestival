/**
 * Created by stijn on 15-6-2016.
 */
var main_content = $("#main_content");
var sub_content = $("#sub_content");

function adjustSubContent(){
    sub_content.height(main_content.height());

}
function setMainContent(main_content){
    main_content = $(main_content);
}
function setSubContent(sub_content){
    sub_content = $(sub_content);
}
function scrollable(bool){

    if(bool){
        sub_content.css("overflow", "scroll");
    }
    else {
        sub_content.css("overflow", "auto");
    }
}