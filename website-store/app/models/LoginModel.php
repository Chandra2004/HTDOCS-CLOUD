<?php
session_start();
include '../../../app/core/Database.php';

if (isset($_POST['login'])) {
    global $conn;

    $email_user = $_POST['emus_user'];
    $password_user = $_POST['password_user'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email_user = '$email_user' LIMIT 1");

    // Cek email
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password_user, $row['password_user'])) {
            // Set session
            $_SESSION['login'] = true;
            $_SESSION['id_display'] = $row['id'];
            $_SESSION['name_display'] = $row['name_user'];
            $_SESSION['username_display'] = $row['username_user'];
            $_SESSION['email_display'] = $row['email_user'];
            $_SESSION['password_display'] = $row['password_user'];
            $_SESSION['numphone_display'] = $row['numphone_user'];
            $_SESSION['nik_display'] = $row['nik_user'];
            $_SESSION['joindate_display'] = $row['joindate_user'];
            $_SESSION['borndate_display'] = $row['borndate_user'];
            $_SESSION['lastschool_display'] = $row['lastschool_user'];
            $_SESSION['address_display'] = $row['address_user'];
            $_SESSION['whatsapp_display'] = $row['whatsapp_user'];
            $_SESSION['instagram_display'] = $row['instagram_user'];
            $_SESSION['tiktok_display'] = $row['tiktok_user'];
            $_SESSION['facebook_display'] = $row['facebook_user'];
            $_SESSION['photo_display'] = $row['photo_user'];
            header("Location: ../dashboard");
            exit;
        }
    }
    $error = true;
}

if (isset($_POST['login'])) {
    global $conn;

    $username_user = $_POST['emus_user'];
    $password_user = $_POST['password_user'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username_user = '$username_user' LIMIT 1");

    // Cek email
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password_user, $row['password_user'])) {
            // Set session
            $_SESSION['login'] = true;
            $_SESSION['id_display'] = $row['id'];
            $_SESSION['name_display'] = $row['name_user'];
            $_SESSION['username_display'] = $row['username_user'];
            $_SESSION['email_display'] = $row['email_user'];
            $_SESSION['password_display'] = $row['password_user'];
            $_SESSION['numphone_display'] = $row['numphone_user'];
            $_SESSION['nik_display'] = $row['nik_user'];
            $_SESSION['joindate_display'] = $row['joindate_user'];
            $_SESSION['borndate_display'] = $row['borndate_user'];
            $_SESSION['lastschool_display'] = $row['lastschool_user'];
            $_SESSION['address_display'] = $row['address_user'];
            $_SESSION['whatsapp_display'] = $row['whatsapp_user'];
            $_SESSION['instagram_display'] = $row['instagram_user'];
            $_SESSION['tiktok_display'] = $row['tiktok_user'];
            $_SESSION['facebook_display'] = $row['facebook_user'];
            $_SESSION['photo_display'] = $row['photo_user'];
            header("Location: ../dashboard");
            exit;
        }
    }
    $error = true;
}