<?php
require_once __DIR__ . '/Seeder.php';

$seeder = new Seeder();

// Call your seeders
$seeder->seedCategories();
$seeder->seedProducts();
