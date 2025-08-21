<?php

require_once ("../database/database.php");

$db = new Database();
$products = $db->displayProducts();
?>

<a href="add.php"><button>Add New Product</button></a>
<table border=1>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['product_name']) ?></td>
            <td><?= htmlspecialchars($product['category']) ?></td>
            <td><?= htmlspecialchars($product['price']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>