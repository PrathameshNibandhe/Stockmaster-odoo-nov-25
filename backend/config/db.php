<?php
$host = "srv595.hstgr.io";
$dbname = "u307056987_d1";
$user = "u307056987_dpps";
$pass = "Dpps@2027";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
