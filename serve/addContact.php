<?php
require_once('user.php');
require_once('userInf.php');

$id=$_POST['id'];
$content=$_POST['content'];
$phone=$_POST['phone'];

#send message to the receiver(asyn upload)
addContacts(id);

?>