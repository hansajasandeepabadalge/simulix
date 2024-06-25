<?php
session_start(); // Start the session at the beginning of your PHP script

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to the login page if the user is not logged in
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Webpage</title>
</head>
<body>
    <h1>Welcome to My Webpage</h1>
    <p>This is a basic webpage.</p>
    <form action="logout.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
<h2>About Me</h2>
<p>I am a web developer with a passion for creating amazing websites.</p>
<h2>Contact Information</h2>
<ul>
    <li>Email: example@example.com</li>
    <li>Phone: 123-456-7890</li>
</ul>