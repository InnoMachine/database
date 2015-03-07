<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 21:05
 */
require_once('databaseConnection.php');
$db=getDb();
$stime=$_POST['startTime'];
$etime=$_POST['endTime'];
$activity=$_POST['activity'];
$query="insert into lxy_1 values(0,'".$stime."','".$etime."',0)";
$db->query($query);
$query="insert into activity values(0,'".$activity."','1,2,3')";
//$db->query($query);


?>