<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from tamplate where id=".$_GET['id']);
header("location:tamplate.php");
?>