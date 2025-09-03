<?php
require_once("../database/database.php");
require_once("../database/cart.php");

$db = new Database();
$cart = new cart($db->conn);

// Get categories
$categories = $cart->getCategories();

// Get products based on selected category
if (isset($_GET['category']) && $_GET['category'] !== 'all') {
    $categoryId = intval($_GET['category']); // convert to int for security
    $products = $cart->getProductsByCategory($categoryId);
} else {
    $products = $cart->getProducts(); // all products
}
