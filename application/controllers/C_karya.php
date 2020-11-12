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
		// $this->load->model('admin/m_karya', 'karya');
	}

	public function beranda()
	{


		

		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();
        $karya = $this->karya->data_karya();

       	$totalKarya = $this->db->get('t_karya')->num_rows();

        
		$data = array(
					'satker' 	=> $satker,
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

		$lihatKarya = $this->karya->dataKarya($id);
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

		$tagKarya = $this->karya->tagKarya($tags);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(
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

		$cariKarya = $this->karya->cariKarya($keywords);
		$satker = $this->satker->data();
		$subjek = $this->subjek->data();
		$publikasi = $this->publikasi->data();

		$data = array(
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