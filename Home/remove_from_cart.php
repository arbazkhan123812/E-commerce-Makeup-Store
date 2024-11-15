<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['carts'])) {
    $id = $_GET['id'];

    // Loop through the cart to find the item with the matching ID
    foreach ($_SESSION['carts'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['carts'][$key]); // Remove the item
            break;
        }
    }

    // Reindex the array after removal
    $_SESSION['carts'] = array_values($_SESSION['carts']);
}

// Redirect back to the cart page
header("Location:cart.php");
exit;
?>
