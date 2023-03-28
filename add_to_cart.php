<?php
session_start();

// Retrieve the product ID from the AJAX request
$product_id = $_POST['product_id'];



// Store the product information in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


// convert cart_item to array
//$cart_item = json_decode($cart_item);

// Get the product information from the database with the product ID
// Initialize a all product array
$products = array();

// Get the products from the database
$config = parse_ini_file('../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



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
            "rating" => $row['rating']
        );


    } else {
        $errorMsg = "Unable to find any products";
        $success = false;
    }

    $stmt->close();
}

$conn->close();





//$product = array(
//    'id' => $cart_item->id,
//    'name' => $cart_item->name,
//    'price' => $cart_item->price,
//    'quantity' => $cart_item->quantity,
//    'image' => $cart_item->image,
//    'color' => $cart_item->color,
//    'test' => 'test'
//);



// Add the product to the cart
array_push($_SESSION['cart'], $product);


echo 'Product added to cart!';

?>
