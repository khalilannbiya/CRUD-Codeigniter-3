<?php

class Laporan_model extends CI_Model
{
  public function getAllDataLaporan()
  {
    return $this->db->get('laporan')->result_array();
  }

  public function getAllDataLaporanByStatus()
  {
    return $this->db->get_where('laporan', ['status' => 'terkirim'])->result_array();
  }

  public function getAllDataLaporanByStatusDiproses()
  {
    return $this->db->get_where('laporan', ['status' => 'diproses'])->result_array();
  }

  public function getAllDataLaporanByStatusSelesai()
  {
    return $this->db->get_where('laporan', ['status' => 'selesai'])->result_array();
  }

  public function tambahDataLaporan()
  {
    $data = [
      'pelapor' => $this->input->post('pelapor', true),
      'kronologi' => $this->input->post('kronologi', true),
      'status' => 'terkirim',
    ];

    $this->db->insert('laporan', $data);
  }

  public function ubahDataLaporan()
  {
    $data = [
      'pelapor' => $this->input->post('pelapor', true),
      'kronologi' => $this->input->post('kronologi', true),
      'status' => $this->input->post('status', true),
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('laporan', $data);
  }

  public function getDataById($id)
  {
    return $this->db->get_where('laporan', ['id' => $id])->row_array();
  }

  public function hapusDataLaporan($id)
  {
    return $this->db->delete('laporan', ['id' => $id]);
  }

  public function cariLaporan()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('pelapor', $keyword);
    $this->db->or_like('status', $keyword);
    return $this->db->get('laporan')->result_array();
  }
}
