<?php 
include 'koneksi.php';
$id = $_GET['id_hapus'];
$hps = mysqli_query($konek, "DELETE FROM tb_siswa WHERE nisn='$id'");

if ($hps) {
    echo "<script>
        alert('Data berhasil di hapus');
        window.location.href='?page=siswa';
    </script>";
}
?>