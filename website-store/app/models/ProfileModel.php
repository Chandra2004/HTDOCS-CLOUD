<?php
include '../../../app/core/Database.php';

if (isset($_POST['submit_upprofile'])) {
    // Cek apakah ada unggahan gambar
    if (isset($_FILES['photo_user']) && $_FILES['photo_user']['error'] !== 4) {
        $photo_upload_result = uploadUserPhoto($_FILES['photo_user']);
        if ($photo_upload_result['success']) {
            // Jika unggahan gambar berhasil, perbarui data pengguna
            if (upuser($_POST, $photo_upload_result['fileName']) > 0) {
                header("Location: profile");
                exit;
            } else {
                header("Location: profile");
            }
        } else {
            echo "Error: " . $photo_upload_result['error'];
        }
    } else {
        // Jika tidak ada unggahan gambar, perbarui data pengguna tanpa mengubah foto
        if (upuser($_POST) > 0) {
            header("Location: profile");
            exit;
        } else {
            header("Location: profile");
        }
    }
}

function upuser($user, $photoFileName = null) {
    global $conn;

    $id_user = $user['id'];
    $name_user = htmlspecialchars($user['name_user']);
    $username_user = htmlspecialchars($user['username_user']);
    $email_user = htmlspecialchars($user['email_user']);
    $numphone_user = ($user['numphone_user']);
    $nik_user = ($user['nik_user']);
    $joindate_user = ($user['joindate_user']);
    $borndate_user = ($user['borndate_user']);
    $lastschool_user = htmlspecialchars($user['lastschool_user']);
    $address_user = htmlspecialchars($user['address_user']);
    $whatsapp_user = ($user['whatsapp_user']);
    $instagram_user = htmlspecialchars($user['instagram_user']);
    $tiktok_user = htmlspecialchars($user['tiktok_user']);
    $facebook_user = htmlspecialchars($user['facebook_user']);

    // Jika ada nama file gambar baru, perbarui kolom 'photo_user'
    $photo_update_sql = '';
    if ($photoFileName) {
        $photo_update_sql = ", photo_user = '$photoFileName'";
    }

    $_SESSION['name_display'] = $name_user;
    $_SESSION['username_display'] = $username_user;
    $_SESSION['email_display'] = $email_user;
    $_SESSION['numphone_display'] = $numphone_user;
    $_SESSION['nik_display'] = $nik_user;
    $_SESSION['joindate_display'] = $joindate_user;
    $_SESSION['borndate_display'] = $borndate_user;
    $_SESSION['lastschool_display'] = $lastschool_user;
    $_SESSION['address_display'] = $address_user;
    $_SESSION['whatsapp_display'] = $whatsapp_user;
    $_SESSION['instagram_display'] = $instagram_user;
    $_SESSION['tiktok_display'] = $tiktok_user;
    $_SESSION['facebook_display'] = $facebook_user;
    $_SESSION['photo_display'] = $photoFileName;

    // Ambil nama gambar lama
    $query = "SELECT photo_user FROM user WHERE id = '$id_user'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $oldPhoto = $row['photo_user'];

    $sql = "UPDATE user SET name_user = '$name_user', username_user = '$username_user', email_user = '$email_user', numphone_user = $numphone_user, nik_user = $nik_user, joindate_user = '$joindate_user', borndate_user = '$borndate_user', lastschool_user = '$lastschool_user', address_user = '$address_user', whatsapp_user = $whatsapp_user, instagram_user = '$instagram_user', tiktok_user = '$tiktok_user', facebook_user = '$facebook_user' $photo_update_sql WHERE id = '$id_user'";

    if (mysqli_query($conn, $sql)) {
        // Jika query pembaruan berhasil, hapus gambar lama jika ada dan ganti dengan gambar baru
        if ($photoFileName && $oldPhoto) {
            $oldPhotoPath = '../../../app/assets/users/user-photo/' . $oldPhoto;
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }
        return mysqli_affected_rows($conn);
    }

    return false;
}

function uploadUserPhoto($file) {
    $uploadDirectory = '../../../app/assets/users/user-photo/';
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxFileSize = 2 * 1024 * 1024; // 2MB

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmpName = $file['tmp_name'];

    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    // Validasi ekstensi file
    if (!in_array($fileExtension, $allowedExtensions)) {
        return ['success' => false, 'error' => 'Hanya file JPG, JPEG, atau PNG yang diperbolehkan.'];
    }

    // Validasi ukuran file
    if ($fileSize > $maxFileSize) {
        return ['success' => false, 'error' => 'Ukuran file melebihi batas maksimum (2MB).'];
    }

    // Generate nama unik baru untuk file gambar
    $newFileName = uniqid() . '.' . $fileExtension;
    $destination = $uploadDirectory . $newFileName;

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    if (move_uploaded_file($fileTmpName, $destination)) {
        return ['success' => true, 'fileName' => $newFileName];
    } else {
        return ['success' => false, 'error' => 'Gagal mengunggah file.'];
    }
}

