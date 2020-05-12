<div class="container">
    <div class="text-center">
        <div class="text-secondary">
        <h1>The Proper</h1>
        </div>
        <div class="text-left">



                <?php foreach($survei as $sv) : ?>






      <h3><?php echo "Kode Survei : ", $sv['kode_survei'] ?></h1>
      <h3><?php echo "Kode Ruangan : ", $sv['kode_ruang'] ?></h1>
      <h3><?php echo "Nama Ruangan : ", $sv['nama_ruang'] ?></h1>
      <h3><?php echo "Nama Instansi : ", $sv['nama_instansi'] ?></h1>
      <h3><?php echo "Jumlah Responden : ", $sv['jumlah_responden'] ?></h1>
      <h3><?php echo "Waktu Pengambilan Survei : ", $sv['waktu_survei'] ?></h1>






                <?php endforeach; ?>
                </div>
    </div>
</div>