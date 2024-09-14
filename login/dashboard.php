<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require_once 'update_profile.php';

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
    $id = $user['id'];
    $username = $user['username'];
    $nama = $user['nama'];
    $email = $user['email'];
    $photo = $user['photo_user'];
} else {
    $notAvailable = "Informasi pengguna tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Ini Dashboard</h1>
    <img style="width: 20%;" src="photo/<?= $photo ?>" alt="">
    <p>Nama: <?= $nama ?></p>
    <p>Username: <?= $username ?></p>
    <p>Email: <?= $email ?></p>

    <h2>Ubah Data Pengguna</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="id">ID :</label>
        <input type="text" id="id" name="id" value="<?= $id ?>"><br><br>
        <label for="new_nama">Nama Baru:</label>
        <input type="text" id="new_nama" name="new_nama" value="<?= $nama ?>"><br><br>
        <label for="new_username">Username Baru:</label>
        <input type="text" id="new_username" name="new_username" value="<?= $username ?>"><br><br>
        <label for="new_email">Email Baru:</label>
        <input type="email" id="new_email" name="new_email" value="<?= $email ?>"><br><br>
        <input type="file" name="new_photo" id=""><br><br>
        <input type="submit" value="Simpan Perubahan photo" name="update_photo">
        <input type="submit" value="Simpan Perubahan" name="update">
    </form>

    <br>
    <a href="logout.php">Keluar</a>
</body>
</html>

