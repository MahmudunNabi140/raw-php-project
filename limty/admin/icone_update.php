<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $details=$_POST['details'];
    $query=("update `icone` set ,`title`='$title', `details`='$details' where id=".$_GET['id']);
    header('Location:icone.php');
}

?>