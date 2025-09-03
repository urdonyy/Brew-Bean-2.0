<?php
$currentPage = basename($_SERVER['PHP_SELF']);

require_once("../database/database.php");
require_once("../database/crud.php");

$crud = new crud();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $postData = [
        'product' => $_POST['product'] ?? '',
        'image_filename' => $_POST['image_filename'] ?? '',
        'price' => $_POST['price'] ?? '',
        'quantity' => $_POST['quantity'] ?? '',
        'categories_id' => $_POST['category'] ?? ''   
    ];
    

   
    if ($crud->addProduct($postData)) {
        echo "<script>alert('Product added successfully!'); window.location.href='inventory.php'</script>";
    } else {
        echo "<script>alert('Error adding product. Please ensure all fields are filled correctly.');</script>";
    }
}
?>