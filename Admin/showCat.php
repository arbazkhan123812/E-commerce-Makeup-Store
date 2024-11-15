<?php require_once("../Database/connection.php")?>  

<!DOCTYPE html>
<html>
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
  </head>
  <header>
  <?php include("sidebar.php") ?>

  
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Tables            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Show Category</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cat ID</th>
                          <th>Cat Name</th>
                          <th>Cat Image</th>
                          <th>Edit category</th>
                          <th>Delete category</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
    $query = "SELECT * FROM `category`";
    $res= mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($res))
    { ?>
      
   
                        <tr>
                          <td><?php echo $row[0]?></td>
                          <td><?php echo $row[1]?></td>
                          <td><img src="../Image/CategoryImages/<?php echo $row[2]?>" height="100" width="100"></td>
                          <td><a href="editCat.php?Id=<?php echo $row[0]?>" class="btn btn-warning">Edit</a></td>
                          <td><a href="deleteCat.php?Id=<?php echo $row[0]?>" class="btn btn-info">Delete</a></td>
                        </tr>

                        <?php
    }
  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
  </div>
  </header>
