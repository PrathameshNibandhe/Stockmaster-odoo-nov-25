<?php
// forgot-password.php
$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
        $messageType = "error";
    } else {
        // TODO: Implement actual email sending logic here
        // e.g., generate token, save to DB, send mail()
        
        $message = "If an account exists for <strong>" . htmlspecialchars($email) . "</strong>, we have sent password reset instructions to it.";
        $messageType = "success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 h-screen flex items-center justify-center font-sans">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        
        <!-- Header Section -->
        <div class="pt-8 pb-6 text-center px-6">
            <div class="flex justify-center mb-4">
                <div class="bg-blue-50 p-4 rounded-full">
                    <!-- Key/Lock Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#2563EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                </div>
            </div>
            <h1 class="text-2xl font-bold text-gray-900">Forgot Password?</h1>
            <p class="text-gray-500 text-sm mt-2">
                No worries! Enter your email address below and we'll send you a link to reset your password.
            </p>
        </div>

        <!-- Form Section -->
        <div class="p-8 pt-0">
            
            <?php if($message): ?>
                <div class="mb-6 p-4 rounded-lg text-sm <?php echo $messageType === 'success' ? 'bg-green-50 text-green-700 border border-green-200' : 'bg-red-50 text-red-700 border border-red-200'; ?>">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($messageType !== 'success'): ?>
            <form action="forgot-password.php" method="POST" class="space-y-5">
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
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

                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#2563EB] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform hover:-translate-y-0.5">
                    Send Reset Link
                </button>
            </form>
            <?php else: ?>
                <div class="text-center">
                    <a href="login.php" class="inline-block px-6 py-2 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition">Return to Login</a>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Footer link -->
        <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 text-center">
            <p class="text-xs text-gray-500">
                Remember your password? <a href="login.php" class="text-[#2563EB] font-semibold hover:underline">Log in</a>
            </p>
        </div>
    </div>

</body>
</html>