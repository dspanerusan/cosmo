<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/widget.min.css") ?>">
<script>
	const KODE_PROVINSI = "<?= config_item('provinsi_covid') ?: 'undefined' ?>";
</script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/widget.min.js") ?>"></script>

<section id="covid-nasional" class="py-4 bg-white">
	<div class="container">
		<p class="font-weight-bold text-muted line line-short shimmer" data-name="wilayah"></p>
		<div class="row">
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid positif shimmer">
					<span>Total Positif</span>
					<span data-name="positif"></span>
					<span class="small">orang</span>
				</div>
			</div>
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid sembuh shimmer">
					<span>Total Sembuh</span>
					<span data-name="sembuh"></span>
					<span class="small">orang</span>
				</div>
			</div>
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid meninggal shimmer">
					<span>Total Meninggal</span>
					<span data-name="meninggal"></span>
					<span class="small">orang</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if(config_item('provinsi_covid')) : ?>
<section id="covid-provinsi" class="py-2 bg-white">
	<div class="container">
		<p class="font-weight-bold text-muted line line-short shimmer" data-name="wilayah"></p>
		<div class="row">
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid positif shimmer">
					<span>Total Positif</span>
					<span data-name="positif"></span>
					<span class="small">orang</span>
				</div>
			</div>
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid sembuh shimmer">
					<span>Total Sembuh</span>
					<span data-name="sembuh"></span>
					<span class="small">orang</span>
				</div>
			</div>
			<div class="col-lg-3 col-12 px-2 py-1">
				<div class="square covid meninggal shimmer">
					<span>Total Meninggal</span>
					<span data-name="meninggal"></span>
					<span class="small">orang</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif ?>