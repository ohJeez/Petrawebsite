<?php
// Include the database connection and function files
include '../connect.php';
include '../common-functions/functions.php';

// Call the addProduct function to handle form submission
addProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #008994;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #006972;
        }
    </style>
</head>
<body>

<h2>Add a New Product</h2>
<form action="add_products.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required>

    <label for="seller_id">Seller ID:</label>
    <input type="text" id="seller_id" name="seller_id" required>

    <label for="category_id">Category ID:</label>
    <input type="text" id="category_id" name="category_id" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="product_price">Product Price:</label>
    <input type="number" id="product_price" name="product_price" min="0" required>

    <label for="product_image1">Product Image 1:</label>
    <input type="file" id="product_image1" name="product_image1" accept="image/*" required>

    <label for="product_image2">Product Image 2 (optional):</label>
    <input type="file" id="product_image2" name="product_image2" accept="image/*">

    <label for="product_image3">Product Image 3 (optional):</label>
    <input type="file" id="product_image3" name="product_image3" accept="image/*">

    <button type="submit">Add Product</button>
</form>

<script>
    function validateForm() {
        // Example validation: Check if all required fields are filled
        const productName = document.getElementById('product_name').value;
        const sellerID = document.getElementById('seller_id').value;
        const categoryID = document.getElementById('category_id').value;
        const description = document.getElementById('description').value;
        const productPrice = document.getElementById('product_price').value;

        if (!productName || !sellerID || !categoryID || !description || !productPrice) {
            alert('Please fill in all required fields.');
            return false;
        }
        return true;
    }
</script>

</body>
</html>
