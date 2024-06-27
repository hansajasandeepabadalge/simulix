<?php
session_start(); // Start the session at the beginning of your PHP script

$message = ''; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "simulixdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Consider hashing the password before storing it
    $confirmPassword = $_POST["confirmPassword"];

    // Basic validation (for demonstration purposes)
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || $password !== $confirmPassword) {
        $message = 'Please fill in all fields correctly.';
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Execute the statement
        if ($stmt->execute()) {
            $message = "Registration successful!";
            // Redirect or do something upon success
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Create a New Account</h1>
        <form id="createAccountForm" method="post">
            <div class="name-group">
                <div class="input-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName" required placeholder="Enter your first name">
                </div>
                <div class="input-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" id="lastName" required placeholder="Enter your last name">
                </div>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required placeholder="Enter your password">
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" id="confirmPassword" required placeholder="Re-enter your password">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="ca-container">
        <p>Already have an account? <a href="Login.php">Log in</a></p>
    </div>
    <script src="script1.js"></script>
</body>
</html>