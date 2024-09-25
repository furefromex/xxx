<?php
if (isset($_POST['add_to_cart'])) {
    $product_id = (int)$_POST['id'];
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = 0;
    }
    $_SESSION['cart'][$product_id]++;
}

if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $id => $quantity) {
        if ($quantity > 0) {
            $_SESSION['cart'][$id] = $quantity;
        } else {
            unset($_SESSION['cart'][$id]);
        }
    }
}

$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99],
    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99],
];

$cart_total = 0;
?>

<h2>Your Cart</h2>
<form action="index.php?page=cart" method="post">
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="text-align: left; padding: 10px; border-bottom: 1px solid #ddd;">Product</th>
            <th style="text-align: left; padding: 10px; border-bottom: 1px solid #ddd;">Quantity</th>
            <th style="text-align: left; padding: 10px; border-bottom: 1px solid #ddd;">Price</th>
            <th style="text-align: left; padding: 10px; border-bottom: 1px solid #ddd;">Total</th>
        </tr>
        <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
            <?php
            $product = null;
            foreach ($products as $p) {
                if ($p['id'] == $id) {
                    $product = $p;
                    break;
                }
            }
            if ($product):
                $total = $product['price'] * $quantity;
                $cart_total += $total;
            ?>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;"><?php echo $product['name']; ?></td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                        <input type="number" name="quantity[<?php echo $id; ?>]" value="<?php echo $quantity; ?>" min="0">
                    </td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">$<?php echo number_format($product['price'], 2); ?></td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">$<?php echo number_format($total, 2); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align: right; padding: 10px;"><strong>Total:</strong></td>
            <td style="padding: 10px;"><strong>$<?php echo number_format($cart_total, 2); ?></strong></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="update_cart" value="Update Cart" class="button">
    <a href="index.php?page=checkout" class="button" style="text-decoration: none; display: inline-block; margin-left: 10px;">Proceed to Checkout</a>
</form>