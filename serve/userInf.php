<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 19:48
 */
require_once('databaseConnection.php');
$db=getDb();
function getInf($name){
    global $db;
    $query="select id,photo,phone,password,contacts from user where name='".$name."'";
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    $array=array($row['id'],$row['photo'],$row['phone'],$row['password'],$row['contacts']);
    return $array;
}


?>