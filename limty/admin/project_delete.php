<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from project where id=".$_GET['id']);
header("location:project.php");
?>