<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
</head>
<body>
<form id="loginForm">
        <input type="text" name="identifier" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="button" onclick="user_login()">Login</button>

        Don't have an account?
        <button type="button" onclick="window.location.href='register.php'">Register Here!</button>

    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../lib/js/my.js"></script>
</html>