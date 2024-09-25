<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Simple routing
$page = isset($_GET['page']) ? $_GET['page'] : 'products';

// Header
include 'header.php';

// Content
switch ($page) {
    case 'products':
        include 'products.php';
        break;
    case 'product':
        include 'product.php';
        break;
    case 'cart':
        include 'cart.php';
        break;
    case 'checkout':
        include 'checkout.php';
        break;
    default:
        include 'products.php';
}

// Footer
include 'footer.php';
?>