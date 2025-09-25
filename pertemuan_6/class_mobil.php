<?php
class mobil {
    public $merk;
    public $warna;
    public $harga;
    public $pemilik = "frans";

    public function nyalakan_mobil() {
        return "Mobil " . ($this->merk) . " warna " . ($this->warna) . " dengan harga " . ($this->harga) . " telah dinyalakan.". " Pemilik mobil ini adalah " . ($this->pemilik);
    }

    public function matikan_mobil() {
        return "Mobil " . ($this->merk) . " warna " . ($this->warna) . " dengan harga " . ($this->harga) . " telah dimatikan.";
    }
}
$mobil1 = new mobil();
$mobil1->merk = "Toyota";
$mobil1->warna = "Hitam";
echo $mobil1->nyalakan_mobil();








