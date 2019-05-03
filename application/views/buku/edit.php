<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Edit Data Buku
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST">
			  		<input type="hidden" name="id" value="<?= $buku['Kd_Register']; ?>">
					<div class="form-group">
					    <label for="judul">Judul</label>
					    <input type="text" name="judul" class="form-control" id="judul" value="<?= $buku['Judul']; ?>" >
					    <small class="form-text tet-danger"><?= form_error('judul'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Pengarang">Pengarang</label>
					    <input type="text" name="pengarang" class="form-control" id="pengarang" value="<?= $buku['Pengarang']; ?>" >
					    <small class="form-text tet-danger"><?= form_error('pengarang'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Penerbit">Penerbit</label>
					    <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $buku['Penerbit']; ?>" >
					    <small class="form-text tet-danger"><?= form_error('penerbit'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Tahun_Terbit">Tahun Terbit</label>
					    <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" value="<?= $buku['Tahun_Terbit']; ?>">
					    <small class="form-text tet-danger"><?= form_error('tahun_terbit'); ?></small>
					</div>
					<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>