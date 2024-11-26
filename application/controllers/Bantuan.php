<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {

        date_default_timezone_set('ASIA/JAKARTA');
        $tgl = date('Y-m-d H:i:s');


        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $pesan = $this->input->post('pesan');
        $created_date = $tgl;

        var_dump($nama);
        $this->db->query("INSERT INTO tbl_bantuan (nama,email,telp,pesan, created_date) VALUES ('" . $nama . "','" . $email . "','" . $telp . "','" . $pesan . "', '" . $created_date . "') ");

        $this->load->helper('url');
    }
}
