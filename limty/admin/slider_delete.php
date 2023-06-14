<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from sliders where id=".$_GET['id']);
header("location:slider.php");
?>

