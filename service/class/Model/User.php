<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/21
 * Time: 12:28
 */
class User
{
    private $userId;
    private $userName;
    private $userPwd;
    private $userTel;
    private $userSex;
    private $userCountry;
    private $userStatus;
    private $userType;
    private $scode;
    private $scodeLastTime;

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserPwd()
    {
        return $this->userPwd;
    }

    /**
     * @param mixed $userPwd
     */
    public function setUserPwd($userPwd)
    {
        $this->userPwd = $userPwd;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserTel()
    {
        return $this->userTel;
    }

    /**
     * @param mixed $userTel
     */
    public function setUserTel($userTel)
    {
        $this->userTel = $userTel;
    }

    /**
     * @return mixed
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @param mixed $userStatus
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
    }

    /**
     * @return mixed
     */
    public function getUserSex()
    {
        return $this->userSex;
    }

    /**
     * @param mixed $userSex
     */
    public function setUserSex($userSex)
    {
        $this->userSex = $userSex;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
    }

    /**
     * @return mixed
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * @param mixed $userCountry
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;
    }

    /**
     * @return mixed
     */
    public function getScode()
    {
        return $this->scode;
    }

    /**
     * @param mixed $scode
     */
    public function setScode($scode)
    {
        $this->scode = $scode;
    }

    /**
     * @return mixed
     */
    public function getScodeLastTime()
    {
        return $this->scodeLastTime;
    }

    /**
     * @param mixed $scodeLastTime
     */
    public function setScodeLastTime($scodeLastTime)
    {
        $this->scodeLastTime = $scodeLastTime;
    }


}