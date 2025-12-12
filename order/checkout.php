<?php include("../header.php"); ?>

<main>
<section class="checkout-container">
    <h2>Checkout</h2>

    <form action="/backend/process_checkout.php" method="POST">

        <h3>Delivery Information</h3>
        <input name="name" placeholder="Full Name" required>
        <input name="address" placeholder="Complete Address" required>
        <input name="phone" placeholder="Phone Number" required>

        <h3>Payment Method</h3>
        <select name="payment" required>
            <option value="cod">Cash on Delivery</option>
            <option value="card">Credit Card</option>
        </select>

        <button class="btn primary-btn" type="submit">Place Order</button>
    </form>
</section>
</main>

<?php include("../footer.php"); ?>
