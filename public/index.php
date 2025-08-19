<?php
require_once("../src/controller/controller.php");

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
    <a class="header" href="?category=<?php echo urlencode($cat['category']); ?>">
        <?php echo $cat['category']; ?>
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
            <img src="assets/images/<?php echo htmlspecialchars($prod['image_filename']); ?>" alt="picture"  width="150" height="150">
                <h4><?php echo htmlspecialchars($prod['product_name']); ?></h4>
                <p>₱<?php echo number_format($prod['price'], 2); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<!-- Cart section -->


</body>
</html>
