<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from blog where id=".$_GET['id']);
header('Location: blog.php');
?>