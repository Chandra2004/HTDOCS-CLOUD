<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Menu - Form</title>
</head>
<body>
    <div class="container">
        <h1>Form E-Menu</h1>
        <form action="process_form.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>
            <h1><?= $_GET['table']; ?></h1>
            <input type="text" name="nomor_meja" value="<?= $_GET['table']; ?>">

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
