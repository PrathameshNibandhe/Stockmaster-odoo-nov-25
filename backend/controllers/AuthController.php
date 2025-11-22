<?php
session_start();
require_once __DIR__ . '/../config/db.php'; // PDO $pdo

class AuthController {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // 🔐 LOGIN
    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            header("Location: ../../public/dashboard.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password!";
            header("Location: ../../public/auth/login.php");
            exit;
        }
    }

    // 📝 SIGNUP
    public function signup($name, $email, $password) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $_SESSION['error'] = "Email already registered!";
            header("Location: ../../public/auth/signup.php");
            exit;
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users(name, email, password_hash, role) VALUES (?, ?, ?, 'staff')");
        $stmt->execute([$name, $email, $hash]);

        $_SESSION['success'] = "Signup successful! Please login.";
        header("Location: ../../public/auth/login.php");
        exit;
    }

    // 📤 SEND OTP
    public function sendOtp($email) {
        $otp = random_int(100000, 999999);
        $hash = password_hash((string)$otp, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("REPLACE INTO password_resets(email, otp_hash, expires_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 10 MINUTE))");
        $stmt->execute([$email, $hash]);

        // TODO: Send OTP via email/SMS
        $_SESSION['otp_sent'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['info'] = "OTP sent to your email.";
        header("Location: ../../public/auth/otp.php");
        exit;
    }

    // ✅ VERIFY OTP + RESET PASSWORD
    public function verifyOtp($email, $otp, $newPassword) {
        $stmt = $this->db->prepare("SELECT otp_hash, expires_at FROM password_resets WHERE email = ?");
        $stmt->execute([$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row || new DateTime() > new DateTime($row['expires_at'])) {
            $_SESSION['error'] = "OTP expired or invalid.";
            header("Location: ../../public/auth/reset.php");
            exit;
        }

        if (!password_verify($otp, $row['otp_hash'])) {
            $_SESSION['error'] = "Incorrect OTP.";
            header("Location: ../../public/auth/otp.php");
            exit;
        }

        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("UPDATE users SET password_hash = ? WHERE email = ?");
        $stmt->execute([$hash, $email]);

        $this->db->prepare("DELETE FROM password_resets WHERE email = ?")->execute([$email]);

        $_SESSION['success'] = "Password reset successful!";
        header("Location: ../../public/auth/login.php");
        exit;
    }
}
