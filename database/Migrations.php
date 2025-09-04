<?php
require_once __DIR__ . '/database.php';
class Migration
{
    private $connnection;

    public function __construct()
    {
        $dbConnection = new Database();
        $this->connnection = $dbConnection->getConnection();
    }

    public function createTable($tables)
    {
        foreach ($tables as $table => $columns) {
            $createQuery = "CREATE TABLE `" . $table . "` (";

            $columnDefs = [];
            foreach ($columns as $columnName => $columnDefinition) {
                if (stripos($columnName, 'FOREIGN KEY') === 0 || stripos($columnName, 'UNIQUE') === 0) {
                    $columnDefs[] = "$columnName $columnDefinition";
                } else {
                    $columnDefs[] = "`$columnName` $columnDefinition";
                }
            }

            $createQuery .= implode(", ", $columnDefs);
            $createQuery .= ", PRIMARY KEY (`id`)";
            $createQuery .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

            if (mysqli_query($this->connnection, $createQuery)) {
                echo "Table `$table` created successfully.\n";
            } else {
                echo "Error creating table `$table`: " . mysqli_error($this->connnection) . "\n";
            }
        }
    }


    public function dropTable($table)
    {
        $query = "DROP TABLE IF EXISTS `$table`;";
        if (mysqli_query($this->connnection, $query)) {
            echo "Table `$table` dropped successfully.\n";
        } else {
            echo "Error dropping table `$table`: " . mysqli_error($this->connnection) . "\n";
        }
    }
}
