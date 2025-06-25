<style>

.fixed-size {
    width: 100%; /* ensures it spans the container */
    height: 200px; /* fixed height */
    object-fit: cover; /* fits image within width and height without distortion */
}

</style>
   <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
   
</div>

<div class="row special-list">
    <?php 
    // Mapping Cat_Name values to category classes
    $categoryMap = [
        5 => 'cosmetic',
        4 => 'jewelry',
        // Add other categories here if needed
    ];
    
    $query = "SELECT * FROM `products`";
    $res = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        // Use the mapped category class if available, otherwise use 'uncategorized'
        $categoryClass = isset($categoryMap[$row['Cat_Name']]) ? $categoryMap[$row['Cat_Name']] : 'uncategorized';
    ?>
        <div class="col-lg-3 col-md-6 special-grid best-seller <?php echo $categoryClass; ?>">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    <img class="img-fluid fixed-size" src="../Image/ProductImages/<?php echo $row['Pro_Image']; ?>" />
                    <div class="mask-icon">
                        <a class="cart" href="shop.php">View Products</a>
                    </div>
                </div>
                <div class="why-text">
                    <h4><?php echo $row['Pro_Name']; ?></h4>
                    <h5><?php echo $row['Pro_Price'] . " PKR"; ?></h5>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<!-- jQuery Script for Filtering -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.filter-button-group button').on('click', function() {
        // Remove active class from all buttons and add to the clicked one
        $('.filter-button-group button').removeClass('active');
        $(this).addClass('active');

        // Get the filter value
        let filterValue = $(this).attr('data-filter');

        if (filterValue === '*') {
            $('.special-list .col-lg-3').show(); // Show all products
        } else {
            $('.special-list .col-lg-3').hide(); // Hide all products
            $(filterValue).show(); // Show only filtered products
        }
    });
});
</script>
</script>


         
            </div>
        </div>
    </div>
