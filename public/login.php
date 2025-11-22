<?php
session_start();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/../backend/config/db.php";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $login = $_POST['login'];
        $password = $_POST['password'];

        // Check login
        $stmt = $pdo->prepare("SELECT * FROM users WHERE login_id = ?");
        $stmt->execute([$login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: dashboard.php");
            exit;

        } else {
            $_SESSION['error'] = "Invalid Login ID or Password!";
            header("Location: login.php");
            exit;
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "Database Error!";
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 h-screen flex items-center justify-center font-sans">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        
        <!-- Header Section -->
        <div class="pt-8 pb-6 text-center">
            <!-- Logo Icon -->
            <div class="flex justify-center mb-3">
                <a href="../index.php" class="bg-blue-50 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#2563EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </a>
            </div>
            <h1 class="text-2xl font-bold text-gray-900">Welcome Back</h1>
            <p class="text-gray-500 text-sm mt-1">Sign in to access your inventory</p>
        </div>

        <!-- Tabs -->
        <div class="flex border-b border-gray-100">
            <button class="w-1/2 py-3 text-center text-[#2563EB] font-semibold border-b-2 border-[#2563EB] bg-blue-50/50">
                Login
            </button>
            <a href="register.php" class="w-1/2 py-3 text-center text-gray-500 hover:text-gray-700 transition font-medium">
                Sign Up
            </a>
        </div>

        <!-- Form Section -->
        <div class="p-8">

            <!-- Show Error -->
            <?php if (isset($_SESSION['error'])): ?>
                <p class="mb-4 text-red-600 font-medium"><?= $_SESSION['error']; ?></p>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <form method="POST" class="space-y-5">
                
                <!-- Login ID Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Login ID</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- User Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            name="login" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="Enter your ID"
                        >
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Lock Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input 
                            type="password" 
                            name="password" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="••••••••"
                        >
                    </div>
                </div>

                <!-- Forgot Password Link -->
                <div class="flex items-center justify-end">
                    <a href="forgotPassword.php" class="text-sm font-medium text-[#2563EB] hover:text-blue-700 transition">
                        Forgot Password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#2563EB] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform hover:-translate-y-0.5">
                    Sign In
                </button>

            </form>
        </div>
        
        <!-- Footer link to Home -->
        <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 text-center">
            <p class="text-xs text-gray-500">
                &larr; Back to <a href="index.php" class="text-[#2563EB] hover:underline">Home Page</a>
            </p>
        </div>
    </div>

</body>
</html>
