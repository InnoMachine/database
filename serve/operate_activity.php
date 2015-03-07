<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2015/2/23
 * Time: 16:01
 */
require_once('activity.php');
$order=$_POST['order'];
switch($order){
    case 'new':
        $content=$_POST['content'];
        $par=$_POST['par'];
        newActivity($content,$par);
        break;
    case 'del':
        $id=$_POST['id'];
        delActivity($id);
        break;
    case 'reset content':
        $content=$_POST['content'];
        $id=$_POST['id'];
        setContent($content,$id);
        break;
    case 'add par':
        $par=$_POST['par'];
        $id=$_POST['id'];
        setPar($par,$id);
        break;
    case 'del par':
        $par=$_POST['par'];
        $id=$_POST['id'];
        delPar($par,$id);
        break;
    case 'get inf':
        $id=$_POST['id'];
        echo getInfOfActivity($id);
        break;
    case 'maxid':
        echo getMax();
        break;
}
?>