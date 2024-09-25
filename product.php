<?php
$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'description' => 'This is product 1'],
    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'description' => 'This is product 2'],
    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'description' => 'This is product 3'],
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;

foreach ($products as $p) {
    if ($p['id'] === $id) {
        $product = $p;
        break;
    }
}

if ($product) {
    echo "<div class='card'>";
    echo "<h2>{$product['name']}</h2>";
    echo "<p>Price: $" . number_format($product['price'], 2) . "</p>";
    echo "<p>{$product['description']}</p>";
    echo "<form action='index.php?page=cart' method='post'>";
    echo "<input type='hidden' name='id' value='{$product['id']}'>";
    echo "<input type='submit' name='add_to_cart' value='Add to Cart' class='button'>";
    echo "</form>";
    echo "</div>";
} else {
    echo "<p>Product not found.</p>";
}
?>