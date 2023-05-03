<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Item_Model extends CI_Model
{
    public function simpan_data($nm_table, $data)
    {
        $this->db->insert($nm_table, $data);
    }
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
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
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getDataByID($where, $nm_tabel)
    {
        $this->db->where($where);
        return $this->db->get($nm_tabel);
    }
    public function hapus_file($kondisi, $data, $nm_table)
    {
        $this->db->where($kondisi);
        $this->db->update($nm_table, $data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('lndr_item');
        $this->db->like('nama_item', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get()->result();
    }
}
