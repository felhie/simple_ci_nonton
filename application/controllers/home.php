<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('m_data');
            $this->load->library('pagination');
    }
	public function index()
	{
		$jumlah= $this->m_data->jumlah();
 
		$config['base_url'] = 'http://localhost/ci_nonton/home/index/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 8; 		
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		
		$dari = $this->uri->segment('3');
		$data['data'] = $this->m_data->ambil_data($config['per_page'],$dari);
		$this->pagination->initialize($config);

		$this->load->view('index', $data);
	}


	public function nonton($id='')
	{
		$data['data'] = $this->m_data->nonton($id);
		$this->load->view('nonton', $data);
	}
}
