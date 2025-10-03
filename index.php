<?php
// index.php adalah file utama (entry point) dari aplikasi.
// Ketika user membuka project ini lewat browser, yang pertama kali dijalankan adalah file index.php

// Dengan require_once, kita bisa memanggil file PHP lain.
// Misalnya, kita ingin langsung mengarahkan pengguna ke file home.php yang ada di folder tugas_1.
require_once "tugas_1/home.php";

// Catatan:
// - "require_once" akan memastikan file home.php hanya dipanggil 1 kali.
// - Jika file tidak ditemukan, akan muncul error agar kita tahu ada masalah.