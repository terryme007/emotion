<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/23
 * Time: 14:01
 */
require("service/class/Ctrl/login.php");
$login=new login();
$login->check_login_for_page();
