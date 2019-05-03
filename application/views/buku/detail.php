<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Buku
			  </div>
			  <div class="card-body">
			    <h1 class="card-title"><?= $buku['Judul']; ?></h1>
			    <p class="card-text">Pengarang: <?= $buku['Pengarang']; ?></p>
			    <p class="card-text">Penerbit: <?= $buku['Penerbit']; ?></p>
			    <p class="card-text">Tahun Terbit: <?= $buku['Tahun_Terbit']; ?></p>
			    <a href="<?= base_url() ?>buku" class="btn btn-primary float-right">Kembali</a>
			  </div>
			</div>
		</div>
	</div>		
</div>