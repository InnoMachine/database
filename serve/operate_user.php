<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/23
 * Time: 20:05
 */
require_once('user.php');
require_once('userInf.php');
$order=$_POST['order'];
switch($order){
    case 'new user':break;
    case 'del user':break;
    case 'get name':
        $id=$_POST['id'];
        echo getName($id);
        break;
    case 'get id':
        $name=$_POST['name'];
        echo getID($name);
        break;
    case 'set name':break;
    case 'set phone':break;
    case 'set photo':break;
    case 'confirm password':
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        break;
    //根据id得到基础信息
    case 'get inf':
        $name=$_POST['name'];
        $arr=getInf($name);
        echo $arr[0]."*".$arr[1]."*".$arr[2]."*".$arr[4];
        break;
}


?>