<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 17:37
 */

require_once('databaseConnection.php');
$db=getDb();
function getContacts($id){
  $query="select contacts from user where id=".$id;
  global  $db;
  $result=$db->query($query);
  $row=$result->fetch_assoc();
  $contacts=$row['contacts'];
  $array=explode(",",$contacts);
  return $array;
}
function setContacts($contacts,$id){
  global $db;
  $query="update user set contacts='".$contacts."' where id=".$id;
  $db->query($query);
}
?>