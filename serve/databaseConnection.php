<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/22
 * Time: 17:40
 */
require_once('databaseInf.php');
function getDb(){
    @ $db=new mysqli(getDatabaseURL(),getUserName(),getUserCode(),getDatabaseName());
    if(mysqli_connect_errno()){
        echo 'Error:Cannot connect to database.Please try again later.';
        exit;
    }
    return $db;
}

getDb();

?>