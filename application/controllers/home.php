<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{


    public function index()
    {


        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/Dash');
        $this->load->view('templates1/footer');
    }
    // public function tambah()
    // {
    //     $this->load->view('templates1/header');
    //     $this->load->view('admin/tambahitem');
    //     $this->load->view('templates1/footer');
    // }
    // public function edit()
    // {
    //     $this->load->view('templates1/header');
    //     $this->load->view('admin/edititem');
    //     $this->load->view('templates1/footer');
    // }
}
