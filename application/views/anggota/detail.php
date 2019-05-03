<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Anggota
			  </div>
			  <div class="card-body">
			    <h1 class="card-title"><?= $anggota['Nama']; ?></h1>
			    <p class="card-text">Prodi: <?= $anggota['Prodi']; ?></p>
			    <p class="card-text">Jenjang: <?= $anggota['Jenjang']; ?></p>
			    <p class="card-text">Alamat: <?= $anggota['Alamat']; ?></p>
			    <a href="<?= base_url() ?>anggota" class="btn btn-primary float-right">Kembali</a>
			  </div>
			</div>
		</div>
	</div>		
</div>