<?php require_once("../Database/connection.php")?> 

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
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
</head>
<?php include_once("sidebar.php")?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Products</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Add Products</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row g-4">
              <!-- Basic Form-->
              <div class="col-sm-12 col-xl-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Add Product</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                  <div class="block-body">


                  <form method="post" enctype="multipart/form-data">

                  <div class="form-group">
                        <label class="form-control-label">Product Name</label>
                        <input type="text" name="pname"  class="form-control">
                  </div>
                  <div class="form-group">
                        <label class="form-control-label">Product Quantity</label>
                        <input type="number" min="1" name="pqty"  class="form-control">
                  </div>
                  <div class="form-group">
                        <label class="form-control-label">Product Price</label>
                        <input type="text" name="pprice"  class="form-control">
                  </div>
              

                  <div class="mb-3">       
                        <label for="exampleInputPassword1" class="form-label">Product Image</label>
                        <input class="form-control bg-dark" type="file" name="pimage">
                  </div>

                  <div class="form-group">
                        <label class="form-control-label">Product Details</label>
                        <input type="text" name="pdet"  class="form-control">
                  </div>
                  <div class="form-group">
                        <label class="form-control-label">Select Category</label>
                        <select name="catid" class="form-control">
                          <option>Select Category</option>
                          <?php 
                            $query = "call select_category()";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_array($res))
                            { ?>

                              <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>

                            <?php }
                            $res->close();
                            $con->next_result();
                          ?>
                        </select>
                  </div>
              

                      <div class="form-group">       
                        <button type="submit" class="btn btn-primary" name="saveData">Add Category</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              

              <?php 
              if(isset($_POST['saveData']))
              {
                $na = $_POST['pname'];
                $pq = $_POST['pqty'];
                $pp = $_POST['pprice'];
                $img = $_FILES['pimage'];
                $pdet = $_POST['pdet'];
                $cid = $_POST['catid'];

                $fileExten = pathinfo($img['name'],PATHINFO_EXTENSION);
                $fileName = bin2hex(random_bytes(8));
                $imageName = $fileName.".".$fileExten;

                move_uploaded_file($img['tmp_name'], "../Image/ProductImages/".$imageName);
                $query = "call save_product('$na','$pq','$pp','$imageName','$pdet','$cid')";
                $res = mysqli_query($con,$query);
          
                if ($res) {
                  echo "<script>location.assign('showProduct.php')</script>";
                }
                else
                {
                  echo "<script>alert('Try...Again')</script>";
                }
          

              }
              ?>
 <!-- JavaScript files-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
