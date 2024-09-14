<?php
    include '../../../app/core/Database.php';

    $getRatings = file_get_contents('../../../app/assets/rest-api/ratings.json');
    $rate = json_decode($getRatings, true);
    // $ratinges = json_decode($getRatings, true);

    $getCities = file_get_contents('../../../app/assets/rest-api/cities.json');
    $city = json_decode($getCities, true);
    // $citiees = json_decode($getCities, true);

    // product > list-product
    $sqlProduct = "SELECT * FROM product";
    $resultProduct = mysqli_query($conn, $sqlProduct);
    $dataProduct = mysqli_fetch_all($resultProduct, MYSQLI_ASSOC);

    global $gagalTambah;
    if (isset($_POST['submit_product'])) {
        if (product($_POST) > 0) {
            header("Location: product");
        } else {
            $gagalTambah = 'Produk gagal untuk ditambahkan';
            header("refresh:5; url=product");
            // echo "
            //     <script>
            //         alert('user gagal ditambahkan');
            //     </script>
            // ";
        }
    }

    if (isset($_POST['submit_upproduct'])) {
        if (upproduct($_POST) > 0) {
            header("Location: product");
        } else {
            $gagalTambah = 'Produk gagal untuk ditambahkan';
            header("refresh:5; url=product");
            // echo "
            //     <script>
            //         alert('user gagal ditambahkan');
            //     </script>
            // ";
        }
    }

    // product.php (Form)
    function product($product) {
        global $conn;

        $name_product = htmlspecialchars($product['name_product']);
        $city_product = ($product['city_product']);
        $rating_product = ($product['rating_product']);
        $price_product = ($product['price_product']);

        // Upload Gambar
        $photo_product = upload();
        if (!$photo_product) {
            return false;
        }

        mysqli_query($conn, "INSERT INTO `product` (`id`, `name_product`, `city_product`, `rating_product`, `price_product`, `photo_product`)  VALUES(
            NULL,
            '$name_product',
            '$city_product',
            '$rating_product',
            '$price_product',
            '$photo_product'
        )");
    
        return mysqli_affected_rows($conn);
    }

    // product.php (UpdateForm)
    function upproduct($product) {
        global $conn;
    
        $name_product = htmlspecialchars($product['name_product']);
        $city_product = ($product['city_product']);
        $rating_product = ($product['rating_product']);
        $price_product = ($product['price_product']);
        $id_product = ($product['id_product']);
    
        // Upload Gambar
        $photo_product = upload();
        if (!$photo_product) {
            return false;
        }
    
        // Mengambil nama file lama
        $result = mysqli_query($conn, "SELECT photo_product FROM product WHERE id = $id_product");
        $row = mysqli_fetch_assoc($result);
        $nameFile = $row['photo_product'];
    
        // Update database
        mysqli_query($conn, "UPDATE `product` SET name_product='$name_product', city_product='$city_product', rating_product='$rating_product', price_product='$price_product', photo_product='$photo_product' WHERE id='$id_product'");
    
        // Hapus file gambar dari direktori jika ada nama file lama dan nama file baru berbeda
        if ($nameFile && $nameFile !== $photo_product && file_exists('../../../app/assets/users/user-product/' . $nameFile)) {
            unlink('../../../app/assets/users/user-product/' . $nameFile);
        }
    
        return mysqli_affected_rows($conn);
    }

    function upload() {
        $nameFile = $_FILES['photo_product']['name'];
        $sizeFile = $_FILES['photo_product']['size'];
        $error = $_FILES['photo_product']['error'];
        $tmpName = $_FILES['photo_product']['tmp_name'];
    
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
            if (file_exists('../../../app/assets/users/user-product/' . $nameFile)) {
                unlink('../../../app/assets/users/user-product/' . $nameFile);
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
            if (file_exists('../../../app/assets/users/user-product/' . $nameFile)) {
                unlink('../../../app/assets/users/user-product/' . $nameFile);
            }
    
            return false;
        }
    
        // Nama Produk sudah ada atau belum
        global $conn;
        $name_product = mysqli_real_escape_string($conn, $_POST['name_product']);
        $result = mysqli_query($conn, "SELECT name_product FROM product WHERE name_product = '$name_product'");
        
        global $errProduk;
        if (mysqli_fetch_assoc($result)) {
            $errProduk = "Produk Sudah Terdaftar"; // ---------------------------------------------------------------------------------------

            // echo "
            //     <script>
            //         alert('Produk sudah terdaftar');  
            //     </script>
            // ";
    
            // Hapus gambar yang diunggah
            if (file_exists('../../../app/assets/users/user-product/' . $nameFile)) {
                unlink('../../../app/assets/users/user-product/' . $nameFile);
            }
            
            return false;
        }
    
        // lolos pengecekan gambar
        $newName = uniqid() . '.' . $extensionPhoto;
        $route = '../../../app/assets/users/user-product/' . $newName;

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

    // product > delete-product
    function hapusProduct($id) {
        global $conn;
        
        $result = mysqli_query($conn, "SELECT photo_product FROM product WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        $nameFile = $row['photo_product'];

        mysqli_query($conn, "DELETE FROM product WHERE id = $id");

        // Hapus file gambar dari direktori jika nama file telah diambil
        if ($nameFile && file_exists('../../../app/assets/users/user-product/' . $nameFile)) {
            unlink('../../../app/assets/users/user-product/' . $nameFile);
        }

        return mysqli_affected_rows($conn);
    }




