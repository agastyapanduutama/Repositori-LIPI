<?php $this->load->view('home/templates/header'); ?>

<body>

<?php $this->load->view('home/templates/menubar'); ?>

<div class="main-container">
    <div class="xs-pd-20-10 mx-0">
        <div class="min-height-200px pb-4">
            <?php $this->load->view($konten) ?>
        </div>
    </div>
</div>

<?php $this->load->view('home/templates/footer'); ?>