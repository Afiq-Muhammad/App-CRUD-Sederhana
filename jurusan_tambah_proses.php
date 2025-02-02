<?php
include 'koneksi.php';
$jus = $_POST['jus'];
$tmb = mysqli_query($konek, "INSERT INTO tb_jurusan VALUES(null,'$jus')");

if ($tmb) {
    echo "<script>
      alert('Data berhasil di tambahkan');
      window.location.href='?page=jurusan';
    </script>";
}
?>