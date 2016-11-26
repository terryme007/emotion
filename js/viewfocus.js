/**
 * Created by Administrator on 2016/11/18.
 */
function auto(){
    var w=window.screen.availWidth;
    var max_item=Math.floor(w/114);
    var now_item=0;
    now_item= $("#item_box").find(".item_txt").length;
    if(now_item<max_item)max_item=now_item;
    var div_w=114*(max_item);
    $("#item_box").css("width",div_w);
}

function saveEmotion(emotion){
    //保存情感

    //保存成功后跳转
    window.location.href="focus.php";
}
