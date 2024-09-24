<?php
// This file includes the necessary product-related functions

// Fetch product data from the database and display it
function getProducts() {
    global $con;

    // Updated query to fetch product details, including the first product image and category name
    $query = "
        SELECT p.product_name, p.product_price, p.product_image1, c.category_name 
        FROM product p
        JOIN category c ON p.category_id = c.category_id
        ORDER BY p.date_added DESC
        LIMIT 5";
    $result = mysqli_query($con, $query);

    // Loop through results and generate HTML output for each product
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="product-column">
            <article class="product-card">
                <!-- Display product image -->
                <img loading="lazy" src="' . htmlspecialchars('/petrawebsite/images/' . basename($row['product_image1'])) . '" class="product-image" alt="' . htmlspecialchars($row['product_name']) . '" />      
                <div class="product-details">
                    <!-- Display product name and category -->
                    <div class="product-info">
                        <h2 class="product-name">' . htmlspecialchars($row['product_name']) . '</h2>
                        <p class="product-type">' . htmlspecialchars($row['category_name']) . '</p>
                    </div>
                    
                    <!-- Display product price -->
                    <p class="product-price">₹' . number_format($row['product_price'], 2) . '</p>
                </div>
            </article>
        </div>';
    }
}

// Function to add a new product to the database
// Enable detailed error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

function addProduct() {
    global $con;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
            $seller_id = mysqli_real_escape_string($con, $_POST['seller_id']);
            $category_id = mysqli_real_escape_string($con, $_POST['category_id']);
            $description = mysqli_real_escape_string($con, $_POST['description']);
            $product_price = (int)$_POST['product_price'];

            // Handle file uploads
            $product_image1 = uploadImage($_FILES['product_image1']);
            $product_image2 = uploadImage($_FILES['product_image2']);
            $product_image3 = uploadImage($_FILES['product_image3']);

            if (!$product_image1) {
                throw new Exception("Product image 1 upload failed.");
            }

            // Insert product into the database
            $query = "
                INSERT INTO product (product_name, seller_id, category_id, description, product_image1, product_image2, product_image3, date_added, stock_no, product_price) 
                VALUES ('$product_name', '$seller_id', '$category_id', '$description', '$product_image1', '$product_image2', '$product_image3', NOW(), 0, '$product_price')
            ";

            if (!mysqli_query($con, $query)) {
                throw new Exception("Error executing query: " . mysqli_error($con));
            }

            // If the product is added successfully, return success message
            echo '<script>alert("Product added successfully!");</script>';
        } catch (Exception $e) {
            // If any error occurs, return the error message
            $error_message = "Error occurred: " . $e->getMessage() . " on line " . $e->getLine();
            echo '<script>alert("' . addslashes($error_message) . '");</script>';
        }
    }
}

// Function to handle image uploads
function uploadImage($file) {
    if ($file['size'] > 0) {
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/petrawebsite/images/"; // Use absolute path
        $target_file = $target_dir . basename($file["name"]);

        // Move the uploaded file
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            throw new Exception("Error uploading image: " . $file['name']);
        }
    } else {
        return null; // Return null if no file is uploaded
    }
}
?>
