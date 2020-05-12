<div class="container">
    <div class="text-center">
        <div class="text-secondary">
        <h1>The Proper</h1>
        </div>
        
        <form method="post" action=" <?= site_url('C_daftarResponden/daftar'); ?>">
  			<div class="form-group">
              <div class="text-left">
    			<label for="username">Kode Survei :</label>
    			<input type="text" class="form-control" id="kodeunik" name ="kodeunik" placeholder="ketikan kode unik survei">
                </div>
  			</div>
  			<div class="form-group">
              <div class="text-left">
    			<label for="password">Nama Responden :</label>
    			<input type="text" class="form-control" id="namares" name="namares" placeholder="ketikan nama anda">
                </div>
  			</div>
  			<button type="submit" class="btn btn-primary">Mulai</button>
		</form>
    </div>
</div>