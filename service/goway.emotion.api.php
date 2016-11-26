<?php
/**
 * Created by PhpStorm.
 * User: MIGOCOO-WEB-CR$
 * Date: 2016/11/16
 * Time: 16:57
 */
require("class/Ctrl/login.php");
require("class/Ctrl/userCtrl.php");
$api=null;
$function=null;
if(isset($_REQUEST["api"])){
    $api=$_REQUEST["api"];
    $function=substr($api,strrpos($api,".")+1);
    $api=substr($api,0,strrpos($api,"."));
}

if($api==null || $api==""){
    echo 'error api';
    return;
}
switch($api){
    case 'goway.emotion.login':{
        $login=new login();
        switch($function){
            case 'login_in':echo $login->login_in();break;
            case 'login_out':echo $login->login_out();break;
            case 'check_login':echo $login->check_login();break;
            case 'login_in_for_page':echo $login->login_in_for_page();break;
        }
        break;
    }
    case 'goway.emotion.user':{
        $userCtrl=new userCtrl();
        switch($function){
            case 'send_scode':echo $userCtrl->send_scode();break;
            case 'register':echo $userCtrl->register();break;
        }
        break;
    }
    default:{
        echo 'not fond api';
    }
}