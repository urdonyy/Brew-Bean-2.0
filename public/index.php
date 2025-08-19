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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Menu</title>
    <link rel="stylesheet" href="../src/styles/addCart.css">
</head>
<body>

<h2>Product Categories</h2>

<!-- "All Products" link -->
<a class="header" href="?category=all">All Products</a>

<?php while($cat = $categories->fetch_assoc()): ?>
    <a class="header" href="?category=<?php echo urlencode($cat['product_id']); ?>">
        <?php echo $cat['product_id']; ?>
    </a>
<?php endwhile; ?>

<?php if ($products): ?>
    <h3>
        <?php 
            echo ($selectedCategory === "all") 
                ? "All Products" 
                : htmlspecialchars($selectedCategory) . " Products"; 
        ?>
    </h3>
<!-- Product Cards -->
    <div class="card-container">
        <?php while($prod = $products->fetch_assoc()): ?>
            <div class="card">
                <h4><?php echo htmlspecialchars($prod['product_name']); ?></h4>
                <p>₱<?php echo number_format($prod['price'], 2); ?></p>
                <!-- img src="public/$prod['image_name'] == loy.jpg" -->
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<!-- Cart section -->


</body>
</html>
