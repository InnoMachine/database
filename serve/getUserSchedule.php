<?php
require_once('schedule.php');
require_once('userInf.php');
$uid=$_POST['uid'];
$cid=$_POST['cid'];
$token=$_POST['token'];
#echo ["status":"1","schedule":{"activity1":{"content":"do something","id":"0001"}},"size":...];

echo ["1",[[],[],[]],[[],[],[]],[],[]];

$name=getId(name);
echo getSchedule($name,$stime,$length);
?>