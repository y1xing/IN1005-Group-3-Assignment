<?php

// Initialize a all product array
$products = array();



// Get the products from the database
$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if ($conn->connect_error) {
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
} else {
    $stmt = $conn->prepare("SELECT * FROM products");

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // echo out the products
        while ($row = $result->fetch_assoc()) {
            // Store the product data in an array
            $individual_product = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "price" => $row['price'],
                "description" => $row['description'],
                "image" => $row['image'],
                "type" => $row['type'],
                "brand" => $row['brand'],
                "rating" => $row['rating']
            );

            // Append the product to the products array
            array_push($products, $individual_product);

        }


    } else {
        $errorMsg = "Unable to find any products";
        $success = false;
    }

    $stmt->close();
}

$conn->close();

$output = "";

$color = array("light-blue", "light-red", "light-orange", "light-green", "light-orange", "light-green", "light-red", "light-blue");
$images = array("cube1.png", "cube2.png", "cube3.png", "cube4.png", "cube1.png", "cube2.png", "cube4.png", "cube4.png");

$output .= "<div class='swiper-wrapper row flex-nowrap flex-xl-wrap justify-center'>";

foreach($products as $product) {
    $output .=
    "
    <div class='swiper-slide col-xl-3 col-auto'>
    <div class='slide_card " . $color[$product['product_id'] - 1] . "'>
        <img src='./images/products/" . $images[1] . "' alt='cube image' class='store-img' />
    </div>
    <div class='product-info-container'>
        <div class='product-info'>
            <h5>" . $product['name'] . "</h5>
            <h3>$" . $product['price'] . "</h3>
        </div>
        <p>" . $product['description'] . "</p>
        <div class='stars-container'>
            <svg class='star-svg' width='32' height='32' viewBox='0 0 32 32'>
                <polygon fill='#13A814' points='16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485' />
            </svg>
            <svg class='star-svg' width='32' height='32' viewBox='0 0 32 32'>
                <polygon fill='#13A814' points='16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485' />
            </svg>
            <svg class='star-svg' width='32' height='32' viewBox='0 0 32 32'>
                <polygon fill='#13A814' points='16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485' />
            </svg>
            <svg class='star-svg' width='32' height='32' viewBox='0 0 32 32'>
                <polygon fill='#13A814' points='16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485' />
            </svg>
            <svg class='star-svg' width='32' height='32' viewBox='0 0 32 32'>
                <polygon fill='#13A814' points='16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485' />
            </svg>
        </div>
        <button>Add to cart</button>
    </div>
    </div>
    ";

}

$output .= "</div>";


echo $output;



?>


