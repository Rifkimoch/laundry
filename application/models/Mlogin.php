<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{

    public function cekuserdaftar($email)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email='$email' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function ceklogin($email, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email='$email' and password='$password' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
