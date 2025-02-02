<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$hasil = mysqli_query($konek,"SELECT email FROM tb_user WHERE email='$email'");
if (mysqli_fetch_assoc($hasil)) {
    echo "<script>
        alert('Email sudah terdaftar');
        window.location.href = 'register.php'; // Redirect ke halaman registrasi
    </script>";
    exit(); // Hentikan eksekusi skrip
}

// 3. Validasi password (cek apakah password dan konfirmasi password sesuai)
if ($password !== $password2) {
    echo "<script>
        alert('Konfirmasi password tidak sesuai');
        window.location.href = 'register.php'; // Redirect ke halaman registrasi
    </script>";
    exit(); // Hentikan eksekusi skrip
}

// 4. Jika semua validasi berhasil, lakukan INSERT
$pw = md5($password);
$ins = mysqli_query($konek, "INSERT INTO tb_user VALUES(null, '$nama', '$email', '$pw', null)");
if ($ins) {
    echo "<script>
        alert('Registrasi berhasil');
        window.location.href = 'login.php'; // Redirect ke halaman login
    </script>";
} else {
    echo "<script>
        alert('Registrasi gagal');
        window.location.href = 'register.php'; // Redirect ke halaman registrasi
    </script>";
}
?>