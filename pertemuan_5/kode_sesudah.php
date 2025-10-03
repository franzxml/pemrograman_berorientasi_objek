<?php
// Class Mahasiswa setelah dimodifikasi
class Mahasiswa {
    // Property bersifat public (bisa diakses bebas)
    public $nama;
    public $nim;
    public $prodi;

    // Property bersifat protected → hanya bisa diakses di class ini & turunannya
    protected $ipk;

    // Property bersifat private → hanya bisa diakses di dalam class ini sendiri
    private $password;

    // Method untuk mengatur nilai IPK
    public function setNilaiIPK($ipk) {
        $this->ipk = $ipk;
    }

    // Method untuk mengatur password
    public function setPassword($password) {
        $this->password = $password;
    }

    // Method protected (hanya bisa dipanggil di dalam class / child class)
    protected function getNilaiIPK() {
        return "Nilai IPK mahasiswa adalah $this->ipk";
    }

    // Method private (hanya bisa dipanggil di dalam class ini)
    private function getPassword() {
        return "Password akun mahasiswa adalah $this->password";
    }

    // Method public untuk mengakses method protected
    public function tampilkanIPK() {
        return $this->getNilaiIPK();
    }

    // Method public untuk mengakses method private
    public function tampilkanPassword() {
        return $this->getPassword();
    }
}

// Contoh penggunaan
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Budi";
$mahasiswa->nim = "123456";
$mahasiswa->prodi = "Informatika";

// Set data IPK & password melalui method public
$mahasiswa->setNilaiIPK(3.75);
$mahasiswa->setPassword("abcdefg");

// Tampilkan data
echo "<h2>Data Mahasiswa</h2>";
echo "Nama: $mahasiswa->nama <br>";
echo "NIM: $mahasiswa->nim <br>";
echo "Prodi: $mahasiswa->prodi <br>";
echo $mahasiswa->tampilkanIPK() . "<br>";
echo $mahasiswa->tampilkanPassword() . "<br>";

/*
Penjelasan singkat:
- Property $ipk bersifat protected → tidak bisa dipanggil langsung di luar class.
- Property $password bersifat private → lebih ketat, hanya class ini yang bisa akses.
- Agar tetap bisa ditampilkan, kita buat method public sebagai "jembatan".
- Inilah contoh penggunaan enkapsulasi dalam OOP.
*/
?>