<?php
// Class User merepresentasikan data user dalam aplikasi
class User {
    private $username;
    private $password;

    // Constructor isi dengan data dummy (username: admin, password: 12345)
    public function __construct() {
        $this->username = "admin";
        $this->password = "12345";
    }

    // Method untuk login, menerima input user
    public function login($username, $password) {
        if ($username === $this->username && $password === $this->password) {
            echo "Login berhasil! Selamat datang, $username.<br>";
        } else {
            echo "Login gagal! Username atau password salah.<br>";
        }
    }
}

// Contoh simulasi login
$user = new User();
$user->login("admin", "12345");   // Login berhasil
$user->login("user", "abcde");    // Login gagal