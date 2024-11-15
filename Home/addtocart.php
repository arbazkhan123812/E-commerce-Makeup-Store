<?php 
include_once('../Database/connection.php');


session_start();
 if(isset($_POST["id"]) && isset($_POST['quantity'])){
    $id = $_POST['id'];
    $p_qty =$_POST['quantity'];
    if($p_qty > 0){

        $p_id = intval(value:$_POST['id']);
        $p_qty = intval(value:$_POST['quantity']);
        $query = "SELECT * FROM `products` WHERE Pro_Id = '$p_id'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($res);



            $_SESSION['carts'][$p_id] =
            [
                'id' =>  $p_id,
                'name' =>  $row['Pro_Name'],
                'qty' =>    $p_qty,
                'price' =>  $row['Pro_Price'],
                'image' =>  $row['Pro_Image']
            ];
            echo "<script>alert('Product Added into Cart')</script>";
            header('location:shop.php');
      
        

    }else{
        echo "<script>alert('Item Out of Stock')</script>";

    }

 }


  ?>
  