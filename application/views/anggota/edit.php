<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Edit Data Anggota
			  </div>
			  <div class="card-body">
			  	<form method="POST" id="formUpdate">
			  		<input type="hidden" name="id" value="<?= $anggota['Kd_Anggota']; ?>">
					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama" value="<?= $anggota['Nama']; ?>">
					    <small class="form-text tet-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Prodi">Prodi</label>
					    <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $anggota['Prodi']; ?>">
					    <small class="form-text tet-danger"><?= form_error('prodi'); ?></small>
					</div>
					<div class="form-group">
					    <label for="jurusan">Jenjang</label>
					    <input type="text" name="jenjang" class="form-control" id="jenjang" value="<?= $anggota['Jenjang']; ?>" >
					    <small class="form-text tet-danger"><?= form_error('jenjang'); ?></small>
					</div>
					<div class="form-group">
					    <label for="alamat">Alamat</label>
					    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $anggota['Alamat']; ?>">
					    <small class="form-text tet-danger"><?= form_error('alamat'); ?></small>
					</div>
					<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script type="text/javascript">
	$(function() {
		$('#formUpdate').submit(function(e){
			dataForm = $(this).serializeArray();
			$.ajax({
				method : 'POST',
				url : '<?= base_url().'anggota/update'; ?>',
				data : dataForm,
				success : function(data){
					alert(data);
				}
			})
			e.preventDefault();
		});
	});
</script>