<?php

require_once("../database/database.php");

class cart {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProducts() {                                                             
        return $this->conn->query("SELECT * FROM products");
    }

    public function getCategories() {
        return $this->conn->query("SELECT id, name FROM categories ORDER BY name ASC");
    }

    public function getProductsByCategory($categoryId) {
        $stmt = $this->conn->prepare("SELECT product, price, image_filename, quantity FROM products WHERE categories_id = ?");
        $stmt->bind_param("i", $categoryId);
        $stmt->execute();
        return $stmt->get_result();
    }
}
