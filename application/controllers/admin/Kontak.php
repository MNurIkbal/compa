<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kontak extends CI_Controller
{


	// load data
	public function __construct()
	{
		parent::__construct();
		$this->log_user->add_log();
		$this->load->model('user_model');
		$this->load->model('staff_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
		
	}

	public function index()
	{
		$kontak = $this->db->query("SELECT * FROM kontak ")->result();

		$data = array(
			'title'		=> 'Kontak',
			'kontak'		=> $kontak,
			'isi'		=> 'admin/kontak/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function kirim_email()
	{
		$id = $this->uri->segment(4);

		$kontak = $this->db->query("SELECT * FROM kontak WHERE id = '$id'")->row_array();

		$data = array(
			'title'		=> 'Kontak',
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
		$kon = $this->db->query("SELECT * FROM konfigurasi")->row_array();
		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => $kon['protocol'],
			'smtp_host' => $kon['smtp_host'],
			'smtp_user' => $kon['smtp_user'],  // Email gmail
			'smtp_pass'   => $kon['smtp_pass'],  // Password gmail
			'smtp_crypto' => $kon['smtp_timeout'],
			'smtp_port'   => $kon['smtp_port'],
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		];

		$pesan = $this->input->post('keterangan');
		$email = $this->input->post("email");
		// Load library email dan konfigurasinya
		$this->load->library('email', $config);

		// Email dan nama pengirim
		$this->email->from($kon['smtp_user'], 'Admin');
		// $this->email->from('ikbalmnur17@gmail.com', 'ikbal');

		// Email penerima
		$this->email->to($email); // Ganti dengan email tujuan
		// Lampiran email, isi dengan url/path file
		// $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

		// Subject email
		$this->email->subject($kon['namaweb']);

		// Isi email
		$this->email->message($pesan);
		 // Tampilkan pesan sukses atau error
		 if ($this->email->send()) {
			$this->session->set_flashdata('sukses', 'Data berhasil dikirim');
        } else {
			$this->session->set_flashdata('sukses', 'Data gagal dikirim');
        }
		return redirect('admin/kontak');
	}
}

/* End of file Akun.php */
/* Location: ./application/controllers/admin/Akun.php */
