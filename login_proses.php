<?php 
include 'koneksi.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);
$tmp = mysqli_query($konek, "SELECT * FROM tb_user WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($tmp)) {
	$data = mysqli_fetch_assoc($tmp);
	$_SESSION['id'] = $data['id'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = 'login';
	$_SESSION['foto'] = $data['foto'];

	echo "<script>
	alert('Anda berhasil login');
	location.href='index.php';
	</script>";
}
else{
	echo "<script>
	alert('Pw dan pw tak sesuai');
	location.href='login.php';
	</script>";
}

 ?>