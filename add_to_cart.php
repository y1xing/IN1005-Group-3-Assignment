<?php
session_start();

// Retrieve the product ID from the AJAX request
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];



// Store the product information in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


// Initialize a all product array
$products = array();

// Get the products from the database
include "helper/crud.php";

// Connect to database
$conn = db_init();



if ($conn->connect_error) {
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
    echo "<h1>Error</h1>";
} else {
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?"); // Fixed the SQL query

    $stmt->bind_param("s", $product_id);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $product = array(
            "id" => $row['product_id'],
            "name" => $row['name'],
            "price" => $row['price'],
            "description" => $row['description'],
            "image" => $row['picture_path'],
            "type" => $row['type'],
            "brand" => $row['brand'],
            "rating" => $row['rating'],
            "quantity" => $quantity
        );


    } else {
        $errorMsg = "Unable to find any products";
        $success = false;
    }

    $stmt->close();
}

$conn->close();


// Check if the product is already in the cart and update the quantityy
foreach ($_SESSION['cart'] as &$item) {
    echo $item['name'];
    if ($item['id'] == $product_id) {
        $item['quantity'] += $quantity;
        echo 'Product quantity updated!';
        exit;
    }
}


// Add the product to the cart
array_push($_SESSION['cart'], $product);


echo 'Product added to cart!!QQQ';

?>
