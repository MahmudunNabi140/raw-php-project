<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from latest_news where id=".$_GET['id']);
header("location:latest_news.php");
?>