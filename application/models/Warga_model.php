<?php

class Warga_model extends CI_Model
{
  public function getAllWarga()
  {
    return $this->db->get('warga')->result_array();
  }

  public function tambah()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nik' => $this->input->post('nik', true),
      'email' => $this->input->post('email', true),
      'alamat' => $this->input->post('alamat', true),
      'pekerjaan' => $this->input->post('pekerjaan', true),
    ];

    $this->db->insert('warga', $data);
  }

  public function hapusData($id)
  {
    return $this->db->delete('warga', ['id' => $id]);
  }

  public function getWargaById($id)
  {
    return $this->db->get_where('warga', ['id' => $id])->row_array();
  }

  public function ubahDataWarga()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nik' => $this->input->post('nik', true),
      'email' => $this->input->post('email', true),
      'alamat' => $this->input->post('alamat', true),
      'pekerjaan' => $this->input->post('pekerjaan', true),
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('warga', $data);
  }

  public function cariDataWarga()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('nik', $keyword);
    $this->db->or_like('email', $keyword);
    $this->db->or_like('alamat', $keyword);
    $this->db->or_like('pekerjaan', $keyword);
    return $this->db->get('warga')->result_array();
  }
}
