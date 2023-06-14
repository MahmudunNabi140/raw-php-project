<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
$db=new mysqli('localhost','root','','limty');
$pricing_plan_edit=$db->query("select * from pricing_plan where id=".$_GET['id'])->fetch_assoc();
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $support=$_POST['support'];
    $data_base=$_POST['data_base'];
    $maintenance=$_POST['maintenance'];
    $traffic=$_POST['traffic'];
    $file=$_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/image/'.$file);
    $query="INSERT INTO `pricing_plan` (`id`, `photo`, `price`, `title`,`date`,support,data_base,`maintenance`,traffic) VALUES (NULL, '$file','$price','$title','$date','$support','$data_base','$maintenance','$traffic')";
    $db->query($query);
    header('Location:pricing_plan.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css"><link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php
  require('menu.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Pricing Plan</h5>
              </div>
              <div class="card-body">
              <form action="pricing_plan_update.php?id=<?php echo $pricing_plan_edit['id']?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="<?php echo $pricing_plan_edit['title']?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $pricing_plan_edit['price']?>" >
                    </div>
                    </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="text" name="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Date" value="<?php echo $pricing_plan_edit['date']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Support</label>
                        <input type="text" name="support" class="form-control" id="exampleInputEmail1" placeholder="Enter Support" value="<?php echo $pricing_plan_edit['support']?>" >
                    </div>
                    </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data_base</label>
                        <input type="text" name="data_base" class="form-control" id="exampleInputEmail1" placeholder="Enter Data_base"  value="<?php echo $pricing_plan_edit['data_base']?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maintenance</label>
                        <input type="text" name="maintenance" class="form-control" id="exampleInputEmail1" placeholder="Enter Maintenance"  value="<?php echo $pricing_plan_edit['maintenance']?>">
                    </div>
                    </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Traffic</label>
                        <input type="text" name="traffic" class="form-control" id="exampleInputEmail1" placeholder="Enter Traffic"  value="<?php echo $pricing_plan_edit['traffic']?>" >
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                        <label for="exampleInputEmail1"><img src="../assets/image/<?php echo $pricing_plan_edit['photo']?>" alt=""></label>
                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                    </div>
                </div>
                    </div>

                    
                 
            </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
     
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>