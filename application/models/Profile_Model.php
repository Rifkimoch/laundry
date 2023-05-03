<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile_Model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public  function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
