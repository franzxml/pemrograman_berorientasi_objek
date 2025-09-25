<?php
class Bunga {
    public $nama;
    public $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
        echo "Objek bunga {$this->nama} dengan warna {$this->warna} telah dibuat.<br>";
    }

    public function infoBunga() {
        echo "Ini adalah bunga {$this->nama} berwarna {$this->warna}.<br>";
    }

    public function __destruct() {
        echo "Objek bunga {$this->nama} telah dihancurkan.<br>";
    }
}

$bunga1 = new Bunga("Mawar", "Merah");
$bunga1->infoBunga();

$bunga2 = new Bunga("Melati", "Putih");
$bunga2->infoBunga();
?>