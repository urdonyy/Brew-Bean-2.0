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
        return $this->conn->query("SELECT DISTINCT category FROM products");
    }

        public function getProductsByCategory($category) {
            $stmt = $this->conn->prepare("SELECT product, price,quantity, image_filename FROM products WHERE category = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        return $stmt->get_result();
    }
}
