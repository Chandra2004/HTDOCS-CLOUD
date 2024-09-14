<?php
    // define('BASE_URL', 'http://localhost/menu/important/public/');
    // // define('BASE_URL', 'https://95d1-36-74-99-155.ngrok-free.app/menu/important/public/');

    // function cleanAndValidateParameter($parameter)
    // {
    //     return preg_replace('/[^a-zA-Z0-9\/]/', '', $parameter);
    // }

    // $folder = isset($_GET['page']) ? cleanAndValidateParameter($_GET['page']) : 'default';
    // $file_path = __DIR__ . '/../app/views/' . $folder . '/index.php';

    // if (file_exists($file_path) && !is_dir($file_path)) {
    //     include $file_path;
    // } else {
    //     error_log("File not found: $file_path");

    //     // Jika folder ditemukan, coba mencari index.php di dalamnya
    //     if (is_dir($file_path)) {
    //         $subfolder_index_path = $file_path . '/index.php';
    //         if (file_exists($subfolder_index_path)) {
    //             include $subfolder_index_path;
    //         } else {
    //             header("HTTP/Home");
    //             include(__DIR__ . '/../app/views/reservation/index.php');
    //         }
    //     } else {
    //         header("HTTP/Home");
    //         include(__DIR__ . '/../app/views/reservation/index.php');
    //     }
    // }

?>

<?php
    define('BASE_URL', 'http://localhost/menu/important/public/');

    function cleanAndValidateParameter($parameter)
    {
        return preg_replace('/[^a-zA-Z0-9\/]/', '', $parameter);
    }

    // Ambil nilai parameter "page" dari URL
    $folder = isset($_GET['page']) ? cleanAndValidateParameter($_GET['page']) : 'default';

    // Pisahkan parameter menjadi array berdasarkan tanda "/"
    $folders = explode('/', $folder);

    // Bangun jalur file berdasarkan parameter
    $file_path = __DIR__ . '/../app/views/' . implode('/', $folders) . '/index.php';

    // Periksa apakah file atau folder ada
    if (file_exists($file_path) && !is_dir($file_path)) {
        include $file_path;
    } else {
        error_log("File not found: $file_path");

        // Jika folder ditemukan, coba mencari index.php di dalamnya
        if (is_dir($file_path)) {
            $subfolder_index_path = $file_path . '/index.php';
            if (file_exists($subfolder_index_path)) {
                include $subfolder_index_path;
            } else {
                header("Location: " . BASE_URL . "Home");
                include(__DIR__ . '/../app/views/reservation/index.php');
            }
        } else {
            header("Location: " . BASE_URL . "Home");
            include(__DIR__ . '/../app/views/reservation/index.php');
        }
    }
?>
