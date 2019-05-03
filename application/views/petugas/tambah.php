<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Petugas
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST">
			  		<?= validation_errors(); ?>
					<div class="form-group">
					    <label for="Nama_pet">Nama</label>
					    <input type="text" name="nama_pet" class="form-control" id="nama_pet" value="<?= set_value('nama_pet'); ?>">
					    <small class="form-text tet-danger"><?= form_error('nama_pet'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Alamat_pet">Alamat</label>
					    <input type="text" name="alamat_pet" class="form-control" id="alamat_pet" value="<?= set_value('alamat_pet'); ?>">
					    <small class="form-text tet-danger"><?= form_error('alamat_pet'); ?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>