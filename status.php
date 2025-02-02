<?php
include 'koneksi.php';

// Validate input parameters
$id = isset($_GET['id']) ? mysqli_real_escape_string($konek, $_GET['id']) : null;
$status = isset($_GET['status']) ? mysqli_real_escape_string($konek, $_GET['status']) : null;

if ($id && $status !== null) {
    $st = mysqli_query($konek, "UPDATE tb_siswa SET status='$status' WHERE nisn='$id'");
    if ($st) {
        echo "<script>
          alert('Status berhasil diubah');
          window.location.href='?page=siswa';
        </script>";
    } else {
        echo "<script>
          alert('Gagal mengubah status');
          window.location.href='?page=siswa';
        </script>";
    }
} else {
    echo "<script>
      alert('Parameter tidak valid');
      window.location.href='?page=siswa';
    </script>";
}
?>
