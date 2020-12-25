<?php $page = $_SERVER['REQUEST_URI'];?>
<!-- <div class="top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col">
                <p class="social d-flex">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-google"></span></a>
                    <a href="#"><span class="icon-pinterest"></span></a>
                </p>
            </div>
            <div class="col d-flex justify-content-end">
                <p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
            </div>
        </div>
    </div>
</div> -->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home')?>"> <img src="<?= base_url('assets/templates/images/custom/logo/logo.png')?>" width="60"> CIPTA SARI PUSAKA JAYA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= strpos($page, 'home') !== false ? 'active' : '' ?>"><a href="<?= base_url('home')?>" class="nav-link ">Home</a></li>
                <li class="nav-item <?= strpos($page, 'galery') !== false ? 'active' : '' ?>"><a href="<?= base_url('galery')?>" class="nav-link">Galeri</a></li>
                <li class="nav-item <?= strpos($page, 'galeri/rumah') !== false ? 'active' : '' ?>"><a href="<?= base_url('galeri/rumah')?>" class="nav-link">Galeri Rumah</a></li>
                <li class="nav-item <?= strpos($page, 'agent') !== false ? 'active' : '' ?>"><a href="<?= base_url('agent')?>" class="nav-link">Agen Kami</a></li>
                <li class="nav-item <?= strpos($page, 'about') !== false ? 'active' : '' ?>"><a href="<?= base_url('about')?>" class="nav-link">Tentang Maisonet</a></li>
               

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->