
<?php
include 'header.inc';
?>

<h2>Login</h2>

<?php
if (isset($_GET['error'])) {
    echo '<p style="color:red;">Invalid username or password. Please try again.</p>';
}
?>

<form action="process.php" method="post">
    <p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </p>

    <input type="hidden" name="token" value="H-STUDENTID">

    <button type="submit">Login</button>
</form>

<?php
include 'footer.inc';
?>
