<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="shortcut icon" href="http://lipi.go.id/public/themes/web/assets/img/favicon/favicon.ico" type="image/x-icon" />
  <meta name="baseUrl" content="<?= base_url() ?>">
  <meta name="menu" content="<?= (isset($menu)) ? $menu : null ?>">
  <meta name="token" content="<?= $this->session->userdata('token') ?>">
  <meta name="upk" content="<?= $this->session->userdata('upk') ?>">

  <title>Repositori Karya </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawasome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawasome/css/all.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/jstree/dist/themes/default/style.min.css">

  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/admin/node_modules/prismjs/themes/prism.css"> -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/datatables.min.css" />


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/iziToast.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/components.css">

  <!-- Summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/summernote/summernote-bs4.css">

  <!-- Tagify -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/tagify/dist/tagify.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        </form>
        <ul class="navbar-nav navbar-right">


          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= base_url() ?>assets/admin/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama_user'); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">


              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
             <a href="#" id="btnKeluar" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">REPOSITORI KARYA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RK</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Menu</li>
            
            <li class="nav-item dropdown">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                <i class="fas fa-columns"></i> <span>Dashboard</span></a>
            </li>
            
            <?php if ($this->session->userdata('level') == '1'): ?>
              

            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Master</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= base_url('admin/subjek') ?>">Data Subjek</a></li>
                <li><a href="<?= base_url('admin/publikasi') ?>">Data Publikasi</a></li>
                <li><a href="<?= base_url('admin/satker') ?>">Data Satuan Kerja</a></li>
                <li><a href="<?= base_url('admin/user') ?>">Data User</a></li>
              </ul>
            </li>
            
            <?php endif ?>
            

            <?php if ($this->session->userdata('level') > 1): ?>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Repositori</span></a>
              <ul class="dropdown-menu">
                <?php if ($this->session->userdata('level') == 2 ): ?>
                    <li><a class="nav-link" href="<?= base_url('admin/karya/konfirmasi') ?>">Konfirmasi Karya</a></li>
                
                <?php endif ?>
                <?php if ($this->session->userdata('level') == 3): ?>
                    <li><a class="nav-link" href="<?= base_url('admin/karya') ?>">Data Karya</a></li>
                    <li><a class="nav-link" href="<?= base_url('admin/karya/tambah') ?>">Tambah Karya</a></li>
                <?php endif ?>
              </ul>
            </li>
            <?php endif ?>
            


        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title ?></h1>
          </div>

          <?php require 'content.php'; ?>

        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> Powered By <a href="https://www.instagram.com/informatik.id/">Informatik.id</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/stisla.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/datatables.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url() ?>assets/jstree/dist/jstree.js"></script>

  <!-- <script src="<?= base_url() ?>assets/admin/node_modules/prismjs/prism.js"></script> -->
  <!-- JS Libraies -->

  <!-- Tagify -->
  <script src="<?= base_url() ?>assets/tagify/dist/tagify.min.js"></script>
  <script src="<?= base_url() ?>assets/tagify/dist/jQuery.tagify.min.js"></script>

  <!-- Sweet Alert -->
  <script src="<?= base_url() ?>assets/modules/iziToast.min.js"></script>
  <script src="<?= base_url() ?>assets/modules/sweetalert.min.js"></script>


  <!-- Template JS File -->
  <script src="<?= base_url() ?>assets/admin/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/custom.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/page/bootstrap-modal.js"></script>
  <script src="<?= base_url() ?>assets/socket.io/dist/socket.io.js"></script>
  <script src="<?= base_url() ?>assets/js/page/admin.js"></script>
  <script src="<?= base_url() ?>assets/js/page/<?= (isset($script)) ? $script : "" ?>.js"></script>

  <!-- Summernote -->
  <script src="<?= base_url() ?>assets/summernote/summernote-bs4.js"></script>


  <!-- bs-custom-file-input -->
  <script src="<?= base_url() ?>assets/cust/bs-custom-file-input.min.js"></script>
</body>

</html>