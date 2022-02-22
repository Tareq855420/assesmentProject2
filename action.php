<?php

require_once 'vendor/autoload.php';

use App\classes\ProductUpload;
use App\classes\Login;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'product-upload')
    {
        include 'pages/productUpload.php';
    }
    elseif ($_GET['pages'] == 'all-products')
    {
        $productUpload = new ProductUpload();
        $products = $productUpload->getAllProductInfo();
        include 'pages/allProducts.php';
    }
    elseif ($_GET['pages'] == 'product-details')
    {
        $product = new ProductUpload();
        $products = $product->getAllProductInfo();
        include 'pages/productDetails.php';
    }
    elseif ($_GET['pages'] == 'login')
    {
        include 'pages/login.php';
    }
    elseif ($_GET['pages'] == 'logout')
    {
        $login = new Login();
        $login->logout();
    }
}
elseif (isset($_POST['btn']))
{
    $productUpload = new ProductUpload($_FILES, $_POST);
    $message = $productUpload->index();
    include 'pages/productUpload.php';
}
elseif (isset($_POST['loginBtn']))
{
    $login = new Login($_POST);
    $message = $login->Login();
    include 'pages/login.php';
}