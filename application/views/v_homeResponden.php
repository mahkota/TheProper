<nav class="navbar navbar-light bg-light shadow">
	<span class="navbar-brand mx-auto mb-0 h1 text-center">The Proper</span>
</nav>

<div class="container">
    <div class="text-center">
        <!-- <div class="text-secondary">
        <h1>The Proper</h1>
        </div> -->
        <br>
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>
        <form method="post" action="">
  			<div class="form-group">
              <div class="text-left">
    			<label for="username">Kode Survei :</label>
    			<input type="text" class="form-control" id="kodeunik" name ="kodeunik" placeholder="Masukkan kode unik survei">
                </div>
  			</div>
  			<div class="form-group">
              <div class="text-left">
    			<label for="password">Nama Responden :</label>
    			<input type="text" class="form-control" id="namares" name="namares" placeholder="Masukkan nama anda">
                </div>
  			</div>
            <br>
  			<button type="submit" class="btn btn-outline-dark w-25">Mulai</button>
		</form>
    </div>
</div>