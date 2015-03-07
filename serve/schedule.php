<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 20:14
 */
require_once('databaseConnection.php');
require_once('userInf.php');
$db=getDb();
function getId($name,$date){
    global $db;
    $arr=getInf($name);
    $id=$arr[0];
    $query="select  id from ".$name."_".$id." where startTime='".$date."'";
    $result=$db->query($query);
    $r=$result->fetch_assoc();
    $row=$r['id']-1;
   return $row;
}
//取得一串字符串，表示一段时间内的活动信息
function getSchedule($name,$date,$length){
    global $db;
    $arr=getInf($name);
    $id=$arr[0];

    $row=getId($name,$date);

    $query="select activityid from ".$name."_".$id." limit ".$row.", ".$length;
    $result=$db->query($query);
    $schedule="";
    for($i=0;$i<mysqli_num_rows($result);$i++){
        $temp=mysqli_fetch_row($result);
        $schedule=$schedule.$temp[0].",";
    }
    return $schedule;
}
//布置活动
function setActivity($startTime,$endTime,$table,$activityid){
    global $db;
    $query="update ".$table." set activityid=".$activityid." where startTime='".$startTime."' and endTime='".$endTime."'";
    echo $query;
    $db->query($query);
}
//设置有空
function setFree($startTime,$endTime,$table){
    setActivity($startTime,$endTime,$table,1);
}

?>