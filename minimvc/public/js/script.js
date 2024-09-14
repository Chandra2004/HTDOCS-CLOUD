$(function() {
	$('.tombolTambahData').on('click', function() {
		$('#judulModalLabel').html('Tambah Data Murid');
		$('#submit').html('Kirim Data Murid');

		$('#nama').val('');
        $('#absen').val('');
        $('#kelas').val('');
        $('#umur').val('');
        $('#id').val('');
	});


	$('.modalUbah').on('click', function() {
		$('#judulModalLabel').html('Ubah Data Murid');
		$('#submit').html('Ubah Data Murid');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/murid/ubah');


		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/phpmvc/public/murid/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#absen').val(data.absen);
				$('#kelas').val(data.kelas);
				$('#umur').val(data.umur);
				$('#id').val(data.id);
			}
		});
	});
});