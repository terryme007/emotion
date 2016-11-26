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
    <title>情感实验室 - XXX</title>
    <link href="css/focus.css" rel="stylesheet">
    <link rel="stylesheet" href="js/jquery.percentageloader-0.1.css"/>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/globalize.min.js"></script>
    <script src="js/dx.chartjs.js"></script>
    <script src="js/jquery.percentageloader-0.1.js"></script>
    <script src="js/focus.js"></script>
    <script>
        $(document).ready(function(){
            set_footer();
            setHotValue();
            setHotChart();
            setEmotionChart();
        });

        $(window).resize(function(){
            setTimeout("set_footer()",10);
        });
    </script>
</head>
<body>
    <div align="center" style="width: 100%">
        <div class="page_title">
            <a href="home.php"><img class="back_label" src="img/back_t.png"></a>
            <div class="title_font">XXX</div>
        </div>

        <div class="emotion_value_box">
            <div id="topLoader"></div>
        </div>
        <div id="emotion_chart">
            <div class="emotion_chart_drawing">

                <div id="bar-3" style="height: 150px; width: 100%;"></div>
            </div>
            <div class="emotion_chart_drawing">

                <div id="bar-4" style="height: 150px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <footer>
        <input class="input_btn" type="button" value="Emotion Tips">
    </footer>

</body>
</html>