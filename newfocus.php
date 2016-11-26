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
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>情感实验室 - 添加新关注</title>
    <link href="css/newfocus.css" rel="stylesheet">
</head>
<body>
    <div align="center">
        <div class="page_title">
            <a href="home.php"><img class="back_label" src="img/back_t.png"></a>
            <div class="title_font">添加新关注</div>
            <input class="save_btn" type="button" value="保存"></div>
        <div class="box">
            <h2 class="my_h2 font_blue">你最喜欢的，Ta的样子</h2>
            <img src="img/21003372621469680510_2.jpg" class="u_img">
        </div>
        <div class="box">
            <h2 class="my_h2 font_green">你会这样称呼Ta</h2>
            <input type="text" class="input_text">
        </div>
        <div class="box">
            <h2 class="my_h2 font_orange">你对Ta的好感度</h2>
            <div style="width: 150px">
                <input type="button" class="input_btn font_orange" value="100"><div class="big_font font_orange">℃</div>
            </div>
        </div>
    </div>

</body>
</html>