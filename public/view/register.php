<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-200 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-700">
        <h2 class="text-2xl font-bold text-white text-center mb-6">Create Your Account</h2>
        <form id="registerForm" class="space-y-4">
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-400">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-400">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="middle_name" class="block text-sm font-medium text-gray-400">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" placeholder="Enter your middle name (optional)"
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="birthdate" class="block text-sm font-medium text-gray-400">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="username" class="block text-sm font-medium text-gray-400">Username</label>
                <input type="text" name="username" id="username" placeholder="Choose a username" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                <input type="password" name="password" id="password" placeholder="Create a password" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required
                    class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
            </div>

            <div>
                <button type="button" onclick="user_register()"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-150 ease-in-out">
                    Register
                </button>
            </div>

            <div class="text-center text-sm text-gray-400">
                Already have an account?
                <button type="button" onclick="window.location.href='login.php'"
                    class="text-blue-400 hover:text-blue-300 font-medium transition duration-150 ease-in-out">
                    Login Here!
                </button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
    <script src="../lib/js/my.js"></script>
</body>

</html>
