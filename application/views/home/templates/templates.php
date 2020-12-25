
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="<?= base_url()?>assets/img/logolipi.png"/> -->
	<link rel="shortcut icon" href="http://lipi.go.id/public/themes/web/assets/img/favicon/favicon.ico" type="image/x-icon" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/fashe/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				
				
				
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?= base_url()?>assets/fashe/index.html" class="logo">
					<img src="<?= base_url()?>assets/img/logolipi.png" alt="Repositori karya">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							
							<li>
								<a href="<?= base_url('karya')?>">Beranda</a>
							</li>

							<li>
								<a target="_blank" href="http://lipi.go.id/kontak">Tentang kami</a>
							</li>

						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?= base_url()?>assets/fashe/index.html" class="logo-mobile">
				<img src="<?= base_url()?>assets/fashe/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="<?= base_url()?>assets/fashe/#" class="header-wrapicon1 dis-block">
						<img src="<?= base_url()?>assets/fashe/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?= base_url()?>assets/fashe/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?= base_url()?>assets/fashe/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="<?= base_url()?>assets/fashe/#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?= base_url()?>assets/fashe/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="<?= base_url()?>assets/fashe/#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?= base_url()?>assets/fashe/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="<?= base_url()?>assets/fashe/#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?= base_url()?>assets/fashe/cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?= base_url()?>assets/fashe/#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="<?= base_url()?>assets/fashe/#" class="topbar-social-item fa fa-facebook"></a>
							<a href="<?= base_url()?>assets/fashe/#" class="topbar-social-item fa fa-instagram"></a>
							<a href="<?= base_url()?>assets/fashe/#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="<?= base_url()?>assets/fashe/#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="<?= base_url()?>assets/fashe/#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="<?= base_url()?>assets/fashe/index.html">Homepage V1</a></li>
							<li><a href="<?= base_url()?>assets/fashe/home-02.html">Homepage V2</a></li>
							<li><a href="<?= base_url()?>assets/fashe/home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?= base_url()?>assets/fashe/contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">


				<!-- Isi Konten -->
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<?php require 'content.php'; ?>
					</div>
				</div>

				


				<!-- Navigasi Kanan -->
				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<form action="<?= base_url('karya/cari')?>" method="GET">
							<div class="pos-relative bo11 of-hidden">
								<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="pencarian" value="" placeholder="Pencarian">
								<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
									<i class="fs-13 fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</form>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Jenis Publikasi
						</h4>

						<ul>
							<?php foreach ($publikasi as $pub) : ?>
							<li class="p-t-6 p-b-8 bo6">
								 <a href="<?= base_url('karya/publikasi/' . $pub->id_publikasi) ?>"><?= $pub->nama_publikasi ?> </a>
							</li>
							<?php endforeach ?>


							<li class="p-t-6 p-b-8 bo7">
								<a href="<?= base_url('karya/satuan/lebih/publikasi')?>" class="s-text13 p-t-5 p-b-5">
									Lihat Lebih
								</a>
							</li>
						</ul>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Satuan Kerja
						</h4>

						<ul>
							<?php foreach ($satker as $sat) : ?>
							<li class="p-t-6 p-b-8 bo6">
								 <a href="<?= base_url('karya/satker/' . $sat->id_satker) ?>"><?= $sat->nama_satker ?> </a>
							</li>
							<?php endforeach ?>


							<li class="p-t-6 p-b-8 bo7">
								<a href="<?= base_url('karya/satuan/lebih/satker')?>" class="s-text13 p-t-5 p-b-5">
									Lihat Lebih
								</a>
							</li>
						</ul>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Subjek
						</h4>

						<ul>
							<?php foreach ($subjek as $sub) : ?>
							<li class="p-t-6 p-b-8 bo6">
								 <a href="<?= base_url('karya/subjek/' . $sub->id_subjek) ?>"><?= $sub->nama_subjek ?> </a>
							</li>
							<?php endforeach ?>


							<li class="p-t-6 p-b-8 bo7">
								<a href="<?= base_url('karya/satuan/lebih/subjek')?>" class="s-text13 p-t-5 p-b-5">
									Lihat Lebih
								</a>
							</li>
						</ul>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Tahun Publikasi
						</h4>

						<ul>
							<?php foreach ($tahun as $sub) : ?>
							<li class="p-t-6 p-b-8 bo6">
								 <a href="<?= base_url('karya/tahun/' . $sub->tahun) ?>"><?= $sub->tahun ?> </a>
							</li>
							<?php endforeach ?>


							<li class="p-t-6 p-b-8 bo7">
								<a href="<?= base_url('karya/satuan/lebih/tahun')?>" class="s-text13 p-t-5 p-b-5">
									Lihat Lebih
								</a>
							</li>
						</ul>


						


					
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="">
				<h4 class="s-text12 p-b-30">
					Repositori karya
				</h4>
						Repositori Ilmiah Nasional (RIN) merupakan sarana untuk menyimpan, melestarikan, mengutip, menganalisis dan berbagi data penelitian. RIN berperan sebagai media online dalam mengelola, menyimpan dan berbagi data penelitian. Peneliti, penulis data, penerbit, distributor data, dan institusi afiliasi semuanya menerima kredit akademis dan visibilitas web. Peneliti, Instansi, dan Pemberi Dana memiliki kendali penuh terhadap data penelitian.
			</div>

			
		</div>

		
			<div class="t-center s-text8 p-t-20">
				Copyright LIPI Indonesia © <?php echo date("Y") ?> All rights reserved. 
				<!-- | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?= base_url()?>assets/fashe/https://colorlib.com" target="_blank">Colorlib</a> -->
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url()?>assets/fashe/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url()?>assets/fashe/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url()?>assets/fashe/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/fashe/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url()?>assets/fashe/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/fashe/js/main.js"></script>

</body>
</html>
