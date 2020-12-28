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

		$sampai = $from + count($karya);
		if ($from == '') {
			$from = 1;
		}

		$data = array(
					'pagination'=> $this->pagination->create_links(),
					'awal'		=> $from,
					'akhir'		=> $sampai,
					'total'		=> $config['total_rows'],
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
       	$tahun = $this->karya->tahun();
		$publikasi = $this->publikasi->data();

		$bongkartags = explode(',', $lihatKarya->tag);

		$data = array(
					  	'title' 	=> $lihatKarya->judul_karya ,
						'satker' 	=> $satker,
						'tahun' 	=> $tahun->result(),
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

		$tags = str_replace('%20', ' ', $tags);
		$tagKarya = $this->karya->tagKaryaTotal($tags);
        $config['base_url'] = base_url("karya/tag/$tags/"); 
        // $config['total_rows'] = $this->db->get('t_karya')->num_rows(); 
        $config['total_rows'] = count($tagKarya); 
		$config['per_page'] = 5; 
		$from = $this->uri->segment(4);

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
		$tahun = $this->karya->tahun();

		// $this->req->print($tagKarya);

		$sampai = $from + count($tagKarya);
		if ($from == '') {
			$from = 1;
		}

		$data = array(

						'pagination'=> $this->pagination->create_links(),
      					'title' 	=> 'karya' ,
						'awal'		=> $from,
						'akhir'		=> $sampai,
						'total'		=> $config['total_rows'],
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'tahun' 	=> $tahun->result(),
						'karya' 	=> $tagKarya,
					  	'konten' 	=> 'home/home',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function cari()
	{

		$_POST = $_GET;
		$keywords = $this->input->post('pencarian');
		$keywords = str_replace('+', ' ', $keywords);

		$config['base_url'] = base_url("karya/cari?pencarian=$_GET[pencarian]&page="); 
        $config['total_rows'] = $this->karya->cariSama($keywords); 
		$config['per_page'] = 5; 
		$from = $this->uri->segment(3);

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
		$tahun = $this->karya->tahun();


		$sampai = $from + count($cariKarya);
		if ($from == '') {
			$from = 1;
		}

		$data = array(
					'pagination'=> $this->pagination->create_links(),
					'awal'		=> $from,
					'akhir'		=> $sampai,
					'total'		=> $config['total_rows'],
					'title' 	=> 'karya' ,
					'satker' 	=> $satker,
					'tahun' 	=> $tahun->result(),
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
			$uri = "publikasi";
			$tipe = $this->karya->satuan = "1";	
			$idData = $this->uri->segment(3);
		}
		if($this->uri->segment(2) == "satker") {
			$uri = "satker";
			$tipe = $this->karya->satuan = 	"2";
			$idData = $this->uri->segment(3);
		}
		if($this->uri->segment(2) == "subjek") {
			$uri = "subjek";
			$tipe = $this->karya->satuan = "3";
			$idData = $this->uri->segment(3);
		}

		$dataSatuan = $this->karya->dataSatuanAll($idData);
		$config['base_url'] = base_url("karya/$uri/$idData/");
		$config['total_rows'] = count($dataSatuan);
		$config['per_page'] = 5;
		
		// $from = $this->uri->segment(4);
		$from = ($this->uri->segment(4) == "") ? 1 : $this->uri->segment(4) ;
		

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

		$dataSatuan = $this->karya->dataSatuan($config['per_page'], $from, $idData);

		$sampai = $from + count($dataSatuan);
		if ($from == '') {
			$from = 1;
		}

		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();
		$tahun = $this->karya->tahun();

		$data = array(
						'pagination' => $this->pagination->create_links(),
					  	'title' 	=> 'karya',
						'awal'		=> $from,
						'akhir'		=> $sampai,
						'total'		=> $config['total_rows'],
						'satker' 	=> $satker,
						'tahun' 	=> $tahun->result(),
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $dataSatuan,
					  	'konten' 	=> 'home/home',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function tahun($tahun)
	{
		$dataTahun = $this->db->get_where('t_karya', ['tahun' => $tahun])->num_rows();
		$config['base_url'] = base_url("karya/tahun/$tahun/");
		$config['total_rows'] = $dataTahun;
		$config['per_page'] = 5;

		$from = ($this->uri->segment(4) == "") ? 0 : $this->uri->segment(4);

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

		$dataTahun = $this->karya->dataTahun($config['per_page'], $from, $tahun);

		$sampai = $from + count($dataTahun);
		if ($from == 0) {
			$from = 1;
		}


		// $this->req->print($this->pagination->create_links());


		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();
		$tahun = $this->karya->tahun();

		$data = array(
						'pagination' => $this->pagination->create_links(),
					  	'title' 	=> 'karya',
						'awal'		=> $from,
						'akhir'		=> $sampai,
						'total'		=> $config['total_rows'],
						'satker' 	=> $satker,
						'tahun' 	=> $tahun->result(),
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'karya' 	=> $dataTahun,
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
		if($this->uri->segment(4) == "tahun") {
			$tipe = $this->karya->satuan = "4";
		}

		$dataSatuan = $this->karya->ambilSatuan($satuan);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();
		$tahun = $this->karya->tahun();

		// $this->req->print($dataSatuan);

		$data = array(
					  	'title' 	=> 'karya' ,
						'satker' 	=> $satker,
						'publikasi' => $publikasi,
						'subjek' 	=> $subjek,
						'tahun' 	=> $tahun->result(),
						'satuan' 	=> $dataSatuan,
					  	'konten' 	=> 'home/satuan',

					   );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	


}

/* End of file C_karya.php */
/* Location: ./application/controllers/C_karya.php */