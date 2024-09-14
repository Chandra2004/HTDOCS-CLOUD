<?php $content = 'views/berita/edit.php'; include 'views/layouts/main.php'; ?>

<h1 class="text-3xl font-bold mb-4">Edit Berita</h1>
<form action="/berita/edit/<?= $berita['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-4">
        <label class="block text-gray-700">Judul</label>
        <input type="text" name="judul" value="<?= $berita['judul'] ?>" class="border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Thumbnail</label>
        <input type="file" name="thumbnail" class="border rounded w-full py-2 px-3 text-gray-700">
        <img src="<?= $berita['thumbnail'] ?>" alt="Thumbnail" class="mt-2" style="width: 100px;">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Isi Berita</label>
        <div id="editor" class="border rounded w-full py-2 px-3 text-gray-700" style="height: 200px;"><?= $berita['isi'] ?></div>
        <input type="hidden" name="isi" id="isi">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Editor</label>
        <input type="text" name="editor" value="<?= $berita['editor'] ?>" class="border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </div>
</form>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    document.querySelector('form').onsubmit = function() {
        document.querySelector('input[name=isi]').value = quill.root.innerHTML;
    };
</script>
