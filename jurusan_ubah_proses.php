<?php 
include 'koneksi.php';
$id = $_POST['id'];
$jus = $_POST['jus'];
$ubh = mysqli_query($konek,"UPDATE tb_jurusan SET nama_jurusan='$jus' WHERE id_jurusan='$id'");
if ($ubh) {
    echo "<script>
      alert('Data berhasil di ubah');
      window.location.href='?page=jurusan';
    </script>";
}
?>