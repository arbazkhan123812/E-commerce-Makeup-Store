<?php
   include('../Database/connection.php');
  
   session_start();

   
   include('header.php');
?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                    <div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $finalTotal = 0; // Variable to hold the total price of all items

                            foreach($_SESSION['carts'] as $data) {
                                $itemTotal = $data['price'] * $data['qty']; // Calculate total for each item
                                $finalTotal += $itemTotal; // Add item total to final total
                            ?>

                            <tr>
                                <td class="price-pr">
                                <p><?php echo $data['id']?></p>
                                </td>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="../Image/ProductImages/<?php echo $data['image']?>" height="100px" width="100px" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#"><?php echo $data['name']?></a>
                                </td>
                                <td class="price-pr">
                                    <p><?php echo $data['price']?></p>
                                </td>
                                <td class="quantity-box">
                                    <input type="number" value="<?php echo $data['qty']?>" class="c-input-text qty text">
                                </td>
                                <td class="total-pr">
                                    <p><?php echo $itemTotal; ?></p> <!-- Display item total -->
                                </td>
                                <td class="remove-pr">
                                <a href="remove_from_cart.php?id=<?php echo $data['id']; ?>">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>

                            </tr>

                            <?php } ?>

                            <!-- Row for Final Total -->
                            <tr>
                                <td colspan="4" class="text-right"><strong>Final Total:</strong></td>
                                <td class="total-pr">
                                    <p><?php echo $finalTotal; ?></p> <!-- Display final total -->
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>

            

            <div class="row my-5">
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

<?php
include('footer.php');
?>