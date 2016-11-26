<!DOCTYPE html>
<html lang="en">

<?php
require("service/class/Ctrl/login.php");
$login=new login();
if($login->check_login_for_page())
    header("Location: home.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>情感实验室 - 注册</title>
    <link href="css/register.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/service.js"></script>
    <script src="js/register.js"></script>
</head>
<body>
    <div align="center">
        <div class="page_title"><a href="index.php"><img class="back_label" src="img/back_t.png"></a><div class="title_font">入住实验室</div></div>
        <form id="reg_form" class="box" method="post">
            <input name="u_tel" id="tel" class="input_text" type="tel" placeholder="手机号">
            <input name="s_code" id="scode" class="input_txt_short" type="number" placeholder="验证码">
            <input class="input_btn_short" type="button" value="发送验证码" onclick="sendScode();" >
            <input name="u_name" id="name" class="input_text" type="text" placeholder="用户名">
            <input name="u_pwd" id="pwd" class="input_text" type="password" placeholder="密码">
            <input id="repwd" class="input_text" type="password" placeholder="重复密码">
            <input class="input_btn" type="button" value="立即入住" onclick="register();">
        </form>
    </div>
    <!--<footer>-->
        <!--copyright &copy; goway.me 2016.-->
    <!--</footer>-->
</body>
</html>