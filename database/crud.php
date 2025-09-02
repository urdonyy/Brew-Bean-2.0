<?php 
require_once("../database/database.php");
class crud {

    private $conn;

    public function __construct() {
        $this->conn = (new Database())->conn;
    }

    public function displayProducts() {
        $query = "SELECT product, categories_id, price, quantity FROM products ORDER BY categories_id DESC";
        $result = $this->conn->query($query);
    
        if ($result === false) {
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
    

    //Get Product Id 
    public function getProductbyID($id){

        $stmt = $this->conn->prepare("SELECT * FROM product WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }


    // INVENTORY - Function for adding a product (CREATE-R-U-D)
    public function addProduct($post) {
    if (
        empty($post['product']) ||
        empty($post['image_filename']) ||
        empty($post['price']) ||
        empty($post ['quantity']) ||
        empty($post['categories_id'])
    ) {
        return false;
    }

    $product = $post['product'];
    $image_filename = $post['image_filename'];
    $price = $post['price'];
    $quantity = $post['quantity'];
    $categories_id = $post['categories_id'];

    // SQL statement with placeholders (?)
    $stmt = $this->conn->prepare(
        "INSERT INTO products (product, image_filename, price, quantity, categories_id) VALUES (?, ?, ?, ?, ?)"
    );

    if ($stmt === false) {
        // Handle prepare error
        return false;
    }

    // "ssds" binds the variables: string, string, double, string
    $stmt->bind_param("ssdis", $product, $image_filename, $price, $quantity, $categories_id);
    
    // Execute the statement
    $success = $stmt->execute();
    
    // Close the statement
    $stmt->close();
    
    return $success;
}

    // INVENTORY - Function for deleting the product (C-R-U-DELETE)
public function deleteProduct($product) {
  
    $stmt = $this->conn->prepare("DELETE FROM products WHERE product = ?");

    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("s", $product);
    
    $success = $stmt->execute();

    $stmt->close();
    
    return $success;
}

    // INVENTORY - Function for updating the product (C-R-UPDATE-D)
    public function updateProduct($post, $original_product) {
        if (
            empty($post['product']) ||
            empty($post['image_filename']) ||
            empty($post['price']) ||
            empty($post['quantity']) ||
            empty($post['categories_id'])
        ) {
            return false;
        }
    
        $new_product = $post['product'];
        $new_image_filename = $post['image_filename'];
        $new_price = $post['price'];
        $new_quantity = $post ['quantity'];
        $new_categories_id = $post['categories_id'];
    
        $stmt = $this->conn->prepare(
            "UPDATE products 
             SET product = ?, image_filename = ?, price = ?, quantity = ?, categories_id = ? 
             WHERE product = ?"
        );
    
        if ($stmt === false) {
            return false;
        }
    
        // 5 parameters: s = string, d = double
        $stmt->bind_param("ssdiss", $new_product, $new_image_filename, $new_price, $new_quantity, $new_categories_id, $original_product);
    
        $success = $stmt->execute();
        $stmt->close();
    
        return $success;
    }
    
}


?>