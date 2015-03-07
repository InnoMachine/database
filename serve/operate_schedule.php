<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/23
 * Time: 16:19
 */
require_once('schedule.php');
require_once('userInf.php');
$order=$_POST['order'];
switch($order){
    case 'get schedule':
        $stime=$_POST['stime'];
        $length=$_POST['length'];
        $name=$_POST['name'];
       echo getSchedule($name,$stime,$length);
        break;
    case 'set activity'://这里set activity 包括了增加，删除活动和设置有空，只是活动id不一样 分别为 非0和1；0；1.
        $stime=$_POST['stime'];
        $etime=$_POST['etime'];
        $activityid=$_POST['activityid'];
        $username=$_POST['name'];
        $arr=getInf($username);
        setActivity($stime,$etime,$username."_".$arr[0],$activityid);
        break;
}

?>