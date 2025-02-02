<?php 
include 'koneksi.php';

$id = $_POST['id'];
$kel = $_POST['kel'];
$ubh = mysqli_query($konek,"UPDATE tb_kelas SET nama_kelas='$kel' WHERE id_kelas='$id'");

if ($ubh) {
    echo "<script>
        alert('Data berhasil diubah');
        window.location.href='?page=kelas';
    </script>";
}
?>