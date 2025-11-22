<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-red-600 p-6 text-center">
            <h1 class="text-2xl font-bold text-white uppercase tracking-wider">StockMaster</h1>
            <p class="text-red-100 text-sm mt-1">Inventory Management System</p>
        </div>

        <div class="p-8">
            <div class="flex justify-center mb-6 border-b">
                <button class="pb-2 px-4 border-b-2 border-red-600 font-semibold text-red-600">Login</button>
                <!-- <button class="pb-2 px-4 text-gray-500 hover:text-gray-800">Sign Up</button> -->
                <button class="pb-2 px-4 text-gray-500 hover:text-gray-800" id="myButton" onclick="window.location.href = 'register.php';">Sign Up</button>   
            </div>

            <form action="dashboard.php" method="POST" class="space-y-4">
                <!-- <div>
                    <label class="block text-sm font-medium text-gray-700">Login ID</label>
                    <input type="text" name="login_id" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" placeholder="Enter ID">
                </div> -->

                <div>
                    <label class="block text-sm font-medium text-gray-700">Login ID</label>
                    <input type="name" name="login" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" placeholder="Enter Login ID">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <a href="#" class="text-red-600 hover:text-red-500">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition duration-200">
                    Sign In
                </button>
            </form>
        </div>
    </div>

</body>
</html>