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
    <link rel="stylesheet" href="../src/styles/updateForm.css">
</head>

<body>
    <?php include "./partials/nav.php" ?>

    <div class="container">
        <div class="form-box active" id="inventory-view">
            <!-- href add onclick="showForm('add-form')" -->
            <a href="#" onclick="showForm('add-form')">+ Add Item</a>
            <br>
            <!-- href update onclick="showForm('update-form')" -->
            <a href="#" onclick="showForm('update-form')">Update</a>
            <br>
            INVENTORY VIEW
        </div>

        <!-- dito mo ilalagay 'yung add form -->
        <div class="form-box" id="add-form">
            <a href="inventory.php" onclick="showForm('inventory-view')"><- Back</a>
            <br>
            ADD FORM
        </div>

        <!-- update form partition -->
        <div class="form-box" id="update-form">
            <div class="update-container">
                <a href="inventory.php" onclick="showForm('inventory-view')">Inventory > Update Item</a>

                <form action="" method="POST">
                    <h1>
                        Update Details
                    </h1>
                    <p>Update item details in your menu.</p>
                    <div class="inner-container">
                        <!-- left div part -->
                        <div class="left-div">
                            <div class="coffee-info">
                                <h2>Product Name & File Name</h2>
                                <label>Item Name</label>
                                <input type="text" name="item-name">
                                <label>File Name</label>
                                <input type="file" name="file-name">
                            </div>
                            <div class="coffee-category">
                                <h2>Category</h2>
                                <label>Item Category</label>
                                <select name="" id="">
                                    <option disabled selected>Coffee</option>
                                    <option>Hot Coffee</option>
                                    <option>Cold Coffee</option>
                                    <option>Non-Coffee</option>
                                </select>
                            </div>
                        </div>

                        <!-- right div part -->
                        <div class="right-div">
                            <div class="coffee-price">
                                <h2>Price</h2>
                                <label>Item Price</label>
                                
                                <input type="number">
                            </div>
                            <div class="coffee-quantity">
                                <h2>Stock Quantity</h2>
                                <label>Quantity</label>
                                <input type="number">
                            </div>
                            <div class="btns">
                                <button class="cancel" type="submit">Cancel</button>
                                <button class="confirm" type="submit">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div> <!--container form-box update-->


    </div> <!--container closing-->

    <script src="../src/js/index.js"></script>

</body>

</html>