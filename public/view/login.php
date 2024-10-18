<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-200 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-sm p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-700">
        <h2 class="text-2xl font-bold text-white text-center mb-6">Welcome</h2>
        <form id="loginForm" class="space-y-6">
            <div>
                <label for="identifier" class="block text-sm font-medium text-gray-400">Username</label>
                <input type="text" name="identifier" id="identifier" placeholder="Enter your username" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <button type="button" onclick="user_login()"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-150 ease-in-out">
                    Login
                </button>
            </div>

            <div class="text-center text-sm text-gray-400">
                Don't have an account?
                <button type="button" onclick="window.location.href='register.php'"
                    class="text-blue-400 hover:text-blue-300 font-medium transition duration-150 ease-in-out">
                    Register Here!
                </button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
    <script src="../lib/js/my.js"></script>
</body>

</html>
