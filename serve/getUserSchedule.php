<?php
require_once('schedule.php');
require_once('userInf.php');
$uid=$_POST['user_id'];
$cid=$_POST['contact_id'];
$token=$_POST['token'];


#echo ["status":"1","schedule":{"activity1":{"content":"do something","id":"0001"}},"size":...];

$name=getId(name);
echo getSchedule($name,$stime,$length);
?>