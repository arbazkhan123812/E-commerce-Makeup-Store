<?php require_once("../Database/connection.php")?>  
  
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<?php include("sidebar.php")?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Basic forms</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Basic forms            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row g-4">
              <!-- Basic Form-->
              <div class="col-sm-12 col-xl-12">
                <div class="block">
                  <div class="title"><strong class="d-block">addCategory</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                  <div class="block-body">
                  <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                        <label class="form-control-label">Category Name</label>
                        <input type="text" name="catName" placeholder="Category" class="form-control">
                      </div>
                      <div class="mb-3">       
                        <label for="exampleInputPassword1" class="form-label">Category Image</label>
                        <input class="form-control bg-dark" type="file" name="catImage">
                      </div>
                      <div class="form-group">       
                        <button type="submit" class="btn btn-primary" name="btnSave">Add Category</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
</body>
</html>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>

    <?php 
    if(isset($_POST['btnSave'])){
      $na = $_POST['catName'];
      $im = $_FILES['catImage'];
      $imgName = $im['name'];
      


      $dd = date('d');
      $ms = date('ms');
      $imageName = $na."-" .$dd."-" .$ms."-". $imgName;
      
      move_uploaded_file($im['tmp_name'], "../Image/CategoryImages/".$imageName);
      $query = "INSERT INTO `category`(`catName`,`catImage`) VALUES ('$na','$imageName')";
      $res=mysqli_query($con,$query);

      if ($res) {
        echo "<script>location.assign('showCat.php')</script>";
      }
      else
      {
        echo "<script>alert('Try...Again')</script>";
      }




    }
    ?>