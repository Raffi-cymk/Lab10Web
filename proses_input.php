<?php
include "database.php";
$db = new Database();

$nim    = $_POST['txtnim'] ?? '';
$nama   = $_POST['txtnama'] ?? '';
$alamat = $_POST['txtalamat'] ?? '';

$data = [
    'nim'    => $nim,
    'nama'   => $nama,
    'alamat' => $alamat
];

if ($db->insert('mahasiswa', $data)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data.";
}
?>
