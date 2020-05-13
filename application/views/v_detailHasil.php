<nav class="navbar navbar-light bg-light shadow">
	<span class="navbar-brand mx-auto mb-0 h1 text-center">The Proper</span>
</nav>

<div class="container">
	<div class="text-center">
		<br><br>
		<div class="text-left">
			<?php foreach($survei as $sv) : ?>
			<h5><?php echo "Kode Survei : ", $sv['kode_survei'] ?></h5>
			<h5><?php echo "Kode Ruangan : ", $sv['kode_ruang'] ?></h5>
			<h5><?php echo "Nama Ruangan : ", $sv['nama_ruang'] ?></h5>
			<h5><?php echo "Nama Instansi : ", $sv['nama_instansi'] ?></h5>
			<h5><?php echo "Jumlah Responden : ", $sv['jumlah_responden'] ?></h5>
			<h5><?php echo "Waktu Pengambilan Survei : ", $sv['waktu_survei'] ?></h5>
		</div>
		<br><br>
		<div class="text-center">
			<h3>Ukuran font terbaik: <b>x pt</b>.</h3>
			<?php endforeach; ?>
			<br>
			<a class="btn btn-outline-dark" href="<?php echo site_url('C_homeAdmin/showHasil'); ?>"
				role="button">Kembali ke Hasil Survei</a></td>
		</div>
	</div>
</div>
