<?php
require_once 'classes/Mahasiswa.php';
require_once 'config/Database.php';

$db = new Database();
$mhs = new Mahasiswa($db->getConnection()); // param: PDO
$data = $mhs->readAll();

if (isset($_COOKIE['success'])) {
    echo "<script>alert('Berhasil " . $_COOKIE['success'] . " Data');</script>";
}
?>
<html>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah.php">Tambah Data</a><br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>