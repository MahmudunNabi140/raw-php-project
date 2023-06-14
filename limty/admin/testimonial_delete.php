<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from testimonial where id=".$_GET['id']);
header("location:testimonial.php");
?>