<?php
// home.php adalah halaman utama aplikasi.
// File ini akan menampilkan pesan sambutan kepada pengguna.

// Kita bisa menampilkan HTML biasa dengan echo.
echo "<h1>Selamat Datang di Pemrograman Berorientasi Objek</h1>";
echo "<p>Ini adalah halaman <b>home.php</b> yang ada di dalam folder <b>tugas_1</b>.</p>";

// Kita juga bisa menambahkan logika sederhana dengan PHP
$nama = "Pengunjung"; // Variabel untuk menyimpan nama

// Menampilkan teks menggunakan variabel
echo "<p>Halo, $nama! Senang bertemu denganmu di sini 😊</p>";

// Catatan:
// - Teks yang ditulis di dalam echo akan ditampilkan di browser.
// - Variabel diawali dengan tanda $.
// - Kita bisa menggabungkan PHP dengan HTML agar tampilan lebih menarik.
?>