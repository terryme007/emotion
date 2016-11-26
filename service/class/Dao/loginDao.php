<?php

/**
 * Created by PhpStorm.
 * User: terry
 * Date: 2016/11/20
 * Time: 22:27
 */
class loginDao
{
    function login($userTel,$userPwd){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $user=null;
        $conn=new connDB();
        $sql="select * from u_info where u_tel=? and u_pwd=? ";
        $params=array("ss",$userTel,$userPwd);
        $rs=$conn->query($sql,$params);
        if($rs!=null){
            $row=$rs->fetch_array();
            if(count($row)>0){
                $user=new User();
                $user->setUserId($row["u_id"]);
                $user->setUserName($row["u_name"]);
                $user->setUserPwd($row["u_pwd"]);
                $user->setUserStatus($row['u_status']);
                $user->setUserType($row['u_type']);
            }
        }
        return $user;

    }
}