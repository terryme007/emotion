<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/21
 * Time: 11:38
 */

require $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Dao\\loginDao.php";
require $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\ReturnJson.php";

class login
{
    function login_in(){
        //初始化定义参数
        $returnJson=new ReturnJson();
        $utel=null;
        $upwd=null;
        //获取参数值
        if(isset($_REQUEST["u_tel"])){
            $utel=$_REQUEST["u_tel"];
        }else {
            $returnJson->setInfo('请输入用户名');
            return json_encode($returnJson);
        }
        if(isset($_REQUEST["u_pwd"])){
            $upwd=$_REQUEST["u_pwd"];
        }else{
            $returnJson->setInfo('请输入密码');
            return json_encode($returnJson);
        }
        $loginDao=new loginDao();
        $user=$loginDao->login($utel,$upwd);
        if($user!=null){
            session_start();
            $user->setUserPwd("");
            $_SESSION["user"]= serialize($user);
            $returnJson->setStatus(1);
            $returnJson->setSuccess(true);
        }else{
            $returnJson->setInfo('用户名或密码错误');
        }
        return json_encode($returnJson);
    }

    function login_in_for_page(){
        //初始化定义参数
        $returnJson=new ReturnJson();
        $utel=null;
        $upwd=null;
        //获取参数值
        if(isset($_REQUEST["u_tel"])){
            $utel=$_REQUEST["u_tel"];
        }else{
            $returnJson->setInfo('请输入用户名');
            return json_encode($returnJson);
        }
        if(isset($_REQUEST["u_pwd"])){
            $upwd=$_REQUEST["u_pwd"];
        }else{
            $returnJson->setInfo('请输入密码');
            return json_encode($returnJson);
        }
        $loginDao=new loginDao();
        $user=$loginDao->login($utel,$upwd);
        if($user!=null){
            session_start();
            $user->setUserPwd("");
            $_SESSION["user"]= serialize($user);
            header("Location: ../home.php");
            exit;
        }else{
            $returnJson->setInfo('用户名或密码错误');
        }
        return json_encode($returnJson);
    }

    function login_out(){
        $returnJson=new ReturnJson();
        session_start();
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        $returnJson->setStatus(1);
        $returnJson->setSuccess(true);
        return json_encode($returnJson);
    }

    function check_login(){
        $returnJson=new ReturnJson();
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        session_start();
        $user=null;
        if(isset($_SESSION['user'])){{
        }
            $user=unserialize($_SESSION['user']);
        }
        if($user==null){
            $returnJson->setInfo("请登录！");
        }else if($user->getUserId()!=null){
            $returnJson->setStatus(1);
            $returnJson->setSuccess(true);
        }else{
            $returnJson->setInfo("登录状态异常，请重新登录！");
        }
        return json_encode($returnJson);
    }

    function check_login_for_page(){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        session_start();
        $user=null;
        if(isset($_SESSION['user'])){{
        }
            $user=unserialize($_SESSION['user']);
        }
        if($user!=null && $user->getUserId()!=null){
            return true;
        }
        $request_url=$_SERVER['REQUEST_URI'];
        if(strpos($request_url,"index")>0 || strpos($request_url,"register")>0 || strpos($request_url,"about")>0){
            return false;
        }else{
            header("Location: index.php");
        }
    }
}
