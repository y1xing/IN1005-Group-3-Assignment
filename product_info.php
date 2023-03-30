<?php

// Get id from url
if(isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
    $id = 1;
}

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

    $stmt->bind_param("s", $id);

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

        );


    } else {
        $errorMsg = "Unable to find any products";
        $success = false;
    }

    $stmt->close();
}

$conn->close();



?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">

<head>
    <!--jQuery scriptTest-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/main.js">
    </script>
    <script defer src="js/product_info.js">

    </script>
    <script defer src="js/nav.js">


    </script>

    <script defer src="js/toast.js"></script>
    <title>Cubeworld</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/product_info.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" href="css/toast.css" type="text/css">

</head>

<body>
<?php
$color = "blue";

include "components/navWhite.inc.php";
?>

<main id="cart" >
    <!-- contain the entire shopping cart -->
    <div class="product-info-container">
        <?php
        $toastMessage = "Product added to cart";
        // display toast message
        include "helper/toast.php";

        ?>

        <!-- contain the left side of the shopping cart -->
        <div class="product-info-container-left">
            <!-- contain the list of products added to the cart -->
            <div class="info-img">
                <!-- product info image -->
                <img src=<?php echo $product['image'] ?> alt="cube image"/>
            </div>
            <div class="info-img-small-container">
<!--            <div class="info-img-small-container">-->
                <!-- 4 small images of the product -->
                <div class="info-img-small">
                    <img src=<?php echo $product['image'] ?> alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src=<?php echo $product['image'] ?> alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src=<?php echo $product['image'] ?> alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src=<?php echo $product['image'] ?> alt="cube image"/>
                </div>
            </div>
<!--            </div>-->
        </div>
        <!-- contain the right side of the shopping cart -->
        <div class="product-info-container-right">
            <div class="info-container">
                <h2><?php echo $product['name'] ?></h2>
                <p><?php echo $product['description'] ?></p>
                <!-- star rating -->
                <div class="stars-container">
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                </div>
                <h1>$<?php echo $product['price'] ?></h1>
                <!-- payment details and payment type -->
                <hr>
                <div>
                    <h2 class="payment-header">Choose quantity</h2>
                    <!-- quantity add minus, havent add design -->
                    <div class="input-group">
                        <button class="input-button" id="decrement"><i style="color: black;" class="fas fa-minus"></i></button>
                        <input  type="number" id="input" readonly value="1" min="1" max="100">
                        <button class="input-button" id="increment"><i style="color: black;" class="fas fa-plus"></i></button>
                    </div>

                    <div class="button-container">
                        <button
                                data-product-id="<?php echo $id ?>"
                                data-product-name="<?php echo $product['name'] ?>"
                                data-product-price="<?php echo $product['price'] ?>"
                                data-product-image="<?php echo $product['image'] ?>"
                                data-product-color="<?php echo $product['color'] ?>"
                                class="buy-now" id="buy-now">Buy now</button>
                         <button
                                 data-product-id="<?php echo $id ?>"
                                 data-product-name="<?php echo $product['name'] ?>"
                                 data-product-price="<?php echo $product['price'] ?>"
                                 data-product-image="<?php echo $product['image'] ?>"
                                 data-product-color="<?php echo $product['color'] ?>"
                                 class="open add-to-cart-button" id="add-to-cart">Add to cart</button>
                    </div>


                    <hr>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "footer.inc.php";
?>
</body>

</html>

<!<!-- hi there -->