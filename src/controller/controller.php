<?php
require_once("../database/database.php");
require_once("../database/cart.php");

$db = new Database();
$cart = new cart($db->conn);

// Get categories
$categories = $cart->getCategories();

// Get products based on selected category
if (isset($_GET['category']) && $_GET['category'] !== 'all') {
    $products = $cart->getProductsByCategory($_GET['category']);
} else {
    $products = $cart->getProducts(); // all products
}
