<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Edit Data Petugas
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST">
			  		<input type="hidden" name="id" value="<?= $petugas['Kd_Petugas']; ?>">
					<div class="form-group">
					    <label for="nama_pet">Nama</label>
					    <input type="text" name="nama_pet" class="form-control" id="nama_pet" value="<?= $petugas['Nama_pet']; ?>" ">
					    <small class="form-text tet-danger"><?= form_error('nama_pet'); ?></small>
					</div>
					<div class="form-group">
					    <label for="alamat_pet">Alamat</label>
					    <input type="text" name="alamat_pet" class="form-control" id="alamat_pet" value="<?= $petugas['Alamat_pet']; ?>" ">
					    <small class="form-text tet-danger"><?= form_error('alamat_pet'); ?></small>
					</div>
					<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>