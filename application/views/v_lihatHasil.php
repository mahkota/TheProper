<div class="container">
    <div class="text-center">
        <div class="text-secondary">
        <h1>The Proper</h1>
        </div>
        
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
      <th scope="col">Detail</th>
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

      <td><a class="btn btn-primary btn-lg" href="<?php echo site_url('C_homeAdmin/showDetail/'. $sv['id_survei']); ?>" role="button">detail</a></td>
    </tr>




                <?php endforeach; ?>
                </tbody>
</table>

</div>



