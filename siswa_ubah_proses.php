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

$ubh = mysqli_query($konek, "UPDATE tb_siswa SET nama_siswa='$nama_siswa', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', email='$email', no_hp='$no_hp', id_jurusan='$jus', id_kelas='$kel', alamat='$alamat' WHERE nisn='$nisn'");

if ($ubh) {
    echo "<script>
        alert('Data berhasil diubah');
        window.location.href='?page=siswa';
   </script>";
}
?>