<?php
// session_start();
// include '../core/database.php';

// if (isset($_POST['login'])) {
//     global $conn;

//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' LIMIT 1");

//     // Cek email
//     if (mysqli_num_rows($result) === 1) {
//         // Cek password
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row['password'])) {
//             // Set session
//             $_SESSION['login'] = true;
//             $_SESSION['id_display'] = $row['id'];
//             $_SESSION['name_display'] = $row['name'];
//             $_SESSION['email_display'] = $row['email'];
//             $_SESSION['role_display'] = $row['role'];
//             header("Location: ../dashboard.php");
//             exit;
//         }
//     }
//     $error = true;
// }



session_start();
include '../core/database.php';

if (isset($_POST['login'])) {
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' LIMIT 1");

    // Cek email
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Set session
            $_SESSION['login'] = true;
            $_SESSION['id_display'] = $row['id'];
            $_SESSION['name_display'] = $row['name'];
            $_SESSION['email_display'] = $row['email'];
            $_SESSION['role_display'] = $row['role'];

            // Arahkan ke dashboard sesuai peran
            switch ($row['role']) {
                case 'admin':
                    header("Location: ../dashboard/admin_dashboard.php");
                    break;
                case 'user':
                    header("Location: ../dashboard/user_dashboard.php");
                    break;
                case 'manager':
                    header("Location: ../dashboard/manager_dashboard.php");
                    break;
                default:
                    // Peran tidak valid, tambahkan penanganan kesalahan sesuai kebutuhan Anda
                    break;
            }
            exit;
        }
    }
    $error = true;
    // Jika login gagal, mungkin berikan pesan kesalahan atau arahkan ke halaman login dengan pesan error
    //header("Location: login_page.php?error=1");
    header("Location: https://youtube.com");
}