<?php
$currentPage = basename($_SERVER['PHP_SELF']);

require_once("../src/controller/controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brew & Bean 2.0</title>
    <link rel="stylesheet" href="../src/styles/global.css">
</head>

<body>
    <?php include "./partials/nav.php" ?>

    <!-- <div class="container"> -->
        <!-- inventory view partition -->
        <!-- <div class="form-box active" id="inventory-view"> -->
            <!-- href add onclick="showForm('add-form')" -->
            <!-- <a href="#" onclick="showForm('add-form')">+ Add Item</a>
            <br> -->
            <!-- href update onclick="showForm('update-form')" -->
            <!-- <a href="#" onclick="showForm('update-form')">Update</a>
            <br> -->
            <!-- INVENTORY VIEW -->
        <!-- </div> -->
    <!--</div> container closing-->

</body>

</html>