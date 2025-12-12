<?php
session_start();

$email = $_POST['email'];
$pass  = $_POST['password'];

if ($pass === "admin") {
    $_SESSION['user'] = [
        "name"  => "Rayven Pahignalo",
        "email" => $email
    ];

    header("Location: /account/index.php");
    exit;
}

header("Location: /account/index.php?error=1");
exit;
