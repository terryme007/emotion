<!DOCTYPE html>
<html lang="en">

<?php
require("service/class/Ctrl/login.php");
$login=new login();
$login->check_login_for_page();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>情感实验室 - 选择情感</title>
    <link href="css/viewfocus.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/viewfocus.js"></script>
    <script>
                $(document).ready(function(){
                    auto();
                })
                $(window).resize(function(){
                    setTimeout("auto();",10);
                })
    </script>
</head>
<body>
<div align="center">
    <div class="page_title"><a href="home.php"><img class="back_label" src="img/back_t.png"></a>
        <div class="title_font">记录情感</div>
    </div>
    <h1 class="font_main">因为Ta，我感到</h1>
</div>

<div align="center" style="width: 100%">
    <div id="item_box">
        <a href="javascript:saveEmotion(1);">
            <div class="emotion_item item_yellow">
                <div class="item_txt">开<br/>心</div>
            </div>
        </a>
        <a href="javascript:saveEmotion(2);">
            <div class="emotion_item item_green">
                <div class="item_txt">烦<br/>恼</div>
            </div>
        </a>
        <a href="javascript:saveEmotion(3);">
            <div class="emotion_item item_red">
                <div class="item_txt">愤<br/>怒</div>
            </div>
        </a>
        <a href="javascript:saveEmotion(4);">
            <div class="emotion_item item_blue">
                <div class="item_txt">伤<br/>心</div>
            </div>
        </a>
        <a href="javascript:saveEmotion(5);">
            <div class="emotion_item item_purple">
                <div class="item_txt">尴<br/>尬</div>
            </div>
        </a>
    </div>
</div>

</body>
</html>