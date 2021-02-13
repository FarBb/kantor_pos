<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_cari_pos extends CI_Model
{

    public function get($id = null)
    {
        // return $this->db->get('tb_cari_pos');
        $this->db->select('*');
        $this->db->from('tb_cari_pos');
        if ($id = null) {
            $this->db->where('id_pos', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($data)
    {
        $param = array(
            'id_pos' => $data['id_pos'],
            'nama_pos' => $data['nama_pos'],
            'alamat' => $data['alamat'],
            'kota' => $data['kota'],
            'jam_operasional' => $data['jam_op'],
        );
        $this->db->insert('tb_cari_pos', $param);
    }

    public function edit($data)
    {
        $param = array(
            'id_pos' => $data['id_pos'],
            'nama_pos' => $data['nama_pos'],
            'alamat' => $data['alamat'],
            'kota' => $data['kota'],
            'jam_operasional' => $data['jam_op'],
        );
        $this->db->set($param);
        $this->db->where('id_pos', $data['id']);
        $this->db->update('tb_cari_pos');
    }

    public function delete($id)
    {
        $this->db->where('id_pos', $id);
        $this->db->delete('tb_cari_pos');
    }
}
