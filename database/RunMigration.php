<?php
require_once __DIR__ . '/../vendor/autoload.php';

// get all migrations
$migrationFiles = glob(__DIR__ . '/Migrations/*.php');

// sort alphabetically (numbers first)
sort($migrationFiles);

$migrations = [];

// require each file and collect the returned migration object
foreach ($migrationFiles as $migrationFile) {
    $migration = require $migrationFile; // returns the anonymous migration
    $migrations[] = $migration;
}

// run them
foreach ($migrations as $migration) {
    $migration->up();
}
