<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $details=$_POST['details'];
    $type_1=$_POST['type_1'];
    $type_2=$_POST['type_2'];
    $type_3=$_POST['type_3'];
    $type_4=$_POST['type_4'];
    $file=$_FILES['photo']['name'];
    if (move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)) {
        $db->query("update about_us set title='$title',details='$details',type_1='$type_1',type_2='type_2',type_3='type_3',type_4='type_4',photo='$file' where id=".$_GET['id']);
    }else {
        $db->query("update about_us set title='$title',details='$details',type_1='$type_1',type_2='type_2',type_3='type_3',type_4='type_4' where id=".$_GET['id']); 
    }
   
    header('Location:about_us.php');
}
?>