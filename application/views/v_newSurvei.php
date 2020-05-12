<div class="container">
    <div class="text-center">
        <div class="text-secondary">
        <h1>The Proper</h1>
        </div>
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>
        <form method="post" action=" <?= site_url('C_homeAdmin/newSurvei'); ?>">
  			<div class="form-group">
              <div class="text-left">
    			<label for="username">Kode Ruangan :</label>
    			<input type="text" class="form-control" id="koderuang" name ="koderuang" placeholder="ketikan kode ruangan">
                </div>
  			</div>
  			<div class="form-group">
              <div class="text-left">
    			<label for="password">Nama Ruangan :</label>
    			<input type="text" class="form-control" id="namaruang" name="namaruang" placeholder="ketikan nama ruangan">
                </div>
  			</div>
              <div class="form-group">
              <div class="text-left">
    			<label for="password">Nama Instansi :</label>
    			<input type="text" class="form-control" id="namain" name="namain" placeholder="ketikan nama instansi">
                </div>
  			</div>
  			<button type="submit" class="btn btn-primary">Mulai Survei</button>
		</form>
    </div>
</div>