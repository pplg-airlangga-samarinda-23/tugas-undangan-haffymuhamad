<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $ucapan = isset($_POST['ucapan']) ? $_POST['ucapan'] : '';
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';

    if ($nama != "" && $ucapan != "" && $keterangan != "") {
        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
        $connection->query($sql);
    }

    header("Location: http://localhost/tugas-undangan-haffymuhamad-1");
    exit();
}
?>
