<?php
require_once("../src/controller/controller.php");
require_once("../database/crud.php");

// Check if a product name was sent
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Create a new Database object
    $db = new crud();

    // Call the deleteProduct function
    if ($db->deleteProduct($productId)) {
        // Redirect back to the inventory page with a success message
        header("Location: inventory.php?status=deleted");
        exit();
    } else {
        // Redirect back with an error message
        header("Location: inventory.php?status=error");
        exit();
    }
} else {
    // If no product name was provided, redirect back
    header("Location: inventory.php");
    exit();
}
?>