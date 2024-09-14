<?php
require_once '../controllers/BeritaController.php';

$controller = new BeritaController();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/berita' || $uri == '/') {
    $controller->index();
} elseif ($uri == '/berita/create') {
    $controller->create();
} elseif (preg_match('/\/berita\/edit\/(\d+)/', $uri, $matches)) {
    $controller->edit($matches[1]);
} elseif (preg_match('/\/berita\/delete\/(\d+)/', $uri, $matches)) {
    $controller->delete($matches[1]);
} elseif (preg_match('/\/berita\/view\/(\d+)/', $uri, $matches)) {
    $controller->view($matches[1]);
} else {
    echo "404 Not Found";
}
?>
