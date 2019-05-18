<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Anggota
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST" id="formInput">
					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama'); ?>">
					    <small class="form-text tet-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Prodi">Prodi</label>
					    <input type="text" name="prodi" class="form-control" id="prodi" value="<?= set_value('prodi'); ?>">
					    <small class="form-text tet-danger"><?= form_error('prodi'); ?></small>
					</div>
					<div class="form-group">
					    <label for="jurusan">Jenjang</label>
					    <input type="text" name="jenjang" class="form-control" id="jenjang" value="<?= set_value('jenjang'); ?>">
					    <small class="form-text tet-danger"><?= form_error('jenjang'); ?></small>
					</div>
					<div class="form-group">
					    <label for="alamat">Alamat</label>
					    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= set_value('alamat'); ?>">
					    <small class="form-text tet-danger"><?= form_error('alamat'); ?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$("#formInput").submit(function(e){
			dataForm = $(this).serializeArray();
			$.ajax({
				method : 'POST',
				url : 'tambah',
				data : dataForm,
				success : function(data){
					alert(data);
				}
			})
			e.preventDefault();
		});
	});
</script>