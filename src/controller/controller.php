<?php
require_once("../database/database.php");

$db = new Database();

// Get all categories
$categories = $db->getCategories();

// If category is selected
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : null;

if ($selectedCategory === "all") {
    $products = $db->getProducts(); // get all products
} elseif ($selectedCategory) {
    $products = $db->getProductsByCategory($selectedCategory);
} else {
    $products = null;
}
?>