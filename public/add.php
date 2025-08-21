<?php
require_once ("../database/database.php");
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $db->addProduct($_POST);
    if ($result) {
        header("Location: inventory.php?success=1");
        exit;
    } else {
        $error = "Failed to add product. Please check your input.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="product_name" placeholder="Product Name" required>
        <input type="text" name="image_filename" placeholder="Image Filename" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="text" name="category" placeholder="Category" required>
        <button type="submit">Add Product</button>
    </form>
    <a href="inventory.php">Back to Inventory</a>
</body>

</html>