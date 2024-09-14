<?php
// session_start();

// require_once 'config.php';

// if (!isset($_SESSION['login'])) {
//     header("Location: index.php");
//     exit;
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
//     $user_id = $_SESSION['user_id'];
//     $new_nama = $_POST['new_nama'];
//     $new_username = $_POST['new_username'];
//     $new_email = $_POST['new_email'];

//     // Query MySQLi untuk memperbarui data pengguna
//     $query = "UPDATE users SET nama = ?, username = ?, email = ? WHERE id = ?";
//     $stmt = $db->prepare($query);
//     $stmt->bind_param("sssi", $new_nama, $new_username, $new_email, $user_id);

//     if ($stmt->execute()) {
//         // Data pengguna berhasil diperbarui
//         header("Location: dashboard.php");
//         exit;
//     } else {
//         echo "Gagal memperbarui data pengguna.";
//     }
// }

// session_start();

// if (!isset($_SESSION['login'])) {
//     header("Location: index.php");
//     exit;
// }

require_once 'config.php';

// Ambil informasi akun pengguna yang masuk
$user_id = $_SESSION['user_id'];

// Query MySQLi untuk mengambil informasi pengguna
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    $username = $user['username'];
    $nama = $user['nama'];
    $email = $user['email'];
} else {
    $notAvailable = "Informasi pengguna tidak ditemukan.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $new_nama = $_POST['new_nama'];
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];

    // Proses pembaruan data pengguna
    $update_query = "UPDATE users SET nama = ?, username = ?, email = ? WHERE id = ?";
    $update_stmt = $db->prepare($update_query);
    $update_stmt->bind_param("sssi", $new_nama, $new_username, $new_email, $user_id);

    if ($update_stmt->execute()) {
        // Pembaruan data pengguna berhasil

        // Proses pengunggahan foto
        if ($_FILES['new_photo']['error'] === 0) {
            $photo_dir = "photo/"; // Folder penyimpanan foto
            $allowed_extensions = ["jpg", "jpeg", "png"];

            // Memeriksa apakah ada file lama yang perlu dihapus
            if (!empty($user['photo_user'])) {
                $old_photo_path = $photo_dir . $user['photo_user'];
                if (file_exists($old_photo_path)) {
                    unlink($old_photo_path); // Hapus file lama
                }
            }

            $temp_file = $_FILES['new_photo']['tmp_name'];
            $original_file = $_FILES['new_photo']['name'];
            $file_extension = pathinfo($original_file, PATHINFO_EXTENSION);

            if (in_array($file_extension, $allowed_extensions)) {
                $new_photo_name = uniqid() . "." . $file_extension;
                $destination = $photo_dir . $new_photo_name;

                if (move_uploaded_file($temp_file, $destination)) {
                    // Foto berhasil diunggah dan disimpan dengan nama baru

                    // Perbarui nama foto pengguna di database
                    $photo_query = "UPDATE users SET photo_user = ? WHERE id = ?";
                    $photo_stmt = $db->prepare($photo_query);
                    $photo_stmt->bind_param("si", $new_photo_name, $user_id);
                    $photo_stmt->execute();
                } else {
                    echo "Gagal mengunggah foto.";
                }
            } else {
                echo "Format file tidak didukung. Hanya jpg, jpeg, dan png yang diizinkan.";
            }
        }
    }
}
