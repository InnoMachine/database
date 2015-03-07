<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 21:45
 */
//创建新的活动
require_once('databaseConnection.php');
$db=getDb();
echo getInfOfActivity(9);
function newActivity($context,$contacts){
    global $db;
    $query="insert into activity values(0,'".$context."','".$contacts."')";
    $db->query($query);
}
//设置参与人员
function setPar($parid,$activityid){
    global $db;
    $query="select inner_user_id from activity where id=".$activityid."";
    echo $query;
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    $contacts=$row['inner_user_id'];
    $contacts=$contacts.",".$parid;
    $query="update activity set inner_user_id='".$contacts."' where id=".$activityid;
    echo $query;
    $db->query($query);
}
function setContent($content,$activityid){
    global $db;
    $query="update activity set content='".$content."' where id=".$activityid;
    $db->query($query);
}
function delActivity($id){
    global $db;
    $query="delete  from activity where id=".$id."";
    echo $query;
    $db->query($query);
}
function getInfOfActivity($id){
    global $db;
    $query="select content,inner_user_id from activity where id=".$id;
    $result=$db->query($query);
    $result=$result->fetch_assoc();
    $arr=array($result['content'],$result['inner_user_id']);
    return $arr[0]."#".$arr[1];
}
function delPar($parid,$activityid){
    global $db;
    $query="select inner_user_id from activity where id=".$activityid."";
    echo $query;
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    $contacts=$row['inner_user_id'];
    $contacts=str_replace($parid,"",$contacts);
    $query="update activity set inner_user_id='".$contacts."' where id=".$activityid;
    $db->query($query);
}
function getMax(){
    global $db;
    $query="select max(id) from activity";
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    return $row['max(id)'];

}
?>