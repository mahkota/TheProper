<nav class="navbar navbar-light bg-light shadow">
	<span class="navbar-brand mx-auto mb-0 h1 text-center">The Proper</span>
</nav>

<div class="container">
	<div class="text-center">
		<br>
		<?php if(validation_errors()) : ?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors(); ?>
		</div>
		<?php endif; ?>
		<form method="post" action=" <?= site_url('C_homeAdmin/newSurvei'); ?>">
			<div class="form-group">
				<div class="text-left">
					<label for="username">Kode Ruangan :</label>
					<input type="text" class="form-control" id="koderuang" name="koderuang"
						placeholder="Masukkan kode ruangan">
				</div>
			</div>
			<div class="form-group">
				<div class="text-left">
					<label for="password">Nama Ruangan :</label>
					<input type="text" class="form-control" id="namaruang" name="namaruang"
						placeholder="Masukkan nama ruangan">
				</div>
			</div>
			<div class="form-group">
				<div class="text-left">
					<label for="password">Nama Instansi :</label>
					<input type="text" class="form-control" id="namain" name="namain"
						placeholder="Masukkan nama instansi">
				</div>
			</div>
			<div class="form-group">
				<div class="text-left">
					<label for="password">Jumlah Responden :</label>
					<input type="text" class="form-control" id="jmlresponden" name="jmlresponden"
						placeholder="Masukkan jumlah responden">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-outline-dark mb-2 w-25">Mulai Survei</button>
		</form>
		<a class="btn btn-outline-dark mb-2 w-25" href="<?php echo site_url('C_homeAdmin/index'); ?>"
			role="button">Kembali ke Menu Utama</a></td>
	</div>
</div>
