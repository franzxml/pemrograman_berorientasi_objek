<?php
// Class PersegiPanjang digunakan untuk merepresentasikan bangun datar persegi panjang
class PersegiPanjang {
    // Properti panjang dan lebar
    public $panjang;
    public $lebar;

    // Constructor untuk memberi nilai awal panjang dan lebar
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method untuk menghitung luas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // Method untuk menghitung keliling
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Contoh penggunaan
$persegi = new PersegiPanjang(10, 5);
echo "Panjang: {$persegi->panjang}, Lebar: {$persegi->lebar}<br>";
echo "Luas: " . $persegi->hitungLuas() . "<br>";
echo "Keliling: " . $persegi->hitungKeliling() . "<br>";