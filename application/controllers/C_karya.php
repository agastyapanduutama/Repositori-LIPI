<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_karya extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('M_publikasi', 'publikasi');
		$this->load->model('M_satker', 'satker');
		$this->load->model('M_subjek', 'subjek');
		$this->load->model('M_home', 'karya');
		$this->load->library('pagination');
		// $this->load->model('admin/m_karya', 'karya');
	}


	public function beranda($page = null)
	{

        $config['base_url'] = base_url('karya'); 
        $config['total_rows'] = $this->db->get('t_karya')->num_rows(); 
		$config['per_page'] = 5; 
		$from = $this->uri->segment(2);

		$config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config); 

        $karya = $this->karya->data_karya($config['per_page'], $from);

		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

       	$totalKarya = $this->db->get('t_karya')->num_rows();

       	$tahun = $this->karya->tahun();
        
       	// $this->req->print($tahun);


		$data = array(
					'pagination'=> $this->pagination->create_links(),
					'satker' 	=> $satker,
					'tahun' 	=> $tahun->result(),
					'publikasi' => $publikasi,
					'subjek' 	=> $subjek,
                    'karya'     => $karya,
					'script'    => 'karya',
					'title' 	=> 'Repositori Karya' ,
					'konten' 	=> 'home/home',
					 );		

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function lihat($id)
	{

		$lihatKarya = $this->karya->detailKarya	($id);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$bongkartags = explode(',', $lihatKarya->tag);

		$data = array(
					  	'title' 	=> $lihatKarya->judul_karya ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $lihatKarya,
						'tag'		=> $bongkartags,
					  	'konten' 	=> 'home/detail',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function tag($tags)
	{


        $config['base_url'] = base_url("karya/tag/$tags"); 
        $config['total_rows'] = $this->db->get('t_karya')->num_rows(); 
		$config['per_page'] = 5; 
		$from = $this->uri->segment(2);

		$config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config); 

		$tags = str_replace('%20', ' ', $tags);

        $tagKarya = $this->karya->tagKarya($config['per_page'], $from, $tags);

		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(

						'pagination'=> $this->pagination->create_links(),
					  	'title' 	=> 'karya' ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $tagKarya,
					  	'konten' 	=> 'home/home',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function cari()
	{

		$keywords = $this->input->get('pencarian');
		$keywords = str_replace('+', ' ', $keywords);

		$config['base_url'] = base_url("karya/cari?pencarian=$_GET[pencarian]"); 
        $config['total_rows'] = $this->karya->cariSama($keywords); 
		$config['per_page'] = 5; 
		$from = $this->uri->segment(2);

		$config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config); 

		$cariKarya = $this->karya->cariKarya($config['per_page'], $from, $keywords);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(
						'pagination'=> $this->pagination->create_links(),
					  	'title' 	=> 'karya' ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $cariKarya,
					  	'konten' 	=> 'home/home',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}


	public function karyaSatuan($id)
	{

		if($this->uri->segment(2) == "publikasi") {
			$tipe = $this->karya->satuan = "1";	
			$idData = $this->uri->segment(3);
		}
		if($this->uri->segment(2) == "satker") {
			$tipe = $this->karya->satuan = 	"2";
			$idData = $this->uri->segment(3);
		}
		if($this->uri->segment(2) == "subjek") {
			$tipe = $this->karya->satuan = "3";
			$idData = $this->uri->segment(3);
		}

		$dataSatuan = $this->karya->dataSatuan($idData);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(
					  	'title' 	=> 'karya' ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $dataSatuan,
					  	'konten' 	=> 'home/home',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function satuan($satuan)
	{
		if($this->uri->segment(4) == "publikasi") {
			$tipe = $this->karya->satuan = "1";	
		}
		if($this->uri->segment(4) == "satker") {
			$tipe = $this->karya->satuan = 	"2";
		}
		if($this->uri->segment(4) == "subjek") {
			$tipe = $this->karya->satuan = "3";
		}

		$dataSatuan = $this->karya->ambilSatuan($satuan);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(
					  	'title' 	=> 'karya' ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'satuan' 	=> $dataSatuan,
					  	'konten' 	=> 'home/satuan',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	


}

/* End of file C_karya.php */
/* Location: ./application/controllers/C_karya.php */