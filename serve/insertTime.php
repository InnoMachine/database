<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/23
 * Time: 14:53
 * 这个脚本用于插入某一天的时间段 从上午8点到下午21点
 */
require_once('databaseConnection.php');
$db=getDb();
$stime='2015-3-5 8:0:0';
echo nextTime($stime);
while(nextTime($stime)!="#") {
   // insert($stime, nextTime($stime), 'lxy_1');
    $stime=nextTime($stime);
}
function insert($stime,$etime,$table){
    global $db;
    $query="insert into ".$table." values (0,'".$stime."','".$etime."',0)";
    $db->query($query);
}
function nextTime($stime){
if(date('H',strtotime($stime))>21){
return "#";
}
    else{
       return date('Y-m-d H:i:s ',strtotime("+ 60 minutes",strtotime($stime)));
    }
}
function getTimeLimit(){
    $array=array(8,21);
    return $array;
}

?>