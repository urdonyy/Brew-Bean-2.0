<?php
require_once __DIR__ . '/database.php';

class Schema {
    public static function create(string $table, callable $callback) {
        $db = new Database();
        $conn = $db->getConnection();

        $blueprint = new Blueprint($table);
        $callback($blueprint);

        $sql = $blueprint->toSql();

        if (mysqli_query($conn, $sql)) {
            echo "Table `$table` created successfully.\n";
        } else {
            echo "Error creating table `$table`: " . mysqli_error($conn) . "\n";
        }
    }

    public static function dropIfExists(string $table) {
        $db = new Database();
        $conn = $db->getConnection();

        $sql = "DROP TABLE IF EXISTS `$table`;";
        if (mysqli_query($conn, $sql)) {
            echo "Table `$table` dropped successfully.\n";
        } else {
            echo "Error dropping table `$table`: " . mysqli_error($conn) . "\n";
        }
    }
}

class Blueprint {
    private $table;
    private $columns = [];
    private $constraints = [];

    public function __construct($table) {
        $this->table = $table;
    }

    public function increments($name = "id") {
        $this->columns[] = "`$name` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
        return $this;
    }

    public function string($name, $length = 255) {
        $this->columns[] = "`$name` VARCHAR($length) NOT NULL";
        return $this;
    }

    public function integer($name) {
        $this->columns[] = "`$name` INT(11) NOT NULL";
        return $this;
    }

    public function timestamp($name) {
        $this->columns[] = "`$name` TIMESTAMP NULL DEFAULT NULL";
        return $this;
    }

    public function foreign($column, $references, $on) {
        $this->constraints[] = "FOREIGN KEY (`$column`) REFERENCES `$on`(`$references`) ON DELETE CASCADE";
        return $this;
    }

    public function unique($column) {
        $this->constraints[] = "UNIQUE(`$column`)";
        return $this;
    }

    public function toSql() {
        $all = array_merge($this->columns, $this->constraints);
        return "CREATE TABLE `{$this->table}` (" . implode(", ", $all) . ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
    }
}
