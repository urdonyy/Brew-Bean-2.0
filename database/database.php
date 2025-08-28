<?php 
session_start();

class Database {

    private $_host = "localhost";
    private $_root = "root";
    private $_password = "";
    private $_database = "brew_bean";
    public $conn;

    // Connection to database 
    public function __construct() {
        $this->conn = new mysqli(
            $this->_host, 
            $this->_root, 
            $this->_password, 
            $this->_database
        );
        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);        
        }
    }

    // AC - Get all products 
    public function getProducts() {
        return $this->conn->query("SELECT * FROM products");
    }

    // AC FILTERING  - Get distinct categories (Hot Coffe, Cold Coffe, Non-Coffe)
    public function getCategories() {
        return $this->conn->query("SELECT DISTINCT category FROM products");
    }

    // AC FILTERING - Get products by category
    public function getProductsByCategory($category) {
        $stmt = $this->conn->prepare("SELECT product_name, price, image_filename FROM products WHERE category = ?");
        $stmt->bind_param("s", $category); // "s" because product_id is VARCHAR in your DB
        $stmt->execute();
        return $stmt->get_result();
    }

    // INVENTORY - Function for displaying product by table
    public function displayProducts() {
        $query = "SELECT product_name, category, price FROM products ORDER BY category DESC";
        $result = $this->conn->query($query);
    
        if ($result === false) {
            // Optional: log error or throw exception
            return [];  // Return empty array on query error
        }
    
        $data = [];
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
    
        return $data; // Will be empty if no results
    }
    

    // INVENTORY - Function for adding a product (CREATE-R-U-D)
public function addProduct($post) {
    if (
        empty($post['product_name']) ||
        empty($post['image_filename']) ||
        empty($post['price']) ||
        empty($post['category'])
    ) {
        return false;
    }

    $product_name = $post['product_name'];
    $image_filename = $post['image_filename'];
    $price = $post['price'];
    $category = $post['category'];

    // SQL statement with placeholders (?)
    $stmt = $this->conn->prepare(
        "INSERT INTO products (product_name, image_filename, price, category) VALUES (?, ?, ?, ?)"
    );

    if ($stmt === false) {
        // Handle prepare error
        return false;
    }

    // "ssds" binds the variables: string, string, double, string
    $stmt->bind_param("ssds", $product_name, $image_filename, $price, $category);
    
    // Execute the statement
    $success = $stmt->execute();
    
    // Close the statement
    $stmt->close();
    
    return $success;
}

    // INVENTORY - Function for deleting the product (C-R-U-DELETE)
public function deleteProduct($product_name) {
  
    $stmt = $this->conn->prepare("DELETE FROM products WHERE product_name = ?");

    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("s", $product_name);
    
    $success = $stmt->execute();

    $stmt->close();
    
    return $success;
}
    // INVENTORY - Function for updating the product (C-R-UPDATE-D)
}
?>