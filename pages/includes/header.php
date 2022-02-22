<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .mt-custom {
            margin-top: 120px;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="action.php?pages=product-upload" class="nav-link">Product Upload</a></li>
                <li class="nav-item"><a href="action.php?pages=all-products" class="nav-link">View Products</a></li>
                <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>