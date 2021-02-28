<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian_model extends CI_Model
{

    public function Get_antrian_non_racikan($where)
    {

        $this->db->select_max('no_antrian');
        $this->db->where($where);
        $sql = $this->db->get('antrian_obat_jadi')->row_array();
        return $sql;
    }
    public function Get_antrian_racikan($where)
    {

        $this->db->select_max('no_antrian');
        $this->db->where($where);
        $sql = $this->db->get('antrian_obat_racikan')->row_array();
        return $sql;
    }

    public function Get_min($table, $where)
    {
        $this->db->select_min('no_antrian');
        $this->db->where($where);
        $sql = $this->db->get($table);
        return $sql;
    }


    public function Get_id_panggil($table, $where, $where2)
    {
        // $this->db->where($where);
        $this->db->where($where2);
        $sql = $this->db->get($table)->row_array();
        return $sql;
    }

    public function Get_id($table, $where)
    {
        $this->db->where($where);
        $sql = $this->db->get($table)->row_array();
        return $sql;
    }

    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function edit($table, $data, $where)
    {
        $this->db->set($data);
        $this->db->where('id_transaksi', $where);
        $this->db->update($table);
    }
}
