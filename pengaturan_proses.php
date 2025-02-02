<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id'];
    $target_dir = "image/"; // Directory where images will be uploaded
    $random_name = uniqid() . '.' . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION); // Generate a random name
    $target_file = $target_dir . $random_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>
        alert('File yang diupload bukan gambar!');
        window.location.href='?page=pengaturan';
        </script>";
        $uploadOk = 0;
    }

    // Check file size (limit to 2MB)
    if ($_FILES["foto"]["size"] > 2000000) {
        echo "<script>
        alert('Maaf, ukuran file terlalu besar!');
        window.location.href='?page=pengaturan';
        </script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>
        alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan!');
        window.location.href='?page=pengaturan';
        </script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>
        alert('Maaf, file tidak dapat diupload!');
        window.location.href='?page=pengaturan';
        </script>";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            // Update the database with the new photo path
            $query = mysqli_query($konek, "UPDATE tb_user SET foto='$random_name' WHERE id='$id_user'");
            if ($query) {
                // Update the session variable to reflect the new photo
                $_SESSION['foto'] = $random_name;
                echo "<script>
                alert('Foto berhasil diubah!');
                window.location.href='?page=pengaturan';
                </script>";
            } else {
                echo "<script>
                </script>";
            }
        } else {
            echo "<script>
            alert('Maaf, terjadi kesalahan saat mengupload file!');
            window.location.href='?page=pengaturan';
            </script>";
        }
    }
}
?>
