<?php
require('php/connection.php');
$db=new dbconn();
$result=$db->addNewUser();
echo json_encode($result);
?>