<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash_cs extends CI_Controller
{


    public function index()
    {


        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar2');
        // $this->load->view('templates/topbar');
        $this->load->view('costumer/dash');
        $this->load->view('templates1/footer');
    }
}
