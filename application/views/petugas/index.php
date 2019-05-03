<div class="container">

	<?php if ($this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
		<class class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data Petugas 
			  <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</class>
	</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>petugas/tambah" class="btn btn-primary">Tambah Data Petugas</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<h1>Daftar Petugas</h1>
			<ul class="list-group">
				<?php foreach ($petugas as $ptgs) : ?>
			 		 <li class="list-group-item mt-3">
			 		 	<?php echo $ptgs['Nama_pet']; ?>
			 		 	<a  href="<?= base_url(); ?>petugas/hapus/<?= $ptgs['Kd_Petugas']; ?> " class="badge badge-danger float-right">Hapus</a>
			 		 	<a  href="<?= base_url(); ?>petugas/edit/<?= $ptgs['Kd_Petugas']; ?> " class="badge badge-info float-right">Edit</a>
			 		 	<a  href="<?= base_url(); ?>petugas/detail/<?= $ptgs['Kd_Petugas']; ?> " class="badge badge-primary float-right">Detail</a>
			 		 </li>
			 	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>