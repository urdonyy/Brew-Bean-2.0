<?php

require_once("../database/database.php");
require_once ("../database/crud.php");

$db = new Database();
$crud = new crud();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $original_product_name = $_GET['product_name']; // keep track of original
    $result = $crud->updateProduct($_POST, $original_product_name);

    if ($result) {
        echo "<script>alert('Product added successfully!'); window.location.href='inventory.php'</script>";

        exit;
    } else {
        echo "<p style='color:red;'>Failed to update product!</p>";
    }
}

// Fetch product for prefilling the form
$product_name = $_GET["product_name"];
$sql = "SELECT * FROM products WHERE product_name = ?";
$stmt = $db->conn->prepare($sql);
$stmt->bind_param("s", $product_name);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