// 28092004chandra
// function upuser($user, $photoFileName = null) {
//     global $conn;

//     $id_user = $user['id'];
//     $name_user = htmlspecialchars($user['name_user']);
//     $username_user = htmlspecialchars($user['username_user']);
//     $email_user = htmlspecialchars($user['email_user']);
//     $numphone_user = ($user['numphone_user']);
//     $nik_user = ($user['nik_user']);
//     $joindate_user = ($user['joindate_user']);
//     $borndate_user = ($user['borndate_user']);
//     $lastschool_user = htmlspecialchars($user['lastschool_user']);
//     $address_user = htmlspecialchars($user['address_user']);
//     $whatsapp_user = ($user['whatsapp_user']);
//     $instagram_user = htmlspecialchars($user['instagram_user']);
//     $tiktok_user = htmlspecialchars($user['tiktok_user']);
//     $facebook_user = htmlspecialchars($user['facebook_user']);

//     // Jika ada nama file gambar baru, perbarui kolom 'photo_user'
//     $photo_update_sql = '';
//     if ($photoFileName) {
//         $photo_update_sql = ", photo_user = '$photoFileName'";
//     }

//     $sql = "UPDATE user SET name_user = '$name_user', username_user = '$username_user', email_user = '$email_user', numphone_user = $numphone_user, nik_user = $nik_user, joindate_user = '$joindate_user', borndate_user = '$borndate_user', lastschool_user = '$lastschool_user', address_user = '$address_user', whatsapp_user = $whatsapp_user, instagram_user = '$instagram_user', tiktok_user = '$tiktok_user', facebook_user = '$facebook_user' $photo_update_sql WHERE id = '$id_user'";

//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// function uploadUserPhoto($file) {
//     $uploadDirectory = '../../../app/assets/users/user-photo/';
//     $allowedExtensions = ['jpg', 'jpeg', 'png'];
//     $maxFileSize = 2 * 1024 * 1024; // 2MB

//     $fileName = $file['name'];
//     $fileSize = $file['size'];
//     $fileTmpName = $file['tmp_name'];

//     $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

//     // Validasi ekstensi file
//     if (!in_array($fileExtension, $allowedExtensions)) {
//         return ['success' => false, 'error' => 'Hanya file JPG, JPEG, atau PNG yang diperbolehkan.'];
//     }

//     // Validasi ukuran file
//     if ($fileSize > $maxFileSize) {
//         return ['success' => false, 'error' => 'Ukuran file melebihi batas maksimum (2MB).'];
//     }

//     // Hapus file gambar lama jika ada
//     if (file_exists($uploadDirectory . $fileName)) {
//         unlink($uploadDirectory . $fileName);
//     }

//     $newFileName = 'user_photo_' . $_POST['id'] . '.' . $fileExtension;
//     $destination = $uploadDirectory . $newFileName;

//     // Pindahkan file yang diunggah ke direktori yang ditentukan
//     if (move_uploaded_file($fileTmpName, $destination)) {
//         return ['success' => true, 'fileName' => $newFileName];
//     } else {
//         return ['success' => false, 'error' => 'Gagal mengunggah file.'];
//     }
// }

// function upuser($user) {
//     global $conn;

//     $id_user = $user['id'];
//     $name_user = htmlspecialchars($user['name_user']);
//     $username_user = htmlspecialchars($user['username_user']);
//     $email_user = htmlspecialchars($user['email_user']);
//     $numphone_user = ($user['numphone_user']);
//     $nik_user = ($user['nik_user']);
//     $joindate_user = ($user['joindate_user']);
//     $borndate_user = ($user['borndate_user']);
//     $lastschool_user = htmlspecialchars($user['lastschool_user']);
//     $address_user = htmlspecialchars($user['address_user']);
//     $whatsapp_user = ($user['whatsapp_user']);
//     $instagram_user = htmlspecialchars($user['instagram_user']);
//     $tiktok_user = htmlspecialchars($user['tiktok_user']);
//     $facebook_user = htmlspecialchars($user['facebook_user']);

//     mysqli_query($conn, "UPDATE user SET name_user = '$name_user', username_user = '$username_user', email_user = '$email_user', numphone_user = $numphone_user, nik_user = $nik_user, joindate_user = '$joindate_user', borndate_user = '$borndate_user', lastschool_user = '$lastschool_user', address_user = '$address_user', whatsapp_user = $whatsapp_user, instagram_user = '$instagram_user', tiktok_user = '$tiktok_user', facebook_user = '$facebook_user' WHERE id = '$id_user'");

//     return mysqli_affected_rows($conn);
// }

