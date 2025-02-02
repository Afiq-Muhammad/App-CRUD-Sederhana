<?php
include 'koneksi.php';
$id = $_GET['id_hapus'];
$hps = mysqli_query($konek,"DELETE FROM tb_kelas WHERE id_kelas='$id'");

if ($hps) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location.href='?page=kelas';
    </script>";
}
?>