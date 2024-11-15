<?php require_once("../Database/connection.php");
  $getid = $_GET["id"];
 

  $query = "SELECT * FROM `products` WHERE Pro_Id='$getid'";
  $res = mysqli_query($con,$query);
  $row=mysqli_fetch_array($res); 

  $folder_path = "../Image/ProductImages/".$row['Pro_Image'];
  if(file_exists($folder_path))
  {
    $query1= "call delete_data($getid)";
    $res = mysqli_query($con,$query1);  
    unlink($folder_path);
    echo "<script>alert('Data & Image Delete...')</script>";
    echo "<script>location.assign('showProduct.php')</script>";

  }
  else
  {
    echo "<script>alert('try Again.')</script>";

  }

?>  
   
