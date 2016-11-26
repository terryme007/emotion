/**
 * Created by terry on 2016/11/20.
 */
function optionAudio(){
    var audio=document.getElementById('myAudio');
    if(audio.paused){
        audio.play();
        $("#play_btn").attr("src","img/4.png");
        audio.addEventListener('ended', function () {
            $("#play_btn").attr("src","img/6.png");
        }, false);
    }else{
        audio.pause();
        $("#play_btn").attr("src","img/6.png");
    }
}

