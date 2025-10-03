<?php
// Class Buku untuk menyimpan data sebuah buku
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }
}

// Class Perpustakaan untuk mengelola daftar buku
class Perpustakaan {
    public $daftarBuku = [];

    // Method untuk menambahkan buku ke dalam daftar
    public function tambahBuku($buku) {
        $this->daftarBuku[] = $buku;
    }

    // Method untuk menampilkan semua buku
    public function tampilkanBuku() {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        foreach ($this->daftarBuku as $buku) {
            echo "Judul: {$buku->judul}, Penulis: {$buku->penulis}, Tahun: {$buku->tahun}<br>";
        }
    }
}

// Implementasi
$perpus = new Perpustakaan();
$perpus->tambahBuku(new Buku("Laskar Pelangi", "Andrea Hirata", 2005));
$perpus->tambahBuku(new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980));
$perpus->tambahBuku(new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009));

$perpus->tampilkanBuku();