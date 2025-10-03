<?php
// Class Bunga untuk merepresentasikan sebuah bunga
class Bunga {
    public $nama;
    public $warna;

    // Constructor (__construct) adalah method khusus
    // yang otomatis dijalankan saat object dibuat
    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
        echo "Objek bunga dengan nama {$this->nama} dan warna {$this->warna} berhasil dibuat!<br>";
    }

    // Destructor (__destruct) adalah method khusus
    // yang otomatis dijalankan saat object dihancurkan (program selesai atau object dihapus)
    public function __destruct() {
        echo "Objek bunga {$this->nama} dengan warna {$this->warna} dihancurkan.<br>";
    }

    // Method biasa untuk menampilkan info bunga
    public function tampilkanInfo() {
        echo "Bunga ini bernama {$this->nama} dan berwarna {$this->warna}.<br>";
    }
}

// Contoh penggunaan
echo "<h2>Demo Constructor dan Destructor pada Class Bunga</h2>";

// Membuat object baru → constructor langsung dijalankan
$bunga1 = new Bunga("Mawar", "Merah");
$bunga1->tampilkanInfo();

// Setelah script selesai, destructor akan otomatis dijalankan
// dan menampilkan pesan bahwa object dihancurkan

/*
📌 Penjelasan:
- Constructor:
  • Nama method: __construct
  • Dipanggil otomatis saat object dibuat
  • Bisa dipakai untuk memberi nilai awal property

- Destructor:
  • Nama method: __destruct
  • Dipanggil otomatis saat object dihapus / program selesai
  • Bisa dipakai untuk "bersih-bersih" (misalnya menutup koneksi database, hapus file sementara, dsb)

Jadi bedanya:
- Constructor = "membangun" object (awal hidup object)
- Destructor  = "menghancurkan" object (akhir hidup object)
*/
?>