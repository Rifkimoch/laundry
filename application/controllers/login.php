<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('login');
        } else {
            //validasi success,method privat
            $this->_login();
        }
        // $this->load->view('templates/footer');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['status_user'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'hak_akses' => $user['hak_akses']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['hak_akses'] == 1) {
                        redirect('item');
                    } else {
                        redirect('Dash_cs');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
    }

    public function regist()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('notlpn', 'No telpn', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('regist');
        } else {

            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama', true)),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email', true),
                'jenis_kelamin' => $this->input->post('gender'),
                'nomor_telfon' => $this->input->post('notlpn'),
                'foto_user' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'hak_akses' => 2,
                'status_user' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
            redirect('login');
        }
    }
    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $cekuserdaftar = $this->Mlogin->cekuserdaftar($email);
        if ($cekuserdaftar) {

            $ceklogin = $this->Mlogin->ceklogin($email, $password);

            if ($ceklogin) {
                foreach ($ceklogin as $row)

                    if (($row->status) == "1") {

                        $this->session->set_userdata('email', $row->email);
                        $this->session->set_userdata('nama_user', $row->nama);
                        $this->session->set_userdata('hak_akses', $row->hak_akses);

                        if ($this->session->userdata('hak_akses') == "1") {
                            redirect('item');
                        } else {
                            redirect('riwayat');
                        }
                    } else {
                        echo "<script>alert(' maaf akun belum aktif .');</script>";
                        redirect('login');
                    }
            } else {
                echo "<script>alert(' maaf email atau pass salah .');</script>";
                redirect('login');
            }
        } else {
            echo "<script>alert(' email belum terdaftar');</script>";
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('hak_akses');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('login');
    }
}
