<?php
// register.php
// Basic PHP Logic to handle form submission
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use null coalescing operator to avoid undefined index warnings
    $login_id = $_POST['login_id'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

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
<body class="bg-slate-50 min-h-screen flex items-center justify-center font-sans py-10">

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
            <h1 class="text-2xl font-bold text-gray-900">Get Started</h1>
            <p class="text-gray-500 text-sm mt-1">Create your StockMaster account</p>
        </div>

        <!-- Tabs -->
        <div class="flex border-b border-gray-100">
            <a href="login.php" class="w-1/2 py-3 text-center text-gray-500 hover:text-gray-700 transition font-medium">
                Login
            </a>
            <button class="w-1/2 py-3 text-center text-[#2563EB] font-semibold border-b-2 border-[#2563EB] bg-blue-50/50">
                Sign Up
            </button>
        </div>

        <!-- Form Section -->
        <div class="p-8">

            <!-- PHP Error/Success Messages -->
            <?php if($error): ?>
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded mb-6 text-sm" role="alert">
                    <p class="font-bold">Error</p>
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

            <?php if($success): ?>
                <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6 text-sm" role="alert">
                    <p class="font-bold">Success</p>
                    <p><?php echo $success; ?> <a href="login.php" class="underline font-bold hover:text-green-900">Login here</a></p>
                </div>
            <?php endif; ?>

            <form action="register.php" method="POST" class="space-y-5">
                
                <!-- Login ID Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Login ID</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- User Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <input 
                            type="text" 
                            name="login_id" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="Choose a username"
                        >
                    </div>
                </div>

                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Mail Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="user@company.com"
                        >
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Lock Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <input 
                            type="password" 
                            name="password" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="Create a password"
                        >
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Lock Check Icon -->
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <input 
                            type="password" 
                            name="confirm_password" 
                            required
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-[#2563EB] focus:outline-none transition text-gray-900 sm:text-sm placeholder-gray-400" 
                            placeholder="Repeat password"
                        >
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#2563EB] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform hover:-translate-y-0.5">
                    Create Account
                </button>
                
                <!-- Terms -->
                <p class="text-center text-xs text-gray-500 mt-4">
                    By registering, you agree to our <a href="#" class="text-[#2563EB] hover:underline">Terms</a> and <a href="#" class="text-[#2563EB] hover:underline">Privacy Policy</a>.
                </p>

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
<?php
include "../backend/config/db.php";   // adjust path if needed

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $login_id  = $_POST['login_id'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Basic Validation
    if (empty($login_id) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    }
    elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    }
    else {

        // Check if email or login id already exists
        $check = $conn->prepare("SELECT * FROM users WHERE email = ? OR login_id = ?");
        $check->bind_param("ss", $email, $login_id);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            $error = "Email or Login ID already exists!";
        } 
        else {

            // HASH PASSWORD
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // INSERT INTO DATABASE
            $stmt = $conn->prepare("
                INSERT INTO users (login_id, email, password, role) 
                VALUES (?, ?, ?, 'warehouse_staff')
            ");
            $stmt->bind_param("sss", $login_id, $email, $hashed_password);

            if ($stmt->execute()) {
                $success = "Registration successful!";
            } else {
                $error = "Failed to register: " . $conn->error;
            }
        }
    }
}
?>