// if (isset($_POST['submit_upprofile'])) {
//     if (upuser($_POST) > 0) {
//         header("Location: logout");
//     } else {
//         header("Location: profile");
//     }
// }













































































    // $photo_user = upload();
    // if (!$photo_user) {
    //     return false;
    // }

    // Mengambil nama file lama
    // $result = mysqli_query($conn, "SELECT photo_user FROM user WHERE id = $id_display");
    // $row = mysqli_fetch_assoc($result);
    // $nameFile = $row['photo_user'];

    // $updateSyntax = "UPDATE `user` SET
    // name_user = '$name_user',
    // username_user = '$username_user',
    // email_user = '$email_user',
    // numphone_user = $numphone_user,
    // nik_user = $nik_user,
    // joindate_user = '$joindate_user',
    // borndate_user = '$borndate_user',
    // lastschool_user = '$lastschool_user',
    // address_user = '$address_user',
    // whatsapp_user = $whatsapp_user,
    // instagram_user = '$instagram_user',
    // tiktok_user = '$tiktok_user',
    // facebook_user = '$facebook_user',
    // photo_user = '$photo_user',
    // WHERE id = $id_user"; 
    //`user`.`id` =


    //mysqli_query($conn, "UPDATE `user` SET name_user = '$name_user', username_user = '$username_user', email_user = '$email_user', numphone_user = $numphone_user, nik_user = $nik_user, joindate_user = '$joindate_user', borndate_user = '$borndate_user', lastschool_user = '$lastschool_user', address_user = '$address_user', whatsapp_user = $whatsapp_user, instagram_user = '$instagram_user', tiktok_user = '$tiktok_user', facebook_user = '$facebook_user', photo_user = '$photo_user' WHERE id = '$id_user'");


    // Hapus file gambar dari direktori jika ada nama file lama dan nama file baru berbeda
    // if ($nameFile && $nameFile !== $photo_user && file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
    //     unlink('../../../app/assets/users/user-photo/' . $nameFile);
    // }

    // return mysqli_affected_rows($conn);


// function upload() {
//     $nameFile = $_FILES['photo_user']['name'];
//     $sizeFile = $_FILES['photo_user']['size'];
//     $error = $_FILES['photo_user']['error'];
//     $tmpName = $_FILES['photo_user']['tmp_name'];

//     // cek pilih gambar terlebih dahulu
    
//     global $errPilihanGambar;
//     if ($error === 4) {
//         $errPilihanGambar = "Pilih Gambar Terlebih Dahulu"; // ---------------------------------------------------------------------------------------
        
//         // echo "
//         //     <script>
//         //         alert('Pilih gambar terlebih dahulu');
//         //     </script>
//         // ";
//         return false;
//     }

//     // cek yang diupload adalah gambar
//     $extensionPhotoValid = ['jpg', 'jpeg', 'png'];
//     $extensionPhoto = explode('.', $nameFile);
//     $extensionPhoto = strtolower(end($extensionPhoto));
    
//     global $errEkstensiGambar;
//     if (!in_array($extensionPhoto, $extensionPhotoValid)) {
//         $errEkstensiGambar = "Yang Anda Upload Bukan Gambar"; // ---------------------------------------------------------------------------------------
        
//         // echo "
//         //     <script>
//         //         alert('Yang anda upload bukan gambar');
//         //     </script>
//         // "
//         // ;

//         // Hapus gambar yang diunggah
//         if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
//             unlink('../../../app/assets/users/user-photo/' . $nameFile);
//         }

//         return false;
//     }

//     // cek ukuran gambar terlebih dahulu
    
//     global $errUkuranGambar;
//     if ($sizeFile > 2000000) {
//         $errUkuranGambar = "Ukuran Gambar Terlalu Besar"; // ---------------------------------------------------------------------------------------

//         // echo "
//         //     <script>
//         //         alert('Ukuran gambar terlalu besar');
//         //     </script>
//         // ";

//         // Hapus gambar yang diunggah
//         if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
//             unlink('../../../app/assets/users/user-photo/' . $nameFile);
//         }

//         return false;
//     }

//     // Nama Produk sudah ada atau belum
//     global $conn;
//     $email_user = mysqli_real_escape_string($conn, $_POST['email_user']);
//     $result = mysqli_query($conn, "SELECT email_user FROM user WHERE email_user = '$email_user'");
    
//     global $errUser;
//     if (mysqli_fetch_assoc($result)) {
//         $errUser = "User Sudah Terdaftar"; // ---------------------------------------------------------------------------------------

//         // echo "
//         //     <script>
//         //         alert('Produk sudah terdaftar');  
//         //     </script>
//         // ";

//         // Hapus gambar yang diunggah
//         if (file_exists('../../../app/assets/users/user-photo/' . $nameFile)) {
//             unlink('../../../app/assets/users/user-photo/' . $nameFile);
//         }
        
//         return false;
//     }

//     // lolos pengecekan gambar
//     $newName = uniqid() . '.' . $extensionPhoto;
//     $route = '../../../app/assets/users/user-photo/' . $newName;

//     global $errNamaBaru;
//     if (move_uploaded_file($tmpName, $route)) {
//         return $newName;
//     } else {
//         $errNamaBaru = "Gagal Mengganti Nama Gambar"; // ---------------------------------------------------------------------------------------

//         echo "
//             <script>
//                 alert('Gagal mengganti nama gambar');
//             </script>
//         ";
//         return false;
//     }
// }