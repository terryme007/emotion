<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/24
 * Time: 8:41
 */
class userCtrl
{
    function send_scode(){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Dao\\userDao.php";
        $returnJson=new ReturnJson();
        $tel=null;
        if(isset($_REQUEST["u_tel"])){
            $tel=$_REQUEST["u_tel"];
        }

        $userDao=new userDao();
        if($tel!=null){
            $user=$userDao->getUserByTel($tel);
            if($user==null){
                $user=new User();
                $user->setUserTel($tel);
                $user->setScode("1234");
                if($userDao->addUserForTel($user)){
                    $returnJson->setInfo("验证码发送成功！");
                    $returnJson->setStatus(1);
                    $returnJson->setSuccess(true);
                }else{
                    $returnJson->setInfo("验证码发送失败！");
                }
            }else if($user->getUserStatus()==0){
                $user->setUserTel($tel);
                $user->setScode("1234");
                if($userDao->reAddUserForTel($user)){
                    $returnJson->setInfo("验证码发送成功！");
                    $returnJson->setStatus(1);
                    $returnJson->setSuccess(true);
                }else{
                    $returnJson->setInfo("验证码发送失败！");
                }
            }else{
                $returnJson->setInfo("该手机号已被注册！");
            }
        }else{
            $returnJson->setInfo("无法获取手机号！");
        }
        return json_encode($returnJson);
    }

    function register(){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Dao\\userDao.php";
        $returnJson=new ReturnJson();
        $uname=null;
        $upwd=null;
        $scode=null;
        $tel=null;
        $user=null;
        if(isset($_REQUEST["u_name"])){
            $uname=$_REQUEST["u_name"];
        }
        if(isset($_REQUEST["u_pwd"])){
            $upwd=$_REQUEST["u_pwd"];
        }
        if(isset($_REQUEST["s_code"])){
            $scode=$_REQUEST["s_code"];
        }
        if(isset($_REQUEST["u_tel"])){
            $tel=$_REQUEST["u_tel"];
        }

        $userDao=new userDao();
        if($tel!=null){
            $user=$userDao->getUserByTel($tel);
            if($user!=null){
                $nowTime=strtotime(date("y-m-d H:i:s")); //当前时间  ,注意H 是24小时 h是12小时
                $scodeTime=strtotime($user->getScodeLastTime());
                if($nowTime<=$scodeTime){
                    if($user->getScode()==$scode){
                        //验证码校验通过
                        $user->setUserName($uname);
                        $user->setUserPwd($upwd);
                        if($userDao->addUserInfo($user)){
                            //注册成功，跳转到home
                            session_start();
                            $user->setUserPwd("");
                            $_SESSION["user"]= serialize($user);
                            $returnJson->setInfo("home.php");
                            $returnJson->setStatus(1);
                            $returnJson->setSuccess(true);
                        }else{
                            $returnJson->setInfo("注册失败！");
                        }
                    }else{
                        $returnJson->setInfo("验证码输入错误！");
                    }
                }else{
                    $returnJson->setInfo("验证码已过期！");
                }
            }else{
                $returnJson->setInfo("请先发送验证码！");
            }
        }else{
            $returnJson->setInfo("无法获取手机号！");
        }
        return json_encode($returnJson);
    }
}