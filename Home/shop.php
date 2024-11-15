
<?php
   include('../Database/connection.php');
  
  
include('header.php');
?>
<style>
    .fixed-size {
    width: 100%; /* ensures it spans the container */
    height: 200px; /* fixed height */
    object-fit: cover; /* fits image within width and height without distortion */
}
</style>
<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="" method="GET">
                            <input class="form-control" placeholder="Search here..." type="text" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <?php 
                                    // Check if a search query is provided
                                    $searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

                                    // Adjust the SQL query based on the search term
                                    $query = "SELECT * FROM `products`";
                                    if ($searchTerm != '') {
                                        $query .= " WHERE `Pro_Name` LIKE '%$searchTerm%'";
                                    }

                                    // Execute the query and check results
                                    $res = mysqli_query($con, $query);

                                    if (mysqli_num_rows($res) > 0) {
                                        while($row = mysqli_fetch_assoc($res)) { ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="../Image/ProductImages/<?php echo $row['Pro_Image'] ?>" class="img-fluid fixed-size" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="details.php?id=<?php echo $row['Pro_Id']?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a class="cart" href="details.php?id=<?php echo $row['Pro_Id']?>">Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4><?php echo $row['Pro_Name'] ?></h4>
                                                        <h5><?php echo $row['Pro_Price'] . " PKR" ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } 
                                    } else { 
                                        // Display a message if no products are found
                                        echo "<div class='col-12'><p>No products found matching your search.</p></div>";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
<?php
include('footer.php');
?>
