<?php
/*
=========================================================
 CHEATSHEET UTS PBO (PHP)
=========================================================
 Tipe Soal: 
 1. Modifikasi Kode
 2. Penjelasan Kode
 3. Studi Kasus
=========================================================
*/

/* ---------------------------------------
 1. SOAL MODIFIKASI KODE
-----------------------------------------*/

// Diberikan kode berikut:
class Mahasiswa {
    var $nama;
    var $nim;

    function info() {
        return "Nama: $this->nama, NIM: $this->nim";
    }
}

// Tugas: Tambahkan constructor untuk mengisi $nama dan $nim 
// otomatis saat object dibuat, lalu buat destructor yang menampilkan 
// pesan "Objek Mahasiswa $this->nama dihapus."



/* ---------------------------------------
 2. SOAL PENJELASAN KODE
-----------------------------------------*/

// Perhatikan kode berikut:
class Hewan {
    private $jenis;

    function __construct($jenis) {
        $this->jenis = $jenis;
    }

    protected function getJenis() {
        return $this->jenis;
    }
}

class Kucing extends Hewan {
    var $nama;

    function __construct($nama, $jenis) {
        parent::__construct($jenis); // memanggil constructor parent
        $this->nama = $nama;
    }

    function info() {
        return "$this->nama adalah seekor " . $this->getJenis();
    }
}

$k = new Kucing("Tom", "Kucing");
echo $k->info();

// Tugas: Jelaskan peran private, protected, dan pemanggilan parent::__construct()



/* ---------------------------------------
 3. SOAL STUDI KASUS
-----------------------------------------*/

// Studi kasus: Buat class "Kendaraan" dengan properti merk & jenis.
// Kemudian buat class "Mobil" yang mewarisi dari Kendaraan, 
// dan tambahkan properti khusus $warna.
// Tampilkan informasi mobil lengkap menggunakan metode infoMobil().

// Clue: gunakan constructor di kedua class
// Output yang diharapkan (contoh):
// "Avanza adalah kendaraan jenis Mobil dengan warna Hitam."



/* =======================================
 CATATAN UNTUK BELAJAR CEPAT:
 - Class = cetakan/blueprint
 - Object = hasil nyata dari class
 - Property = variabel di dalam class
 - Method = fungsi di dalam class
 - $this = merujuk ke object saat ini
 - Constructor (__construct) = otomatis jalan saat object dibuat
 - Destructor (__destruct) = otomatis jalan saat object dihapus
 - Enkapsulasi:
    public    -> bisa diakses di mana saja
    protected -> hanya bisa diakses di class itu & turunannya
    private   -> hanya bisa diakses di class itu sendiri
 - Inheritance (extends) = pewarisan
 - parent::__construct() = memanggil constructor parent
 - Polimorfisme = method yang sama, perilaku bisa berbeda
==========================================
*/
?>
