<?php
include 'koneksi.php';
$id = $_GET['id_hapus'];
$hps = mysqli_query($konek,"DELETE FROM tb_jurusan WHERE id_jurusan='$id'");
if ($hps) {
    echo "<script>
      alert('Data berhasil di dihapus');
      window.location.href='?page=jurusan';
   </script>";
}
?>