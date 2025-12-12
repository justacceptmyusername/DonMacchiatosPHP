<?php
session_start();
?>

<?php include("../header.php"); ?>

<main>
<section class="account-panel">

<?php if (!isset($_SESSION['user'])): ?>
    <div class="auth-box">
        <h2>Login</h2>

        <?php if (isset($_GET['error'])): ?>
            <p style="color:red;">Invalid email or password.</p>
        <?php endif; ?>

        <form action="/backend/login.php" method="POST" class="auth-form">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button class="btn primary-btn">Login</button>
        </form>
    </div>

<?php else: ?>
    <div class="profile-box">
        <h3>Personal Information</h3>
        <p><strong>Name:</strong> <?= $_SESSION['user']['name'] ?></p>
        <p><strong>Email:</strong> <?= $_SESSION['user']['email'] ?></p>

        <a href="/backend/logout.php" class="btn">Logout</a>
    </div>

    <div class="orders-box">
        <h3>Order History</h3>
        <ul>
            <li>Caramel Macchiato • Jan 2025</li>
            <li>Americano • Feb 2025</li>
        </ul>
    </div>

<?php endif; ?>

</section>
</main>

<?php include("../footer.php"); ?>
