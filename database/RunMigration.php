<?php
require_once __DIR__ . '/../vendor/autoload.php';

// load Migration base class
require_once __DIR__ . '/Migrations.php';

$migrations = [];
foreach (glob(__DIR__ . '/Migrations/*.php') as $migrationFile) {
    require_once $migrationFile;

    // Class name = filename (no namespace)
    $className = pathinfo($migrationFile, PATHINFO_FILENAME);

    $migrations[] = $className;
}

foreach ($migrations as $migrationClass) {
    $migration = new $migrationClass();
    $migration->up();
}
