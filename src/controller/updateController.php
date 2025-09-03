<?php

require_once("../database/database.php");
require_once ("../database/crud.php");

    $db = new Database();
    $crud = new crud();


$product_id = $_GET["id"] ?? null;

if ($product_id === null) {
    die("No product ID provided.");
}

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $db->conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $product = $stmt->get_result()->fetch_assoc();
    $stmt->close();

if (!$product) {
     die("Product not found.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $updated = $crud->updateProduct($_POST, $product_id);

    if ($updated) {
        // Redirect back to inventory page after success
        header("Location: inventory.php?msg=updated");
        exit;
    } else {
        echo "<p style='color:red'>Update failed. Please check your input.</p>";
    }

}
