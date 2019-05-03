<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Petugas
			  </div>
			  <div class="card-body">
			    <h1 class="card-title"><?= $petugas['Nama_pet']; ?></h1>
			    <p class="card-text">Alamat: <?= $petugas['Alamat_pet']; ?></p>
			    <a href="<?= base_url() ?>petugas" class="btn btn-primary float-right">Kembali</a>
			  </div>
			</div>
		</div>
	</div>		
</div>