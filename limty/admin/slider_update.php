<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['title_1'])){
    $title_1=$_POST['title_1'];
    $title_2=$_POST['title_2'];
    $file=$_FILES['photo']['name'];
    if(move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)){
        $db->query("update sliders set title_1='$title_1',title_2='$title_2',photo='$file' where id=".$_GET['id']);
    }else{
        $db->query("update sliders set title_1='$title_1',title_2='$title_2' where id=".$_GET['id']);
    }
    header("Location:slider.php");
}
?>