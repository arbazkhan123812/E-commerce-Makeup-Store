<?php
include('../Database/connection.php');
session_start();
include('header.php');
?>

<div class="alert alert-success" role="alert">
  Shopping Successfull
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center mb-4">Checkout Form</h3>
            <div class="card shadow">
                <div class="card-body p-4">
                    <form action="checkout.php" method="post">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Your Name</label>
                            <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Your Email</label>
                            <input type="email" name="Email" class="form-control" id="Email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone</label>
                            <input type="number" name="Phone" class="form-control" id="Phone" placeholder="Your Phone">
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <textarea name="Address" class="form-control" id="Address" rows="3" placeholder="Your Address" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="checkout" class="btn btn-success">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional if you need JavaScript functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php

if(isset($_POST['checkout']) && (isset($_SESSION['carts']) && !empty($_SESSION['carts']))){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $address = $_POST['Address'];

    // Insert the customer information
    $customerQuery = "INSERT INTO customers (Name, Email, Phone, Address) VALUES ('$name', '$email', '$phone','$address')";
    $customerRes = mysqli_query($con, $customerQuery);

    $totalprice = 0;
    foreach(($_SESSION['carts']) as $data){
        $totalprice += $data['price']* $data['qty'];
    }
    $customer_id = mysqli_insert_id($con);

    $query = "INSERT INTO `orders`( `Total_Amount`,`customer_id`, `Created_at`) VALUES ('$totalprice','$customer_id',NOW())";
    $res = mysqli_query($con,$query);

    $orderid = mysqli_insert_id($con);

    foreach($_SESSION['carts'] as $data){
    
        $p_id = $data['id'];
        $na = $data['name'];
        $pp = $data['price'];
        $qt = $data['qty'];

        $addquery = "INSERT INTO `order_item`(`orderid`, `productid`, `productname`, `productprice`, `productqty`) VALUES ('$orderid','$p_id','$na','$pp','$qt')";
    
        $res1 = mysqli_query($con,$addquery);

        $deleteafter= "UPDATE `products` SET `Pro_Qty`= Pro_Qty -'$qt' WHERE `Pro_Id` = '$p_id'";
        $res = mysqli_query($con,$deleteafter);
    }
    unset($_SESSION['cart']);
    session_destroy();
    // echo "<script>location.assign('shop.php')</script>";


    
  
    
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>