<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Peminjaman
			  </div>
			  <div class="card-body">
			  	<form action="" method="POST">
					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama">
					    <small class="form-text tet-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
					    <label for="Prodi">Judul</label>
					    <input type="text" name="judul" class="form-control" id="judul">
					    <small class="form-text tet-danger"><?= form_error('judul'); ?></small>
					</div>
					<div class="form-group">
					    <label for="tgl_pinjam">Tanggal Pinjam</label>
					    <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam">
					    <small class="form-text tet-danger"><?= form_error('tgl_pinjam'); ?></small>
					</div>
					<div class="form-group">
					    <label for="tgl_kembali">Tanggal Kembali</label>
					    <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali">
					    <small class="form-text tet-danger"><?= form_error('tgl_kembali'); ?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>