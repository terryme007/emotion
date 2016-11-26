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
    <title>情感实验室 - 我的关注</title>
    <link href="css/home.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/home.js"></script>
</head>
<body>
    <div align="center">
        <div style="width: 100%;height:130px;background-color: rgb(0,112,192);">
            <div style="width: 355px;">
                <div class="music_left">
                    <img src="img/21003372621469680510_2.jpg" class="music_img">
                    <img id="play_btn" src="img/6.png" class="play_btn" onclick="optionAudio();">
                    <audio id="myAudio" src="media/haohao.mp3" hidden></audio>
                </div>
                <div class="music_right">
                    我想为你写一首歌，想养一只猫。<br/>
                    最安静的时刻回忆，总是最喧嚣。<br/>
                    我要好好的生活，好好的变老，<br/>
                    好好假装我已经把你忘掉。<br/>
                    ——五月天《好好》
                </div>
            </div>
        </div>
        <div style="width: 355px;clear: both;">
            <div style="padding-top: 10px">
               <table width="355px">
                   <thead>
                    <tr>
                        <td colspan="2" style="border: solid rgb(0,112,192) 2px;border-radius: 5px;">
                            <div class="now_focus font_main">已关注：1</div>
                            <a href="newfocus.php"><div class="save_btn">添加关注</div></a>
                        </td>
                    </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td class="list_left">
                               <a href="viewfocus.php">
                                    <img src="img/21003372621469680510_2.jpg" class="list_left">
                               </a>
                           </td>
                           <td>
                               <a href="viewfocus.php">
                                   <span class="txt_name font_main">XXXX</span>
                                   <div class="temp_background"></div>
                                   <div class="temp_now" style="width: 37%;"></div>
                                   <div class="temp_txt font_main">37℃</div>
                               </a>
                           </td>
                       </tr>
                   </tbody>
               </table>
            </div>
        </div>
    </div>

</body>
</html>