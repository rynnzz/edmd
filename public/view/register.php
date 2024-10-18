<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Page</title>
</head>
<body>
    <form id="registerForm">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="text" name="middle_name" placeholder="Middle Name">
        <input type="date" name="birthdate" placeholder="Birthdate" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="button" onclick="user_register()">Register</button>

        Already have an account?
        <button type="button" onclick="window.location.href='login.php'">Login Here!</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../lib/js/my.js"></script>
</body>
</html>
