<?php

class M_vaksin extends CI_Model
{
    //menampilkan data dari database tb_mahasiswa
    public function tampil_data()
    {
        return $this->db->get('tb_vaksin')->result_array();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        return $this->db->get_where('tb_vaksin', array('id' => $id))->row();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
