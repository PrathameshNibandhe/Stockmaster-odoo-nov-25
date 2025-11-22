<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>StockMaster - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 h-screen flex items-center justify-center font-sans">

<div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">

  <!-- Header -->
  <div class="pt-8 pb-6 text-center">
    <h1 class="text-2xl font-bold text-gray-900">Welcome Back</h1>
    <p class="text-gray-500 text-sm mt-1">Sign in to access your inventory</p>
  </div>

  <!-- Form -->
  <div class="p-8">
    <form method="POST">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email" required
               class="block w-full border rounded-lg px-3 py-2.5" placeholder="Enter your Email">
      </div>

      <div class="mt-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required
               class="block w-full border rounded-lg px-3 py-2.5" placeholder="••••••••">
      </div>

      <button type="submit" name="login"
              class="mt-6 w-full py-3 rounded-lg bg-blue-600 text-white font-bold">
        Sign In
      </button>
    </form>

    <!-- Error / Success message -->
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p class='mt-3 text-red-600'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<p class='mt-3 text-green-600'>" . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }
    ?>
  </div>
</div>

</body>
</html>

<?php
// ✅ Simple PHP login logic below the HTML
if (isset($_POST['login'])) {
  require_once __DIR__ . "/../backend/config/db.php";
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            // ✅ Login success
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: dashboard.php");
            exit;
        } else {
            // ❌ Login failed
            $_SESSION['error'] = "Invalid email or password!";
            header("Location: login.php");
            exit;
        }
    } catch (PDOException $e) {
        echo "DB Error: " . $e->getMessage();
    }
}
?>
