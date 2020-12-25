<?php


if ($_SESSION['id'] == '' ) {
    
    $this->session->set_flashdata('warning', 'Silakan Masuk Terlebih dahulu');
    redirect('admin/login','refresh');
    
}

if ($konten) {
    $this->load->view($konten);
}
