<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 17:32
 */
require_once('databaseConnection.php');
require_once('userInf.php');
require_once('contacts.php');
$db=getDb();
delContacts('lxy',1);
function getUser($name){
$userInf=getInf($name);
    $contacts=getContacts($userInf['id']);
    $length=count($contacts);
    $c="";
    for($i=0;$i<$length;$i++){
        $c=$c.$contacts[$i].",";
    }
    return "user#".$name.",".$userInf['photo'].",".$userInf['phone'].",".$userInf['password'].",contacts#".$c."";
}
function delectUser($name){
 $query="delete * from user where name='".$name."'";
    global $db;
    $db->query($query);
}
function resetUser(){

}
function newUser(){

}
function delUser(){

}
function getContact($name){
    $id=getID($name);
    $arr=getContacts($id);
    return $arr;
}
function addContacts($name){

}
function getName($id){
    global $db;
    $query="select name from user where id=".$id;
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    return $row['name'];
}
function getID($name){
   $arr=getInf($name);
    return $arr[0];
}
function delContacts($name,$cid){
$arr=getContact($name);
    $length=count($arr);
    for($i=0;$i<$length;$i++){
        if($arr[$i]==$cid){
            array_splice($arr,i,1);
        }
    }
    $s="";
    $length=count($arr);
    for($i=0;$i<$length;$i++){
       $s=$s.$arr[$i].",";
    }
    setContact($name,$s);

}
function setContact($name,$contacts){
    setContacts($contacts,getID($name));
}
//set phone
function setPhone($name,$phone){
global $db;
    $query="update user set phone='".$phone."' where name='".$name."'";
    $db->query($query);
}
//取得基本信息，但不包括图片，因为图片太大

//取得图片
function getPhoto($name){
    $arr=getInf($name);
    return $arr[1];
}
function setInf(){

}
?>