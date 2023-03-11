<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kontak extends CI_Controller {


	// load data
	public function __construct()
	{
		parent::__construct();
		$this->log_user->add_log();
		$this->load->model('user_model');
		$this->load->model('staff_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
		
	
	}

	public function index()
	{
		$kontak = $this->db->query("SELECT * FROM kontak ")->result();
		
		$data = array(	'title'		=> 'Kontak',
						'kontak'		=> $kontak,
						'isi'		=> 'admin/kontak/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function kirim_email()
	{
		$id = $this->uri->segment(4);
		
		$kontak = $this->db->query("SELECT * FROM kontak WHERE id = '$id'")->row_array();
		
		$data = array(	'title'		=> 'Kontak',
						'kontak'		=> $kontak,
						'isi'		=> 'admin/kontak/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		
		$this->db->query("DELETE FROM kontak WHERE id = '$id'");
		$this->session->set_flashdata('sukses', 'Data berhasil dikirim');
		return redirect('admin/kontak');

		
	}

	public function send()
	{

		$this->load->library('email');

        $this->email->from('laptopl293@gmail.com');
        $this->email->to('laptopl293@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
		$this->email->send();


	}

}

/* End of file Akun.php */
/* Location: ./application/controllers/admin/Akun.php */	