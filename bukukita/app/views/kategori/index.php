<h1><?= $data['title']; ?></h1>

<ul>
    <?php foreach($data['kategori'] as $row) : ?>
        <li>
            <?= $row['id']; ?> 
            | 
            <?= $row['nama_kategori']; ?>
            ||
            <a href="<?= base_url; ?>/kategori/hapus/<?= $row['id'] ?>" onclick="return confirm('hapus Data?')">Hapus</a>
        </li>
    <?php endforeach; ?>
</ul>