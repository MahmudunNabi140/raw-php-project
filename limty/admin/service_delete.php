<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from service where id=".$_GET['id']);
header("location:service.php");
?>