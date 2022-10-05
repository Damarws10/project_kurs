<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<link href="<?= base_url('css/fancybox/jquery.fancybox.css')?>" rel="stylesheet">
	<link href="<?= base_url('css/jcarousel.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('css/flexslider.css') ?>" rel="stylesheet')" />
	<link href="<?= base_url('js/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />
	<link rel="icon" href="<?=base_url()?>/favicon-32x32.png" type="image/gif">
	<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->
	<title> <?= $nama ?> </title>
</head>
<body>
	<div id="wrapper">
		
		<?= $this->include('layout/header') ?>

		<?= $this->renderSection('content') ?>

		<?= $this->include('layout/footer') ?>

	</div>
	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<script src="<?= base_url('js/jquery.js') ?>"></script>
	<script src="<?= base_url('js/jquery.easing.1.3.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('js/jquery.fancybox.pack.js') ?>"></script>
	<script src="<?= base_url('js/jquery.fancybox-media.js') ?>"></script> 
	<script src="<?= base_url('js/portfolio/jquery.quicksand.js') ?>"></script>
	<script src="<?= base_url('js/portfolio/setting.js') ?>"></script>
	<script src="<?= base_url('js/jquery.flexslider.js') ?>"></script>
	<script src="<?= base_url('js/animate.js') ?>"></script>
	<script src="<?= base_url('js/custom.js') ?>"></script>
	<script src="<?= base_url('js/owl-carousel/owl.carousel.js') ?>"></script>
	
</body>
</html>