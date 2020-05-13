<div class="container">
	<p>Kode Survei: <?= $ks?></p>
	<?php $this->session->set_flashdata('ks', $ks); ?>
	<img src="<?php echo $this->config->item('base_url'); ?>/assets/<?= $pic ?>" alt="">
	<br>
	<?php $nseq = $seq + 1; ?>
	<?php if ($seq != 10) {?>
	<a class="btn btn-primary float-right" href="<?php echo site_url('C_homeAdmin/loadSurveiDisplay/'. $nseq); ?>"
		role="button">Next</a>
	<?php } else {?>
	<a class="btn btn-primary float-left" href="<?php echo site_url('C_homeAdmin/index/'); ?>" role="button">Finish</a>
	<a class="btn btn-primary float-right" href="<?php echo site_url('C_homeAdmin/loadSurveiDisplay/1'); ?>"
		role="button">Repeat</a>
	<?php }?>
</div>
