<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the same CSS file -->
</head>
<body>
    <div class="container">
        <h1>Create a New Account</h1>
        <form id="createAccountForm">
            <div class="name-group">
                <div class="input-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" required placeholder="Enter your first name">
                </div>
                <div class="input-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" required placeholder="Enter your last name">
                </div>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" required placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" required placeholder="Enter your password">
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" required placeholder="Re-enter your password">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="ca-container">
        <p>Already have an account? <a href="Login.html">Log in</a></p>
    </div>
    <script src="script1.js"></script>
</body>
</html>