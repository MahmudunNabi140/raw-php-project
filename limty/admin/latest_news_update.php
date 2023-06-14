<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['title'])){
    $add_by=$_POST['add_by'];
    $title=$_POST['title'];
    $details=$_POST['details'];
    $date=$_POST['date'];
    $file=$_FILES['photo']['name'];
    if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)){
        $db->query("Update latest_news set title='$title',add_by='$add_by',details='$details',date='$date',photo='$file' where id=".$_GET['id']);
    }else{
        $db->query("Update latest_news set title='$title',add_by='$add_by',details='$details',date='$date' where id=".$_GET['id']);
    }
    header("Location:latest_news.php");
}