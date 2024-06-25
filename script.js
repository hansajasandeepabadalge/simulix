// script.js
document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    // Add your login logic here (e.g., API call or validation)
    console.log('Email:', email);
    console.log('Password:', password);
});
