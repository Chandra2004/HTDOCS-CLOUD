<?php $content = 'views/berita/view.php'; include 'views/layouts/main.php'; ?>

<h1 class="text-3xl font-bold mb-4"><?= $berita['judul'] ?></h1>
<img src="<?= $berita['thumbnail'] ?>" alt="Thumbnail" class="mb-4">
<p><?= $berita['isi'] ?></p>
<small>Editor: <?= $berita['editor'] ?> | <?= $berita['created_at'] ?></small>
