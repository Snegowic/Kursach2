<?php

include('connection/connect.php');
include('sessions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Природный Оазис</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page === 'add_category') {
                include('add_categories.php');
            } elseif ($page === 'add') {
                include('add.php');
            } elseif ($page === 'admin') {
                include('admin.php');
            } elseif ($page === 'all_category') {
                include('all_category.php');
            } elseif ($page === 'authorization') {
                include('authorization.php');
            } elseif ($page === 'edit') {
                include('edit.php');
            } elseif ($page === 'product') {
                include('product.php');
            } elseif ($page === 'profile') {
                include('profile.php');
            } elseif ($page === 'registration') {
                include('registr.php');
            } elseif ($page === 'delete') {
                include('delete.php');
            } else {
                include('error404.php');
            }
        } else {
            include('incl/catalog.php');
        }
        ?>
    </main>
    <?php include('footer.php') ?>
</body>

</html>