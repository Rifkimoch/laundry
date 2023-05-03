<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_Model');
    }

    //tampil data 
    public function index()
    {
        $data['profile'] = $this->Profile_Model->get_data('user')->result();
        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/profile', $data);
        $this->load->view('templates1/footer');
    }
    //redirect ke view edit 
    public function edit($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['profile'] = $this->Profile_Model->edit_data($where, 'user')->result();
        $this->load->view('templates1/header');
        $this->load->view('admin/profile', $data);
        $this->load->view('templates1/footer');
    }

    //aksi proses update data 
    public function update()
    {
        $id_user = $this->input->post('id_user');
        $nama_user = $this->input->post('nama_user');
        $email = $this->input->post('email');


        $data = array(
            'nama_user' => $nama_user,
            'email' => $email

        );

        $where = array(
            'id_user' => $id_user
        );

        $this->Profile_Model->update_data($where, $data, 'user');
        redirect('profile/index');
    }
}
