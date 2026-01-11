<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InternConnect Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="overlay"></div>

    <div class="login-container">
        <img src="../images/pup_logo.png" alt="PUP Logo" class="logo"><br><br>

        <h1>INTERNCONNECT: OJT INFORMATION MANAGEMENT SYSTEM</h1>
        <p id="selectedRole" style="font-size:13px; color:#333;"></p>

        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required><br>
            <input type="password" id="password" placeholder="Password" required><br>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="links">
            <a href="#">Forgot Password?</a> &nbsp;|&nbsp;
            <a href="#">Don’t have an account?</a>
        </div>
    </div>

    <footer>
        © 2025 InternConnect | PUP Taguig | All Rights Reserved
    </footer>

    <script src="../jscript/script.js"></script>
</body>
</html>