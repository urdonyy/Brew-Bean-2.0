<?php
$currentPage = basename($_SERVER['PHP_SELF']);

require_once("../src/controller/controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brew & Bean 2.0</title>
    <link rel="stylesheet" href="../src/styles/global.css">
</head>

<body>
    <?php
    include "partials/nav.php";
    ?>
</body>

</html>