<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayatcs extends CI_Controller
{
    public function index()
    {

        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar2');
        $this->load->view('costumer/riwayat');
        $this->load->view('templates1/footer');
    }
    // public function detailtrans()
    // {

    //     $this->load->view('templates1/header');
    //     // $this->load->view('templates1/sidebar');
    //     // $this->load->view('templates/topbar');
    //     $this->load->view('admin/detailtrans');
    //     $this->load->view('templates1/footer');
    // }
}
