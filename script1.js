// script.js
document.getElementById('createAccountForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    // Add your account creation logic here (e.g., API call or validation)
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Password:', password);
});
