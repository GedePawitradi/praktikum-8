<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Buku
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST">
			  		
					<div class="form-group">
					    <label for="Judul">Judul</label>
					    <input type="text" name="judul" class="form-control" id="judul" value="<?= set_value('judul'); ?>">
					    <small class="form-text tet-danger"><?= form_error('judul'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Pengarang">Pengarang</label>
					    <input type="text" name="pengarang" class="form-control" id="pengarang" value="<?= set_value('pengarang'); ?>">
					    <small class="form-text tet-danger"><?= form_error('pengarang'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Penerbit">Penerbit</label>
					    <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= set_value('penerbit'); ?>">
					    <small class="form-text tet-danger"><?= form_error('penerbit'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Tahun_Terbit">Tahun Terbit</label>
					    <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" value="<?= set_value('tahun_terbit'); ?>">
					    <small class="form-text tet-danger"><?= form_error('tahun_terbit'); ?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>