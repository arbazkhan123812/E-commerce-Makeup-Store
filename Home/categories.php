    <!-- Start Categories  -->
    <?php include('../Database/connection.php');

   
  ?>


<style>

    .fixed-size {
        width: 100%; /* ensures it spans the container */
        height: 200px; /* fixed height */
        object-fit: cover; /* fits image within width and height without distortion */
    }
    
</style>

<div class="categories-shop">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM `category`";
            $res = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($res))
            { ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid fixed-size" src="../Image/CategoryImages/<?php echo $row['catImage'] ?>" />
                        <a class="btn hvr-hover" href="#"><?php echo $row['catName'] ?></a>
                    </div>
                </div>  
            <?php } ?>
        </div>
    </div>
</div>
    <!-- End Categories -->