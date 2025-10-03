<?php
// Class Mahasiswa merepresentasikan data seorang mahasiswa
class Mahasiswa {
  // Property adalah data yang dimiliki oleh class
  // Secara default di sini semua property bersifat "var" → artinya public (bisa diakses bebas)
  var $nama;
  var $nim;
  var $prodi;
  var $ipk;
  var $password;

  // Method protected → hanya bisa diakses oleh class ini dan class turunannya (child class)
  protected function getNilaiIPK() {
    return "Nilai IPK mahasiswa adalah $this->ipk";
  }

  // Method private → hanya bisa diakses di dalam class ini saja
  private function getPassword() {
    return "Password akun mahasiswa adalah $this->password";
  }

  // Method public → dipakai untuk memberi nilai pada property ipk
  function setNilaiIPK($ipk) {
    $this->ipk = $ipk;
  }

  // Method public → dipakai untuk memberi nilai pada property password
  function setPassword($password) {
    $this->password = $password;
  }
}

// Membuat object baru dari class Mahasiswa
$mahasiswa = new Mahasiswa();

// Mengatur password menggunakan method setPassword
// Namun password ini masih bisa diakses dari luar karena property awalnya public
$mahasiswa->setPassword('abcdefg'); // contoh penggunaan method untuk menetapkan nilai property

/*
Catatan:
- Pada versi "sebelum", property $ipk dan $password masih public (default var).
- Artinya siapapun bisa langsung mengakses $mahasiswa->ipk atau $mahasiswa->password.
- Ini kurang aman, karena seharusnya IPK (nilai akademik) dan password (data login) lebih dilindungi.
- Pada versi "sesudah", kita akan ubah property ini menjadi protected & private,
  lalu gunakan method public sebagai "jembatan" untuk akses sesuai aturan OOP (enkapsulasi).
*/
?>