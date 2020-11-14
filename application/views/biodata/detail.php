<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Biodata
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $biodata['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $biodata['email']; ?></h6>
					<h5 class="card-text"><?= $biodata['ktp']; ?></h5>
					<h5 class="card-text"><?= $biodata['posisi']; ?></h5>
					<h5 class="card-text"><?= $biodata['tmpt_tgl_lhr']; ?></h5>
					<h5 class="card-text"><?= $biodata['jenisKel']; ?></h5>
					<h5 class="card-text"><?= $biodata['agama']; ?></h5>
					<h5 class="card-text"><?= $biodata['golDar']; ?></h5>
					<h5 class="card-text"><?= $biodata['status']; ?></h5>
					<h5 class="card-text"><?= $biodata['alamat']; ?></h5>
					<h5 class="card-text"><?= $biodata['email']; ?></h5>
					<h5 class="card-text"><?= $biodata['tlp']; ?></h5>
					<h5 class="card-text"><?= $biodata['idPendidikan']; ?></h5>
					<h5 class="card-text"><?= $biodata['idPelatihan']; ?></h5>
					<h5 class="card-text"><?= $biodata['idPekerjaan']; ?></h5>
					<h5 class="card-text"><?= $biodata['skill']; ?></h5>
					<h5 class="card-text"><?= $biodata['tersedia']; ?></h5>
					<h5 class="card-text"><?= $biodata['gaji']; ?></h5>
					

					<a href="<?= base_url() ?>pegawai" class="btn btn-primary">Back</a>
				</div>
			</div>

		</div>
	</div>
</div>
