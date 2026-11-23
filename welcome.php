
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';
?>

<h2>Welcome!</h2>

<p>
    Hello,
    <?php echo htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8'); ?>!
</p>

<p>You have successfully logged in using PHP sessions.</p>

<p>
    Your token:
    <?php echo htmlspecialchars($_SESSION['token'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
</p>

<a href="login.php">Back to Login</a>

<?php
include 'footer.inc';
?>
