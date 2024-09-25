<h2>Checkout</h2>
<form action="index.php?page=checkout" method="post" id="checkout-form">
    <div class="card">
        <h3>Billing Information</h3>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required style="width: 100%; padding: 8px; margin-bottom: 10px;"></textarea>
        
        <h3>Payment Information</h3>
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <input type="submit" value="Place Order" class="button">
    </div>
</form>

<script>
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Order placed successfully! This is a demo, no actual order has been processed.');
    window.location.href = 'index.php?page=products';
});
</script>