<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
		$this->load->model('client_model');
	}

	// Main page video
	public function index()	{
		$client = $this->client_model->result();
		

		$data = array(	'title'		=> 'Mitra Kerja Sama',
						'deskripsi'	=> 'Mitra Kerja Sama',
						'keywords'	=> 'Mitra Kerja Sama',
						'client'	=>	$client,
						'isi'		=> 'client/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Video.php */
/* Location: ./application/controllers/Video.php */