<?php 
require_once("../database/database.php");
class crud {

    private $conn;

    public function __construct() {
        $this->conn = (new Database())->conn;
    }

    public function displayProducts() {
        $query = "SELECT p.id, p.product, c.name AS category_name, p.price, p.quantity 
                  FROM products p
                  JOIN categories c ON p.categories_id = c.id
                  ORDER BY p.categories_id DESC";
        
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
    
        return $data;
    }
    
    

    //Get Product Id 
    public function getProductbyID($id){

        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
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
    $stmt->bind_param("ssdii", $product, $image_filename, $price, $quantity, $categories_id);
    
    // Execute the statement
    $success = $stmt->execute();
    
    // Close the statement
    $stmt->close();
    
    return $success;
}

    // INVENTORY - Function for deleting the product (C-R-U-DELETE)
    public function deleteProduct($id) {
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = ?");
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }
    

    // INVENTORY - Function for updating the product (C-R-UPDATE-D)
    public function updateProduct($post, $product_id) {
        // Validate required fields
        if (
            empty($post['product']) ||
            empty($post['image_filename']) ||
            empty($post['price']) ||
            empty($post['quantity']) ||
            empty($post['categories_id'])
        ) {
            return false;
        }
    
        // Extract new values
        $new_product       = $post['product'];
        $new_image_filename = $post['image_filename'];
        $new_price          = (float)$post['price'];
        $new_quantity       = (int)$post['quantity'];
        $new_categories_id  = (int)$post['categories_id'];
    
        // Prepare query
        $stmt = $this->conn->prepare(
            "UPDATE products 
             SET product = ?, image_filename = ?, price = ?, quantity = ?, categories_id = ? 
             WHERE id = ?"
        );
    
        if ($stmt === false) {
            return false;
        }
    
        // Bind parameters: s = string, s = string, d = double, i = int, i = int, i = int
        $stmt->bind_param(
            "ssdiii",
            $new_product,
            $new_image_filename,
            $new_price,
            $new_quantity,
            $new_categories_id,
            $product_id
        );
    
        // Execute and close
        $success = $stmt->execute();
        $stmt->close();
    
        return $success;
    }
    
    
}


?>