<?php 
include 'koneksi.php';
$passlama = md5($_POST['passlama']);
$passbaru = md5($_POST['passbaru']);
$konfpass = md5($_POST['konfpass']);
$id_user = $_SESSION['id'];
$cekpass = mysqli_query($konek,"SELECT * FROM tb_user WHERE id='$id_user' AND password='$passlama'");
if (mysqli_num_rows($cekpass) > 0) {
    if ($passbaru === $konfpass) {
        $query = mysqli_query($konek,"UPDATE tb_user SET password='$passbaru' WHERE id='$id_user'");
        if ($query) {
            echo "<script>
            alert('Password berhasil diubah!');
            window.location.href='logout.php';
            </script>";
        }else{
            echo "<script>
            alert('Gagal mengubah password!');
            window.location.href='?page=pengaturan';
            </script>";
        }
    }else{
        echo "<script>
        alert('Konfirmasi pw tak sesuai!');
        window.location.href='?page=pengaturan';
        </script>";
    }
}else{
    echo "<script>
        alert('Pw lama salah!');
        window.location.href='?page=pengaturan';
        </script>";
}
?>