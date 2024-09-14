<?php
    include '../core/database.php';
    echo "nightfall <br>";

    if (isset($_POST['register'])) {
        if (register($_POST) > 0) {
            header("Location: index.php");
        } else {
            //$gagalTambah = 'Produk gagal untuk ditambahkan';
            header("refresh:3; url=index.php");
            // echo "
            //     <script>
            //         alert('user gagal ditambahkan');
            //     </script>
            // ";
        }
    }

    function register($regData) {
        global $conn;
        
    
        $email = htmlspecialchars($regData['email']);
        $password = mysqli_real_escape_string($conn, $regData['password']);
        $name = htmlspecialchars($regData['name']);
        $role = $regData['role'];
    
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        // mysqli_query($conn, "INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`) VALUES (
        //     NULL,
        //     '$email',
        //     '$password',
        //     '$name',
        //     `$role`
        // )");

        mysqli_query($conn, "INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`) VALUES (
            NULL,
            '$email',
            '$password',
            '$name',
            '$role'
        )");
        
    
        return mysqli_affected_rows($conn);
    
        // Upload Gambar
        // $photo_user = upload();
        // if (!$photo_user) {
        //     return false;
        // }
    
        // // Pastikan password_user dan rePassword_user cocok
        // global $wrongPass;
        // if ($password_user !== $rePassword_user) {
        //     // Password tidak cocok, echo pesan kesalahan-----------------------------------------------------------------------------------------------------------------------
        //     $wrongPass = 'Password tidak cocok';
    
        //     return 0;
        // }
    
        // $result = mysqli_query($conn, "SELECT email_user FROM user WHERE email_user = '$email_user'");
    
        // global $emailFound;
        // if (mysqli_fetch_assoc($result)) {
        //     $emailFound = 'email sudah terdaftar';
        //     return 0;
        // }
    
        // Enkripsi password
    }
?>