<?php $content = 'views/berita/index.php'; include 'views/layouts/main.php'; ?>

<h1 class="text-3xl font-bold mb-4">Berita</h1>
<a href="/berita/create" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</a>
<div class="mt-4">
    <?php foreach ($berita as $item): ?>
        <div class="border-b pb-4 mb-4">
            <h2 class="text-2xl font-semibold"><?= $item['judul'] ?></h2>
            <p><?= $item['isi'] ?></p>
            <small>Editor: <?= $item['editor'] ?> | <?= $item['created_at'] ?></small>
            <div class="mt-2">
                <a href="/berita/view/<?= $item['id'] ?>" class="text-blue-500">Lihat</a> |
                <a href="/berita/edit/<?= $item['id'] ?>" class="text-blue-500">Edit</a> |
                <a href="/berita/delete/<?= $item['id'] ?>" class="text-red-500" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
