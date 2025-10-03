<?php
class Film {
    public $judul;
    public $kategori;
    public $hargaDasar;
}

class Tiket {
    public $film;
    public $umurPenonton;

    public function __construct() {
        
    }

    public function hitungHarga($kategori, $hargaDasar, $umurPenonton) {

    }
}