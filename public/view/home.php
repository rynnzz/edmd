<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-200 min-h-screen flex items-center justify-center">

    <div class="text-center max-w-lg p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-700">
        <h2 class="text-3xl font-bold text-white mb-4">Hi, <?php echo htmlspecialchars($username); ?>!</h2>
        <h3 class="text-xl text-gray-300 mb-8">Welcome to the Home Page</h3>

        <button onclick="user_Logout()"
            class="w-full py-2 px-4 bg-red-600 text-white font-semibold rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-150 ease-in-out">
            Logout
        </button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../lib/js/my.js"></script>
</body>

</html>
