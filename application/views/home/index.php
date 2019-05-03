<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>home/tambah" class="btn btn-primary">Tambah Data Peminjaman</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h1>Daftar Peminjaman</h1>
			<ul class="list-group">
				<?php foreach ($pinjam as $pnjm) : ?>
			 		 <li class="list-group-item mt-3">
			 		 	<?php echo $pnjm['Kd_anggota']; ?>
			 		 	<a  href="<?= base_url(); ?>home/hapus/<?= $pnjm['Kd_Pinjam']; ?> " class="badge badge-danger float-right">Hapus</a>
			 		 	<a  href="<?= base_url(); ?>home/edit/<?= $pnjm['Kd_Pinjam']; ?> " class="badge badge-info float-right">Edit</a>
			 		 	<a  href="<?= base_url(); ?>anggota/detail/<?= $pnjm['Kd_Pinjam']; ?> " class="badge badge-primary float-right">Detail</a>
			 		 </li>
			 	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>