<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $details=$_POST['details'];
    $file=$_FILES['photo']['name'];
  if (move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)) {
    $db->query("update testimonial set name='$name',designation='$designation',details='$details',photo='$file' where id=".$_GET['id']);
  }else {
    $db->query("update testimonial set name='$name',designation='$designation',details='$details' where id=".$_GET['id']);
  }
    header('Location:testimonial.php');
}
?>