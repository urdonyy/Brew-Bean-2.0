<?php

require_once ("../database/database.php");

$db = new Database();
$products = $db->displayProducts();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brew & Bean 2.0</title>
    <link rel="stylesheet" href="../src/styles/global.css">
</head>

<body>
    <!-- <?php
    include "./partials/nav.php"
    ?> -->

    <a href="add.php"><button>Add New Product</button></a>
    <div
        style="margin-left:340px; margin-top:40px; max-width:800px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,0.08); border-radius:10px; padding:24px;">
        <table border=1 style="width:100%; border-collapse:collapse;">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['product_name']) ?></td>
                    <td><?= htmlspecialchars($product['category']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td> edit </td>
                    <td> delete</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>