<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/24
 * Time: 14:47
 */


class userDao
{
    /**
     * @param $Tel
     * @return null|User
     */
    function getUserByTel($Tel){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $user=null;
        $conn=new connDB();
        $sql="select  * from u_info where u_tel=? and u_type=0";
        $param=array("s",$Tel);
        $rs=$conn->query($sql,$param);
        if($rs!=null){
            $row=$rs->fetch_array();
            if(count($row)>0){
                $user=new User();
                $user->setUserId($row["u_id"]);
                $user->setUserName($row["u_name"]);
                $user->setUserPwd($row["u_pwd"]);
                $user->setUserStatus($row['u_status']);
                $user->setUserType($row['u_type']);
                $user->setScode($row['u_scode']);
                $user->setScodeLastTime($row['scode_last_time']);
            }
        }
        return $user;
    }

    /**
     * @param $uId
     * @return null|User
     */
    function getUserById($uId){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $user=null;
        $conn=new connDB();
        $sql="select  * from u_info where u_id=? and u_status=1 and u_type=0";
        $param=array("i",$uId);
        $rs=$conn->query($sql,$param);
        if($rs!=null){
            $row=$rs->fetch_array();
            if(count($row)>0){
                $user=new User();
                $user->setUserId($row["u_id"]);
                $user->setUserName($row["u_name"]);
                $user->setUserPwd($row["u_pwd"]);
                $user->setUserTel($row['u_tel']);
                $user->setUserStatus($row['u_status']);
                $user->setUserType($row['u_type']);
                $user->setUserCountry($row['u_country']);
                $user->setUserSex($row['u_sex']);
                $user->setScode($row['u_scode']);
                $user->setScodeLastTime($row['scode_last_time']);
            }
        }
        return $user;
    }

    function addUserForTel($user){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $conn=new connDB();
        $sql="insert into u_info(u_tel,u_scode,scode_last_time) values(?,?,?)";
        $timer=strtotime('now');
        $timer=$timer+15*60;
        $param=array("sss",$user->getUserTel(),$user->getScode(),date("y-m-d H:i:s",$timer));
        $rs=$conn->insertOrUpdateOrDel($sql,$param);
        return $rs;
    }

    function reAddUserForTel($user){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $conn=new connDB();
        $sql="update u_info set u_scode=?,scode_last_time=? where u_tel=?";
        $timer=strtotime('now');
        $timer=$timer+15*60;
        $param=array("sss",$user->getScode(),date("y-m-d H:i:s",$timer),$user->getUserTel());
        $rs=$conn->insertOrUpdateOrDel($sql,$param);
        return $rs;
    }

    function addUserInfo($user){
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Model\\User.php";
        require_once $_SERVER['DOCUMENT_ROOT']."\\service\\class\\Util\\connDB.php";
        $conn=new connDB();
        $sql="update u_info set u_name=?,u_pwd=?,u_status=? where u_id=?";
        $param=array("ssii",$user->getUserName(),$user->getUserPwd(),1,$user->getUserId());
        $rs=$conn->insertOrUpdateOrDel($sql,$param);
        return $rs;
    }

}