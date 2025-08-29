<?php 
require_once("../database/database.php");
class crud {

    private $conn;

    public function __construct() {
        $this->conn = (new Database())->conn;
    }

    public function displayProducts() {
        $query = "SELECT product_name, category, price FROM products ORDER BY category DESC";
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
    public function updateProduct($post, $original_product_name) {
        if (
            empty($post['product_name']) ||
            empty($post['image_filename']) ||
            empty($post['price']) ||
            empty($post['category'])
        ) {
            return false;
        }
    
        $new_product_name = $post['product_name'];
        $new_image_filename = $post['image_filename'];
        $new_price = $post['price'];
        $new_category = $post['category'];
    
        $stmt = $this->conn->prepare(
            "UPDATE products 
             SET product_name = ?, image_filename = ?, price = ?, category = ? 
             WHERE product_name = ?"
        );
    
        if ($stmt === false) {
            return false;
        }
    
        // 5 parameters: s = string, d = double
        $stmt->bind_param("ssdss", $new_product_name, $new_image_filename, $new_price, $new_category, $original_product_name);
    
        $success = $stmt->execute();
        $stmt->close();
    
        return $success;
    }
    
}


?>