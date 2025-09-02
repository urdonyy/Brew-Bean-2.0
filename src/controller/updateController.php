<?php

require_once("../database/database.php");
require_once ("../database/crud.php");

$db = new Database();
$crud = new crud();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $original_product = $_GET['product']; // keep track of original
    $result = $crud->updateProduct($_POST, $original_product);

    if ($result) {
        echo "<script>alert('Product added successfully!'); window.location.href='inventory.php'</script>";

        exit;
    } else {
        echo "<p style='color:red;'>Failed to update product!</p>";
    }
}

// Fetch product for prefilling the form
$product = $_GET["product"];
$sql = "SELECT * FROM products WHERE product = ?";
$stmt = $db->conn->prepare($sql);
$stmt->bind_param("s", $product);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
