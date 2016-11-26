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
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>情感实验室 - 登录</title>
    <link href="css/index.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/service.js"></script>
    <script src="js/index.js"></script>
    <script>
        $(document).ready(function(){
            set_footer();
        });
        $(window).resize(function(){
            setTimeout("set_footer()",10);
        });
    </script>
</head>
<body>
<div align="center" style="margin-top: 40px">
    <img class="logo" src="img/logo.png">
</div>
<div align="center">
    <form id="login_form" method="post">
        <input id="u_tel" name="u_tel" class="input_text" type="tel" placeholder="手机号">
        <input id="u_pwd" name="u_pwd" class="input_text" type="password" placeholder="密码">
        <input class="input_btn" type="button" value="登录" onclick="login()">
    </form>
</div>
<footer>
    <div class="footer_left"><a href="register.php" class="font_main">注册</a></div>
    <div class="footer_center font_main">|</div>
    <div class="footer_right"><a href="ablut.html" class="font_main">关于</a></div>
</footer>

</body>
</html>