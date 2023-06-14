<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $title=$_POST['title'];
    $file=$_FILES['photo']['name'];
    if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)){
        $db->query("update team set name='$name',title='$title',photo='$file' where id=".$_GET['id']);
    }else{
        $db->query("update team set name='$name',title='$title' where id=".$_GET['id']);
    }
    header('Location:team.php');
}
?>