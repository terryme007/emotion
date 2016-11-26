<?php

/**
 * Created by PhpStorm.
 * User: terry
 * Date: 2016/11/20
 * Time: 22:28
 */
class connDB
{
    private $server="qdm153527460.my3w.com:3306";
    private $uname="qdm153527460";
    private $upwd="terrycr88";
    private $db="qdm153527460_db";

    function conn()
    {
        try {
            $con = new mysqli($this->server, $this->uname, $this->upwd,$this->db);
            if ($con) {
                return $con;
            }else{
                return false;
            }
        }catch (Exception $e){
            return false;
        }
    }

    /**
     * @param $sql
     * @param array $params= array('ids',1000,200.00,'string value');// 第一个参数为参数表类型串, 其中 i:整型 d:双精度 s:表示字符串 b:BLOG
     * @return bool
     */
    function queryForInt($sql,$params=array()){
        $conn=$this->conn();
        if($conn){
            $stmt = $conn->prepare($sql);
            if($params!=null){
                foreach($params as $k=>$v){
                    $array[] = &$params[$k];
                }
                call_user_func_array(array($stmt, 'bind_param'), $array);
            }
            $stmt->execute();
            $rs=$stmt->get_result();
            $row=$rs->fetch_array();
            return $row[0];
        }else{
            return null;
        }
    }

    function query($sql,$params=array()){
        $conn=$this->conn();
        if($conn){
            $stmt = $conn->prepare($sql);
            if($params!=null){
                foreach($params as $k=>$v){
                    $array[] = &$params[$k];
                }
                call_user_func_array(array($stmt, 'bind_param'), $array);
            }
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
        }else{
            return null;
        }
    }

    function insertOrUpdateOrDel($sql,$params=array()){
        $conn=$this->conn();
        if($conn){
            $stmt = $conn->prepare($sql);
            if($params!=null){
                foreach($params as $k=>$v){
                    $array[] = &$params[$k];
                }
                call_user_func_array(array($stmt, 'bind_param'), $array);
            }
            $rs=$stmt->execute();
            if($rs){
                return true;
            }
            return false;
        }else{
            return false;
        }
    }
}