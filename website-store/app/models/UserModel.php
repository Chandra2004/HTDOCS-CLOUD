<?php
include '../../../app/core/Database.php';

// product > list-product
$sqlUser = "SELECT * FROM user";
$resultUser = mysqli_query($conn, $sqlUser);
$dataUser = mysqli_fetch_all($resultUser, MYSQLI_ASSOC);

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        header("Location: user");
    } else {
        //$gagalTambah = 'Produk gagal untuk ditambahkan';
        header("refresh:3; url=user");
        // echo "
        //     <script>
        //         alert('user gagal ditambahkan');
        //     </script>
        // ";
    }
}

// user.php > register
function register($regData) {
    global $conn;

    $email_user = htmlspecialchars($regData['email_user']);
    $password_user = mysqli_real_escape_string($conn, $regData['password_user']);
    $rePassword_user = mysqli_real_escape_string($conn, $regData['rePassword_user']);

    // Upload Gambar
    $photo_user = upload();
    if (!$photo_user) {
        return false;
    }

    // Pastikan password_user dan rePassword_user cocok
    global $wrongPass;
    if ($password_user !== $rePassword_user) {
        // Password tidak cocok, echo pesan kesalahan
        $wrongPass = 'Password tidak cocok';
        return 0;
    }

    $result = mysqli_query($conn, "SELECT email_user FROM user WHERE email_user = '$email_user'");

    global $emailFound;
    if (mysqli_fetch_assoc($result)) {
        $emailFound = 'email sudah terdaftar';
        return 0;
    }

    // Enkripsi password
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO `user` (`id`, `email_user`, `password_user`, `photo_user`)  VALUES(
        NULL,
        '$email_user',
        '$password_user',
        '$photo_user'
    )");

    return mysqli_affected_rows($conn);
}

function upload() {
    $nameFile = $_FILES['photo_user']['name'];
    $sizeFile = $_FILES['photo_user']['size'];
    $error = $_FILES['photo_user']['error'];
    $tmpName = $_FILES['photo_user']['tmp_name'];

    // cek pilih gambar terlebih dahulu
    
    global $errPilihanGambar;
    if ($error === 4) {
        $errPilihanGambar = "Pilih Gambar Terlebih Dahulu"; // ---------------------------------------------------------------------------------------
        
        // echo "
        //     <script>
        //         alert('Pilih gambar terlebih dahulu');
        //     </script>
        // ";
        return false;
    }

    // cek yang diupload adalah gambar
    $extensionPhotoValid = ['jpg', 'jpeg', 'png'];
    $extensionPhoto = explode('.', $nameFile);
    $extensionPhoto = strtolower(end($extensionPhoto));
    
    global $errEkstensiGambar;
    if (!in_array($extensionPhoto, $extensionPhotoValid)) {
        $errEkstensiGambar = "Yang Anda Upload Bukan Gambar"; // ---------------------------------------------------------------------------------------
        
        // echo "
        //     <script>
        //         alert('Yang anda upload bukan gambar');
        //     </script>
        // "
        // ;

        // Hapus gambar yang diunggah
        if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
            unlink('../../../app/assets/users/user-photo/' . $nameFile);
        }

        return false;
    }

    // cek ukuran gambar terlebih dahulu
    
    global $errUkuranGambar;
    if ($sizeFile > 2000000) {
        $errUkuranGambar = "Ukuran Gambar Terlalu Besar"; // ---------------------------------------------------------------------------------------

        // echo "
        //     <script>
        //         alert('Ukuran gambar terlalu besar');
        //     </script>
        // ";

        // Hapus gambar yang diunggah
        if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
            unlink('../../../app/assets/users/user-photo/' . $nameFile);
        }

        return false;
    }

    // Nama Produk sudah ada atau belum
    global $conn;
    $email_user = mysqli_real_escape_string($conn, $_POST['email_user']);
    $result = mysqli_query($conn, "SELECT email_user FROM user WHERE email_user = '$email_user'");
    
    global $errUser;
    if (mysqli_fetch_assoc($result)) {
        $errUser = "User Sudah Terdaftar"; // ---------------------------------------------------------------------------------------

        // echo "
        //     <script>
        //         alert('Produk sudah terdaftar');  
        //     </script>
        // ";

        // Hapus gambar yang diunggah
        if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
            unlink('../../../app/assets/users/user-photo/' . $nameFile);
        }
        
        return false;
    }

    // lolos pengecekan gambar
    $newName = uniqid() . '.' . $extensionPhoto;
    $route = '../../../app/assets/users/user-photo/' . $newName;

    global $errNamaBaru;
    if (move_uploaded_file($tmpName, $route)) {
        return $newName;
    } else {
        $errNamaBaru = "Gagal Mengganti Nama Gambar"; // ---------------------------------------------------------------------------------------

        echo "
            <script>
                alert('Gagal mengganti nama gambar');
            </script>
        ";
        return false;
    }
}
