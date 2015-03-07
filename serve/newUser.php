<html>
<head>
    <title>Add Result</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 11:54
 */
require_once('databaseInf.php');

$db=new mysqli(getDatabaseURL(),getUserName(),getUserCode(),getDatabaseName());
if(mysqli_connect_errno()){
    echo 'Error:Cannot connect the database.Please try again later.';
    exit;
}
$name=$_POST['name'];
$password=sha1(trim($_POST['password']));
$photo=$_POST['photo'];
$phone=$_POST['phone'];
addUser($name,$photo,$phone,$password);
function addUser($name,$photo,$phone,$password){
    global $db;
    $id=0;
    $query="insert into user values(".$id.",'".$name."','".$photo."','".$phone."','".$password."','1,2,3,4')";
    echo $query;
    $db->query($query);
    $tablename=$name."_".getUserid($name);
    $date=date("Y/m/d");
    $query="create table ".$tablename."(id int unsigned not null auto_increment primary key,startTime datetime,endTime datetime,activityid int unsigned)";
    echo $query;
    $db->query($query);
}
function getUserid($name){
    global $db;
    $query="select max(id) from user ";
    $result=$db->query($query);
    $row=$result->fetch_assoc();
    return $row['max(id)'];
}
?>
<h1>Insert Successfully.</h1>
</html>