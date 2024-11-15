
<?php
   include('../Database/connection.php');
  
 

include('header.php');
?>
<style>
    .fixed-size{
        height: 300px;
        width: 100px
    }
</style>
<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
            <?php 
                $id = $_GET["id"];
                $query = "SELECT * FROM `products` WHERE Pro_Id ='$id'";
                $res = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($res);
                
             ?>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100 fixed-size border" src="../Image/ProductImages/<?php echo $row['Pro_Image']?>" alt="First slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                    </div>
                </div>
                
    <div class="col-xl-7 col-lg-7 col-md-6">
    <div class="single-product-details">
        <h2><?php echo $row['Pro_Name']; ?></h2>
        <h5><?php echo $row['Pro_Price']; ?> PKR</h5>
        <p class="available-stock">
            <span>Available Stock: <?php echo $row['Pro_Qty']; ?></span>
        </p>

        <h4>Short Description:</h4>
        <p><?php echo $row['Pro_Details']; ?></p>

        <div class="col-xl-7 col-lg-7 col-md-6">
            <form action="addtocart.php" method="post">
            <input class="form-control" type="hidden" name="id" value="<?php echo $row['Pro_Id']; ?>">
            <ul>
                <li>
                    <div class="form-group quantity-box">
                        <label class="control-label">Quantity</label>
                        <!-- Quantity input field -->
                        <input class="form-control" name="quantity" value="1" min="1" max="<?php echo $row['Pro_Qty']; ?>" type="number">
                    </div>
                </li>
            </ul>
            <button type="submit" class="btn btn-info">Add To Cart</button>
            </form>
        </div>

       
    </div>


                                
                    </div>
                </div>
                    </div>
                </div>
            </div>

            
           

        </div>
    </div>
<?php
include('footer.php');
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function addToCart(productId, quantity) {
        $.ajax({
            url: 'add_to_cart.php',  // Your PHP file to handle adding to cart
            type: 'POST',
            data: {
                id: productId,
                qty: quantity
            },
            success: function(response) {
                alert('Your item has been added to the cart!');
            },
            error: function() {
                alert('Error adding item to cart. Please try again.');
            }
        });
    }
</script>

