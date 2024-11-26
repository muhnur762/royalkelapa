<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$data = [
			'dc1' => $this->db->get_where('tbl_deskripsi_content', ['id' => 1])->row(),
			'dc2' => $this->db->get_where('tbl_deskripsi_content', ['id' => 2])->row(),
			'dc3' => $this->db->get_where('tbl_deskripsi_content', ['id' => 3])->row(),
			'dc4' => $this->db->get_where('tbl_deskripsi_content', ['id' => 4])->row(),
			'dc5' => $this->db->get_where('tbl_deskripsi_content', ['id' => 5])->row(),
			'dc6' => $this->db->get_where('tbl_deskripsi_content', ['id' => 6])->row(),
			'dc7' => $this->db->get_where('tbl_deskripsi_content', ['id' => 7])->row(),
			'dc8' => $this->db->get_where('tbl_deskripsi_content', ['id' => 8])->row(),
			'dc9' => $this->db->get_where('tbl_deskripsi_content', ['id' => 9])->row(),
			'dc10' => $this->db->get_where('tbl_deskripsi_content', ['id' => 10])->row(),
			'dc11' => $this->db->get_where('tbl_deskripsi_content', ['id' => 11])->row(),
			'dc12' => $this->db->get_where('tbl_deskripsi_content', ['id' => 12])->row(),
			'web' => $this->db->get('tbl_website')->row(),
			'home' => $this->db->get('tbl_homeweb')->row(),
			'sosmed' => $this->db->get('tbl_sosmed')->result(),
			'syarat' => $this->db->get('tbl_syarat')->row(),
			'snack' => $this->db->get('tbl_snack')->result(),
			'dessert' => $this->db->get('tbl_dessert')->result(),
			'greguler' => $this->db->get('tbl_guuk_reguler')->result(),
			'grakyat' => $this->db->get('tbl_gubuk_rakyat')->result(),
			'produk' => $this->db->get('tbl_produk')->result(),
			'phemat' => $this->db->get('tbl_paket_hemat')->result(),
			'ppremium' => $this->db->get('tbl_paket_premium')->result(),
			'testimoni' => $this->db->get('tbl_testimoni')->result(),

		];

		$numberAPI = $data['web']->phone;
		$n1API = substr($numberAPI, 1);
		$apiWa = $n1API;

		$data['apiWa'] = $n1API;

		$waLink = 'https://api.whatsapp.com/send?phone=' . $apiWa . '&text=Hallo%20Royal%20Keapa%20Catering!%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F';
		$data['waLink'] = $waLink;

		$this->load->view('/content/home_v', $data);
	}
}
