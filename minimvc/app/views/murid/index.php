<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<button type="button" class="btn btn-primary mt-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
	  	Tambah Data Baru
	</button>

	<div class="row mt-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/murid/cari" method="post"> 
				<div class="input-group mb-3">
	  				<input type="text" class="form-control" placeholder="Cari Nama Murid" name="keyword" id="keyword" autocomplete="off">
	  				<button class="btn btn-primary" type="submit" id="searchButton">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<h1>Daftar Murid</h1>

	<div class="container">
	<ul class="list-group">
		<?php foreach ($data['mrd'] as $mrd) : ?>
		  	<li class="list-group-item">
		    	<?= $mrd['nama']; ?>
		    	<a class="badge text-bg-primary" href="<?= BASEURL; ?>/murid/detail/<?= $mrd['id'] ?>">Detail</a>
		    	<a class="badge text-bg-success modalUbah" href="<?= BASEURL; ?>/murid/ubah/<?= $mrd['id'] ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mrd['id'] ?>">Ubah Data</a>
		    	<a class="badge text-bg-danger" href="<?= BASEURL; ?>/murid/hapus/<?= $mrd['id'] ?>" onclick="return confirm('yakin?');">Hapus</a>
		  	</li>
		<?php endforeach; ?>	
	</ul>
	</div>

	<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Peserta Didik Baru</h1>
		        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      	</div>
			      	<div class="modal-body">
			      		<form action="<?= BASEURL; ?>/murid/tambah" method="post">
			      			<input type="hidden" name="id" id="id">
						<div class="mb-3">
							<label for="nama" class="form-label">Nama Anak</label>
						    <input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="mb-3">
							<label for="absen" class="form-label">Absen</label>
						    <input type="number" class="form-control" id="absen" name="absen">
						</div>
						<div class="mb-3">
							<label for="kelas" class="form-label">Kelas</label>
						    <input type="text" class="form-control" id="kelas" name="kelas">
						</div>
						<div class="mb-3">
							<label for="umur" class="form-label">Umur</label>
						    <input type="number" class="form-control" id="umur" name="umur">
						</div>
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				        <button type="submit" class="btn btn-primary" id="submit">Simpan</button>
			      	</div>
		      	</form>
		    </div>
		</div>
	</div>	
</div>