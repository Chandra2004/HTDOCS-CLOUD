<div class="card" style="width: 18rem;">
  	<div class="card-body">
	    <h5 class="card-title"><?= $data['mrd']['nama']; ?></h5>
	    <p class="card-text">Absen : <?= $data['mrd']['absen']; ?></p>
	    <p class="card-text">Kelas : <?= $data['mrd']['kelas']; ?></p>
	    <p class="card-text">Umur : <?= $data['mrd']['umur']; ?></p>
	    <a href="<?= BASEURL ?>/murid" class="card-link">Kembali</a>
    </div>
</div>