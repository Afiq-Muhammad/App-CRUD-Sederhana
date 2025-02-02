<?php
include 'koneksi.php';
$kel = $_POST['kel'];
$msk = mysqli_query($konek, "INSERT INTO tb_kelas VALUES(null,'$kel')");

if ($msk) {
    echo "<script>
        alert('Data berhasil di tambahkan');
        window.location.href='?page=kelas';
    </script>";
}
?>