<nav class="navbar navbar-light bg-light shadow">
	<span class="navbar-brand mx-auto mb-0 h1 text-center">The Proper</span>
</nav>

<div class="container">
	<div class="text-center">
		<br>
		<h4>Hasil Survei</h4>
		<br>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Kode Ruangan</th>
				<th scope="col">Nama Ruangan</th>
				<th scope="col">Nama Instansi</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<?php $i = 1; ?>
		<?php foreach($survei as $sv) : ?>
		<tbody>
			<tr>
				<th scope="row"><?php echo $i ?></th>
				<?php $i = $i + 1; ?>
				<td><?php echo $sv['nama_ruang'] ?></td>
				<td><?php echo $sv['kode_ruang'] ?></td>
				<td><?php echo $sv['nama_instansi'] ?></td>
				<td><a class="btn btn-outline-dark btn-sm"
						href="<?php echo site_url('C_homeAdmin/showDetail/'. $sv['id_survei']); ?>" role="button">Detail</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<div class="text-center">
		<a class="btn btn-outline-dark" href="<?php echo site_url('C_homeAdmin/index'); ?>" role="button">Kembali ke Menu
			Utama</a></td>
	</div>
</div>
