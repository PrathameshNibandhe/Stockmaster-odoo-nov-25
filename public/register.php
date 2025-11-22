<?php
// register.php
// Basic PHP Logic to handle form submission
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_id = $_POST['login_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic Validation
    if (empty($login_id) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // TODO: Insert into MySQL Database here
        // $sql = "INSERT INTO users (username, email, password) VALUES (...)";
        
        $success = "Registration successful! You can now login.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-red-600 p-6 text-center">
            <h1 class="text-2xl font-bold text-white uppercase tracking-wider">StockMaster</h1>
            <p class="text-red-100 text-sm mt-1">Create your account</p>
        </div>

        <div class="p-8">
            
            <div class="flex justify-center mb-6 border-b">
                <a href="login.php" class="pb-2 px-4 text-gray-500 hover:text-gray-800 transition">Login</a>
                <button class="pb-2 px-4 border-b-2 border-red-600 font-semibold text-red-600">Sign Up</button>
            </div>

            <?php if($error): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?php echo $error; ?></span>
                </div>
            <?php endif; ?>

            <?php if($success): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?php echo $success; ?></span>
                </div>
            <?php endif; ?>

            <form action="register.php" method="POST" class="space-y-4">
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Login ID</label>
                    <input type="text" name="login_id" required 
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" 
                        placeholder="Choose a username">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email ID</label>
                    <input type="email" name="email" required 
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" 
                        placeholder="user@example.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required 
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" 
                        placeholder="Create a password">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Re-enter Password</label>
                    <input type="password" name="confirm_password" required 
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" 
                        placeholder="Confirm password">
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition duration-200 mt-4">
                    Sign Up
                </button>

                <!-- <p class="text-center text-sm text-gray-600 mt-4">
                    Already have an account? <a href="login.php" class="text-red-600 hover:underline">Login here</a>
                </p> -->
            </form>
        </div>
    </div>

</body>
</html>