<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					<?= $title; ?>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="posisi">POSISI YANG DILAMAR</label>
							<input type="text" name="posisi" class="form-control" id="posisi">
							<small class="form-text text-danger"><?= form_error('posisi'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">NAMA</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="ktp">NO. KTP</label>
							<input type="text" name="ktp" class="form-control" id="ktp">
							<small class="form-text text-danger"><?= form_error('ktp'); ?></small>
						</div>
						<div class="form-group">
							<label for="tmpt_tgl_lhr">TEMPAT, TANGGAL LAHIR</label>
							<input type="text" name="tmpt_tgl_lhr" class="form-control" id="tmpt_tgl_lhr">
							<small class="form-text text-danger"><?= form_error('tmpt_tgl_lhr'); ?></small>
						</div>
						<div class="form-group">
							<label for="jenisKel">JENIS KELAMIN</label>
							<input type="text" name="jenisKel" class="form-control" id="jenisKel">
							<small class="form-text text-danger"><?= form_error('jenisKel'); ?></small>
						</div>
						<div class="form-group">
							<label for="agama">AGAMA</label>
							<input type="text" name="agama" class="form-control" id="agama">
							<small class="form-text text-danger"><?= form_error('agama'); ?></small>
						</div>
						<div class="form-group">
							<label for="golDar">GOLONGAN DARAH</label>
							<input type="text" name="golDar" class="form-control" id="golDar">
							<small class="form-text text-danger"><?= form_error('golDar'); ?></small>
						</div>
						<div class="form-group">
							<label for="status">STATUS</label>
							<input type="text" name="status" class="form-control" id="status">
							<small class="form-text text-danger"><?= form_error('status'); ?></small>
						</div>
						<div class="form-group">
							<label for="alamat">ALAMAT KTP</label>
							<input type="text" name="alamat" class="form-control" id="alamat">
							<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>
						<div class="form-group">
							<label for="alamat_tinggal">ALAMAT TINGGAL</label>
							<input type="text" name="alamat_tinggal" class="form-control" id="alamat_tinggal">
							<small class="form-text text-danger"><?= form_error('alamat_tinggal'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">EMAIL</label>
							<input type="text" name="email" class="form-control" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="tlp">NO. TELP</label>
							<input type="text" name="tlp" class="form-control" id="tlp">
							<small class="form-text text-danger"><?= form_error('tlp'); ?></small>
						</div>
						<div class="form-group">
							<label for="noOthers">ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
							<input type="text" name="noOthers" class="form-control" id="noOthers">
							<small class="form-text text-danger"><?= form_error('noOthers'); ?></small>
						</div>
						<div class="form-group">
							<label for="idPendidikan">PENDIDIKAN TERAKHIR</label>
							<input type="text" name="idPendidikan" class="form-control" id="idPendidikan">
							<small class="form-text text-danger"><?= form_error('idPendidikan'); ?></small>
						</div>
						<div class="form-group">
							<label for="idPelatihan">RIWAYAT PELATIHAN</label>
							<input type="text" name="idPelatihan" class="form-control" id="idPelatihan">
							<small class="form-text text-danger"><?= form_error('idPelatihan'); ?></small>
						</div>
						<div class="form-group">
							<label for="idPekerjaan">RIWAYAT PEKERJAAN</label>
							<input type="text" name="idPekerjaan" class="form-control" id="idPekerjaan">
							<small class="form-text text-danger"><?= form_error('idPekerjaan'); ?></small>
						</div>
						<div class="form-group">
							<label for="skill">SKILL</label>
							<input type="text" name="skill" class="form-control" id="skill">
							<small class="form-text text-danger"><?= form_error('skill'); ?></small>
						</div>
						<div class="form-group">
							<label for="tersedia">BERSEDIA DITEMPATKAN DISELURUH KANTOR PERUSAHAAN</label>
							<input type="text" name="tersedia" class="form-control" id="tersedia">
							<small class="form-text text-danger"><?= form_error('tersedia'); ?></small>
						</div>
						<div class="form-group">
							<label for="gaji">PENGHASILAN YANG DIHARAPKAN</label>
							<input type="text" name="gaji" class="form-control" id="gaji">
							<small class="form-text text-danger"><?= form_error('gaji'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div
