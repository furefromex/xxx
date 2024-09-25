<h2>Our Products</h2>
<div class="products">
    <?php
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'description' => 'This is product 1'],
        ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'description' => 'This is product 2'],
        ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'description' => 'This is product 3'],
    ];

    foreach ($products as $product) {
        echo "<div class='card'>";
        echo "<h3>{$product['name']}</h3>";
        echo "<p>Price: $" . number_format($product['price'], 2) . "</p>";
        echo "<p>{$product['description']}</p>";
        echo "<a href='index.php?page=product&id={$product['id']}' class='button'>View Details</a>";
        echo "</div>";
    }
    ?>
</div>