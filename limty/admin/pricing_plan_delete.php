<?php
$db=new mysqli('localhost','root','','limty');
$db->query("delete from pricing_plan where id=".$_GET['id']);
header('Location: pricing_plan.php');
?>