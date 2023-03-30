<?php


function getProducts()
{
    // Get products from database and return the products as an array
    include "helper/crud.php";
    $conn = db_init();

    $products = array();

    // Check if connection is successful
    if ($conn->connect_error) {
        echo "<h1>Error</h1>";
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
                    "id" => $row['product_id'],
                    "name" => $row['name'],
                    "price" => $row['price'],
                    "description" => $row['description'],
                    "image" => $row['picture_path'],
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

    return $products;
}