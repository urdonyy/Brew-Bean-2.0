<?php
require_once __DIR__ . '/database.php';

class Seeder {
    private $conn;

    public function __construct() {
        $dbConnection = new Database();
        $this->conn = $dbConnection->conn;
    }

    public function seedUsers() {
        $query = "INSERT INTO users (name, email, password) VALUES
            ('Admin User', 'admin@example.com', '123456'),
            ('John Doe', 'john@example.com', 'password'),
            ('Jane Smith', 'jane@example.com', 'password123');";

        if (mysqli_query($this->conn, $query)) {
            echo "✅ Users seeded successfully.\n";
        } else {
            echo "❌ Error seeding users: " . mysqli_error($this->conn) . "\n";
        }
    }

    // public function seedProducts() {
    //     $query = "INSERT INTO products (name, price) VALUES
    //         ('Coffee Beans', 200),
    //         ('Espresso Machine', 15000),
    //         ('Coffee Mug', 150);";

    //     if (mysqli_query($this->conn, $query)) {
    //         echo "✅ Products seeded successfully.\n";
    //     } else {
    //         echo "❌ Error seeding products: " . mysqli_error($this->conn) . "\n";
    //     }
    // }
}
