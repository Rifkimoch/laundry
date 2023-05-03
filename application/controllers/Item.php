<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_Model');
    }

    //tampil data 
    public function index()
    {
        $data['item'] = $this->Item_Model->get_data('lndr_item')->result();
        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/item', $data);
        $this->load->view('templates1/footer');
    }
    //redirect ke view tambah 
    public function tambah()
    {
        $this->load->view('templates1/header');
        $this->load->view('admin/tambahitem');
        $this->load->view('templates1/footer');
    }
    //set rules agar saat menginputkan tidak kosong 
    public function _rules()
    {
        $this->form_validation->set_rules('nama_item', 'Nama item', 'required', array(
            'required' => '%s Harus di isi'
        ));
        $this->form_validation->set_rules('harga', 'harga item', 'required', array(
            'required' => '%s Harus di isi'
        ));
    }
    //aksi tambah ke database 
    public function tambah_aksi()
    {

        $nama_item = $this->input->post('nama_item');
        $harga = $this->input->post('harga');
        $Foto_item = $_FILES['Foto_item'];
        if ($Foto_item = '') {
        } else {
            $config['upload_path']      = './uploads/operator';
            $config['allowed_types']    = 'pdf|doc|docx|gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Foto_item')) {
                echo "upload file Gagal";
                die();
            } else {
                $Foto_item = $this->upload->data('file_name');
            }
        }
        // Upload Gambar

        $data = array(
            'nama_item' => $nama_item,
            'harga' => $harga,
            'Foto_item' => $Foto_item
        );
        $this->Item_Model->simpan_data('lndr_item', $data);
        redirect('Item');
    }
    //redirect ke view edit 
    public function edit($id_item)
    {
        $where = array('id_item' => $id_item);
        $data['item'] = $this->Item_Model->edit_data($where, 'lndr_item')->result();
        $this->load->view('templates1/header');
        $this->load->view('admin/edititem', $data);
        $this->load->view('templates1/footer');
    }

    //aksi proses update data 
    public function update()
    {
        $id_item = $this->input->post('id_item');
        // $Foto_item = $this->input->post('Foto_item');
        $nama_item = $this->input->post('nama_item');
        $harga = $this->input->post('harga');
        $Foto_item = $_FILES['Foto_item'];
        if ($Foto_item = '') {
        } else {
            $config['upload_path']      = './uploads/operator';
            $config['allowed_types']    = 'pdf|doc|docx|gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Foto_item')) {
                echo "upload file Gagal";
                die();
            } else {
                $Foto_item = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama_item' => $nama_item,
            'harga' => $harga,
            'Foto_item' => $Foto_item

        );

        $where = array(
            'id_item' => $id_item
        );

        $this->Item_Model->update_data($where, $data, 'lndr_item');
        redirect('item/index');
    }
    //aksi delete
    public function delete($id)
    {
        $where = array('id_item' => $id);

        $this->Item_Model->delete($where, 'lndr_item');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil Di hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('item');
    }

    //search
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['item'] = $this->Item_Model->get_keyword($keyword);
        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar', $data);
        // $this->load->view('templates/topbar');
        $this->load->view('admin/item');
        $this->load->view('templates1/footer');
    }
}
