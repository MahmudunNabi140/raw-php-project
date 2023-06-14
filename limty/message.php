<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $details=$_POST['details'];
    $query="INSERT INTO `message` (`id`,`name`,`email`,`subject`,details) VALUES (NULL,'$name', '$email','$subject','$details')";
    $db->query($query);
   
}
header('Location: home2.php#contact');
?>