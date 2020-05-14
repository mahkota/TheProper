<nav class="navbar navbar-light bg-light shadow">
	<span class="navbar-brand mx-auto mb-0 h1 text-center">The Proper</span>
</nav>

<div class="container">
    <div class="text-center">
        <!-- <div class="text-secondary">
        <h1>The Proper</h1>
        </div> -->
        <br><br>
        <?php $nilai1 = 1; 
        $nilai2 = 2; 
        $nilai3 = 3; 
        $nilai4 = 4; 
        $nilai5 = 5; 
        ?>


<?php if($this->session->userdata('total') < 60){ ?>
    <h2>Kode Survei : <?= $this->session->userdata('kodesur'); ?></h2>
    <h2>Nama Responden : <?= $this->session->userdata('namaresponden'); ?></h2>
<?php } ?>


        <?php if($this->session->userdata('count') == 10){
            $this->session->set_userdata('count', 0);
        } ?>
        
        <?php $this->session->set_userdata('count', $this->session->userdata('count') + 1); ?>
        <?php $this->session->set_userdata('total', $this->session->userdata('total') + 1); ?>
        <?php if($this->session->userdata('total') <= 60){ ?>
        <h2>Tampilan No. : <?= $this->session->userdata('count'); ?></h2>
        <br><br>
        <a class="btn btn-danger btn-lg w-25" href="<?= site_url('C_daftarResponden/penilaian/'. $nilai1); ?>" role="button">1 - Sangat Buruk</a><br><br>
        <a class="btn btn-warning btn-lg w-25" href="<?= site_url('C_daftarResponden/penilaian/'. $nilai2); ?>" role="button">2 - Buruk</a><br><br>
        <a class="btn btn-secondary btn-lg w-25" href="<?= site_url('C_daftarResponden/penilaian/'. $nilai3); ?>" role="button">3 - Cukup</a><br><br>
        <a class="btn btn-info btn-lg w-25" href="<?= site_url('C_daftarResponden/penilaian/'. $nilai4); ?>" role="button">4 - Baik</a><br><br>
        <a class="btn btn-success btn-lg w-25" href="<?= site_url('C_daftarResponden/penilaian/'. $nilai5); ?>" role="button">5 - Sangat Baik</a>
        <?php }else{  ?>
            <?php if($this->session->userdata('total') == 60){
            $this->session->set_userdata('total', 0);
            } ?>
            <h1>Penilaian telah selesai.</h1>
            <br>
            <a class="btn btn-outline-dark btn-lg" href="<?php echo site_url('C_daftarResponden/selesaiNilai'); ?>" role="button">Kembali ke Layar Utama</a>
        <?php } ?>
    </div>
</div>