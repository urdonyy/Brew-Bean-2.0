<?php
require_once("../src/controller/addController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/styles/global.css">
    <link rel="stylesheet" href="../src/styles/updateForm.css">
</head>
<body>
    <div class="container">
        <div class="add-container">
            <div class="backH">
                <a href="inventory.php" onclick="showForm('inventory-view')">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.6562 0C13.8252 0 14.9458 0.149414 16.0181 0.448242C17.0903 0.74707 18.1011 1.16895 19.0503 1.71387C19.9995 2.25879 20.8521 2.91797 21.6079 3.69141C22.3638 4.46484 23.0229 5.32178 23.5854 6.26221C24.1479 7.20264 24.5742 8.20898 24.8643 9.28125C25.1543 10.3535 25.3037 11.4785 25.3125 12.6562C25.3125 13.8252 25.1631 14.9458 24.8643 16.0181C24.5654 17.0903 24.1436 18.1011 23.5986 19.0503C23.0537 19.9995 22.3945 20.8521 21.6211 21.6079C20.8477 22.3638 19.9907 23.0229 19.0503 23.5854C18.1099 24.1479 17.1035 24.5742 16.0312 24.8643C14.959 25.1543 13.834 25.3037 12.6562 25.3125C11.4873 25.3125 10.3667 25.1631 9.29443 24.8643C8.22217 24.5654 7.21143 24.1436 6.26221 23.5986C5.31299 23.0537 4.46045 22.3945 3.70459 21.6211C2.94873 20.8477 2.28955 19.9907 1.72705 19.0503C1.16455 18.1099 0.738281 17.1035 0.448242 16.0312C0.158203 14.959 0.00878906 13.834 0 12.6562C0 11.4873 0.149414 10.3667 0.448242 9.29443C0.74707 8.22217 1.16895 7.21143 1.71387 6.26221C2.25879 5.31299 2.91797 4.46045 3.69141 3.70459C4.46484 2.94873 5.32178 2.28955 6.26221 1.72705C7.20264 1.16455 8.20898 0.738281 9.28125 0.448242C10.3535 0.158203 11.4785 0.00878906 12.6562 0ZM12.6562 23.625C13.667 23.625 14.6382 23.4932 15.5698 23.2295C16.5015 22.9658 17.3716 22.5967 18.1802 22.1221C18.9888 21.6475 19.7314 21.0762 20.4082 20.4082C21.085 19.7402 21.6562 19.002 22.1221 18.1934C22.5879 17.3848 22.957 16.5103 23.2295 15.5698C23.502 14.6294 23.6338 13.6582 23.625 12.6562C23.625 11.6455 23.4932 10.6743 23.2295 9.74268C22.9658 8.81104 22.5967 7.94092 22.1221 7.13232C21.6475 6.32373 21.0762 5.58105 20.4082 4.9043C19.7402 4.22754 19.002 3.65625 18.1934 3.19043C17.3848 2.72461 16.5103 2.35547 15.5698 2.08301C14.6294 1.81055 13.6582 1.67871 12.6562 1.6875C11.6455 1.6875 10.6743 1.81934 9.74268 2.08301C8.81104 2.34668 7.94092 2.71582 7.13232 3.19043C6.32373 3.66504 5.58105 4.23633 4.9043 4.9043C4.22754 5.57227 3.65625 6.31055 3.19043 7.11914C2.72461 7.92773 2.35547 8.80225 2.08301 9.74268C1.81055 10.6831 1.67871 11.6543 1.6875 12.6562C1.6875 13.667 1.81934 14.6382 2.08301 15.5698C2.34668 16.5015 2.71582 17.3716 3.19043 18.1802C3.66504 18.9888 4.23633 19.7314 4.9043 20.4082C5.57227 21.085 6.31055 21.6562 7.11914 22.1221C7.92773 22.5879 8.80225 22.957 9.74268 23.2295C10.6831 23.502 11.6543 23.6338 12.6562 23.625ZM9.58447 11.8125H18.5625V13.5H9.58447L13.2495 17.1123L12.063 18.3252L6.34131 12.6562L12.063 6.9873L13.2495 8.2002L9.58447 11.8125Z" />
                    </svg>
                </a>
                <h1>Inventory > Add Item</h1>
            </div>
            <form action="" method="POST">
                <h1>
                    Add New Item
                </h1>
                <p>Add new item to your menu.</p>
                <div class="inner-container">
                    <div class="left-div">
                        <div class="coffee-info">
                            <h2>Product Name & File Name</h2>
                            <label>Item Name</label>
                            <input type="text" name="product" required>
                            <label>File Name</label>
                            <input type="text" name="image_filename" required>
                        </div>
                        <div class="coffee-category">
                            <h2>Category</h2>
                            <label>Item Category</label>
                            <select name="category" required>
                                <option disabled selected>Coffee</option>
                                <option value="Hot Coffee">Hot Coffee</option>
                                <option value="Cold Coffee">Cold Coffee</option>
                                <option value="Non-Coffee">Non-Coffee</option>
                            </select>
                        </div>
                    </div>

                    <div class="right-div">
                        <div class="coffee-price">
                            <h2>Price</h2>
                            <label>Item Price</label>
                            <input type="number" name="price" step="0.01" required>
                        </div>
                        <div class="coffee-quantity">
                            <h2>Stock Quantity</h2>
                            <label>Quantity</label>
                            <input type="number" name="quantity" step="0.01" required>
                        </div>
                        <div class="btns">
                            <button class="cancel" type="button" onclick="window.location.href='inventory.php'">Cancel</button>
                            <button class="confirm" type="submit">Confirm</button>
                        </div>
                    </div> </div> </form> </div> </div>
    <script src="../src/js/index.js"></script>
</body>
</html>