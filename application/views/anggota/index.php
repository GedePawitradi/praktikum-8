<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
		<class class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data Anggota 
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
			<a href="<?= base_url(); ?>anggota/tambah" class="btn btn-primary">Tambah Data Anggota</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h1>Daftar Anggota</h1>
			<!-- <ul class="list-group"> -->
			<table id="example" class="table table-bordered">
			<thead>
				<tr style="text-align: center;">
					<th>Nama</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($anggota as $agt): ?>
				<tr>
			 		 <td><?php echo $agt['Nama']; ?></td>
			 		 <td>
			 		 	<a  href="<?= base_url(); ?>anggota/hapus/<?= $agt['Kd_Anggota']; ?> " class="badge badge-danger float-right">Hapus</a>
			 		 	<a  href="<?= base_url(); ?>anggota/edit/<?= $agt['Kd_Anggota']; ?> " class="badge badge-info float-right">Edit</a>
			 		 	<a  href="<?= base_url(); ?>anggota/detail/<?= $agt['Kd_Anggota']; ?> " class="badge badge-primary float-right">Detail</a>
			 		 </td>
			 	</tr>
			 	<?php endforeach; ?>
			</tbody>
			</table>
			<!-- </ul> -->
		</div>

	</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">	
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>