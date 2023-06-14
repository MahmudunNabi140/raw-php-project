<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from icone where id=".$_GET['id']);
header("location:icone.php");
?>