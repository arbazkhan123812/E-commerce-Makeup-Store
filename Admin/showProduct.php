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
</head>
<?php include("sidebar.php") ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Products</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>View Products</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product Id</th>
                          <th>Product Name</th>
                          <th>Product Quantity</th>
                          <th>Product Price</th>
                          <th>Product Image</th>
                          <th>Product Details</th>
                          <th> Edit Product Details</th>
                          <th> Delete Product Details</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            $query = "call get_all_product()";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            { ?>

                        <tr>
                          <td><?php echo $row['Pro_Id']?></td>
                          <td><?php echo $row['Pro_Name']?></td>
                          <td><?php echo $row['Pro_Qty']?></td>
                          <td><?php echo $row['Pro_Price']?></td>
                          <td><img src="../Image/ProductImages/<?php echo $row['Pro_Image']?>" height="100px" width="100px"></td>
                          <td><?php echo $row['Pro_Details']?></td>
                          <td><a href="editProduct.php?id=<?php echo $row['Pro_Id']?>" class="btn btn-success">Edit</a></td>
                          <td><a href="deleteProduct.php?id=<?php echo $row['Pro_Id']?>" class="btn btn-warning">Delete</a></td>
                        </tr> 

                            <?php }
                        ?>

                       
                       
                    
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

  

