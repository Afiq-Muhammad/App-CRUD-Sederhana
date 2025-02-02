<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jus = $_POST['jus'];
$kel = $_POST['kel'];
$alamat = $_POST['alamat'];
$sa= mysqli_query($konek,"INSERT INTO tb_siswa VALUES('$nisn','$nama_siswa','$tempat_lahir','$tanggal_lahir','$jk','$email','$no_hp','$jus','$kel','$alamat',0)");

if ($sa) {
   echo "<script>
      alert('Data berhasil di tambahkan');
      window.location.href='?page=siswa';
   </script>";
}
?>