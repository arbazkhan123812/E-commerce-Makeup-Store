<?php require_once("../Database/connection.php");
  $getid = $_GET["Id"];
 

  $query = "SELECT * FROM `category` WHERE catId='$getid'";
  $res = mysqli_query($con,$query);
  $row=mysqli_fetch_array($res); 

  $folder_path = "../Image/CategoryImages/".$row['catImage'];
  if(file_exists($folder_path))
  {
    $query1= "DELETE FROM `category` WHERE catId='$getid'";
    $res = mysqli_query($con,$query1);  
    unlink($folder_path);
    echo "<script>alert('Data & Image Delete...')</script>";
    echo "<script>location.assign('showCat.php')</script>";

  }
  else
  {
    echo "<script>alert('try Again.')</script>";

  }

?>  
   
