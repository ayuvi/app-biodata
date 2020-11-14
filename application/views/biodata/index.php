<div class="container">
	<h3 class="mt-3">Biodata</h3>


	<div class="row">
		<div class="col-md-5">
			<form action="<?= base_url('biodata'); ?>" method="post">
				<div class="input-group mb-3">
					<div class="row mt-3">
						<div class="col-md">
							<a href="<?= base_url(); ?>biodata/tambah" class="btn btn-primary">Tambah Data</a>
						</div>
						</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<!-- menampilkan total dari rows -->
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($biodata as $bio) : ?>
							<tr>
								<td><?= $bio['nama']; ?></td>
								<td><?= $bio['email']; ?></td>
								<td>
									<a href="<?= base_url(); ?>biodata/detail/<?= $bio['id']; ?>" class="badge badge-primary">detail</a>
									<a href="<?= base_url(); ?>biodata/edit/<?= $bio['id']; ?>" class="badge badge-success">edit</a>
									<a href="<?= base_url(); ?>biodata/hapus/<?= $bio['id']; ?>" class="badge badge-danger">delete</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<!-- menampilkan link pada pagination -->
		</div>
	</div>
</div>
