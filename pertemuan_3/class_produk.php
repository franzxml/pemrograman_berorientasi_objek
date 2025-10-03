<?php
// Class Produk digunakan untuk merepresentasikan sebuah produk di toko
class Produk {
    public $nama;
    public $harga;
    public $stok;

    // Constructor memberi nilai awal
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method untuk menampilkan info produk
    public function tampilkanInfo() {
        echo "Produk: {$this->nama}, Harga: Rp{$this->harga}, Stok: {$this->stok}<br>";
    }

    // Method untuk membeli produk
    public function beliProduk($jumlah) {
        if ($jumlah <= $this->stok) {
            $this->stok -= $jumlah; // stok berkurang
            echo "Anda berhasil membeli $jumlah {$this->nama}.<br>";
        } else {
            echo "Stok {$this->nama} tidak mencukupi.<br>";
        }
    }
}

// Contoh penggunaan
$produk1 = new Produk("Laptop", 7000000, 10);
$produk1->tampilkanInfo();
$produk1->beliProduk(3);
$produk1->tampilkanInfo();