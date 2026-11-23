<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $token = $_POST['token'] ?? '';

    // Replace these with your correct details
    $correct_username = 'Hussien Nafee';
    $correct_password = '12345678';

    if ($username === $correct_username &&
        $password === $correct_password) {

        session_regenerate_id(true);
        $_SESSION['user'] = $username;
        $_SESSION['token'] = $token;

        header('Location: welcome.php');
        exit();

    } else {
        header('Location: login.php?error=1');
        exit();
    }

} else {
    header('Location: login.php');
    exit();
}
?>
