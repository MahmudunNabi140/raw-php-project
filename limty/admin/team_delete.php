<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from team where id=".$_GET['id']);
header("location:team.php");
?>