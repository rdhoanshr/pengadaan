<?php

class VendorModel extends CI_model
{
    public function lihat()
    {
        $this->db->select('*');
        $this->db->from('vendor');

        return $this->db->get()->result_array();
    }

    public function proses_tambah()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "email" => $this->input->post('email', true),
            "situs_web" => $this->input->post('situs_web', true),
            "catatan" => $this->input->post('catatan', true),
        ];

        $this->db->insert('vendor', $data);
    }

    public function getVendor($id)
    {
        return $this->db->get_where('vendor', ['id' => $id])->row_array();
    }

    public function proses_edit($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "email" => $this->input->post('email', true),
            "situs_web" => $this->input->post('situs_web', true),
            "catatan" => $this->input->post('catatan', true),
        ];

        $this->db->where('id', $id);
        $this->db->update('vendor', $data);
    }


    public function hapus($id)
    {
        $this->db->where('id_unit', $id);
        $this->db->delete('unit');
    }
}