<?php
defined('BASEPATH') or exit('No direct script access allowed');

class costumer extends CI_Controller
{


    public function index()
    {


        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar2');
        // $this->load->view('templates/topbar');
        $this->load->view('costumer/home');
        $this->load->view('templates1/footer');
    }
}
