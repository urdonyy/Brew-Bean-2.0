<?php
require_once __DIR__ . '/database.php';

class Seeder {
    private $conn;

    public function __construct() {
        $dbConnection = new Database();
        $this->conn = $dbConnection->conn;
    }

    private function runQuery($query, $successMessage) {
        if (mysqli_query($this->conn, $query)) {
            echo "✅ {$successMessage}\n";
        } else {
            echo "❌ Error: " . mysqli_error($this->conn) . "\n";
        }
    }

    public function seedUsers() {
        $query = "INSERT INTO users (name, email, password) VALUES
            ('Admin User', 'admin@example.com', '123456'),
            ('John Doe', 'john@example.com', 'password'),
            ('Jane Smith', 'jane@example.com', 'password123');";

        $this->runQuery($query, "Users seeded successfully.");
    }

    public function seedProducts() {
        $query = "INSERT INTO products (id, name, category_id, price, stock, image) VALUES
            (1, 'Caramel Macchiato', 2, 150.00, 10, 'caramel_macchiato.jpg'),
            (3, 'Cappucino', 2, 180.00, 10, 'cappuccino.jpg'),
            (4, 'Caffe Misto', 2, 120.00, 10, 'caffe_misto.jpg'),
            (5, 'Cold Brew', 1, 120.00, 10, 'cold_brew.jpg'),
            (6, 'Chocolate Cream', 1, 170.00, 10, 'chocolate_cream.jpg'),
            (7, 'Raspberry Cream ', 1, 200.00, 10, 'raspberry_cream.jpg'),
            (8, 'Salted Caramel Macchiato', 1, 150.00, 10, 'salted_caramel_macchiato.jpg'),
            (9, 'Lemon Tea', 3, 150.00, 10, 'lemon_tea.jpg'),
            (10, 'Ice Tea', 3, 150.00, 10, 'ice_tea.jpg'),
            (11, 'Chai Latte', 3, 180.00, 10, 'chai_latte.jpg'),
            (12, 'Matcha Latte', 3, 200.00, 10, 'matcha_latte.jpg'),
            (30, 'test', 2, 10.00, 12, 'test.jpg'),
            (31, 'test23', 2, 123.00, 12, 'test.jpg');";

        $this->runQuery($query, "Products seeded successfully.");
    }
}

// Run the seeder
$seeder = new Seeder();
$seeder->seedUsers();
$seeder->seedProducts();
