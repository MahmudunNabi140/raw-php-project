<?php
$db=new mysqli('localhost','root','','limty');
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $support=$_POST['support'];
    $data_base=$_POST['data_base'];
    $maintenance=$_POST['maintenance'];
    $traffic=$_POST['traffic'];
    $file=$_FILES['photo']['name'];
if (move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file)) {
    $db->query("update pricing_plan set title='$title',price='$price',date='$date',support='$support',data_base='$data_base',maintenance='$maintenance',traffic='$traffic',photo='$file' where id=".$_GET['id']);
}else {
    $db->query("update pricing_plan set title='$title',price='$price',date='$date',support='$support',data_base='$data_base',maintenance='$maintenance',traffic='$traffic' where id=".$_GET['id']); 
}
header('Location:pricing_plan.php');
}






?>