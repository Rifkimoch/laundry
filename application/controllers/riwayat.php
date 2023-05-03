<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayat extends CI_Controller
{
    public function index()
    {

        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar');
        $this->load->view('admin/riwayat');
        $this->load->view('templates1/footer');
    }
    public function detailtrans()
    {

        $this->load->view('templates1/header');
        // $this->load->view('templates1/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/detailtrans');
        $this->load->view('templates1/footer');
    }
}
