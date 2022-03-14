<?php

class Laporan extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Laporan";
    $data['laporan'] = $this->Laporan_model->getAllDataLaporan();
    if ($this->input->post('keyword')) {
      $data['laporan'] = $this->Laporan_model->cariLaporan();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/index', $data);
    $this->load->view('templates/footer');
  }

  public function terkirim()
  {
    $data['title'] = "Data Terkirim";
    $data['laporan'] = $this->Laporan_model->getAllDataLaporanByStatus();

    $this->load->view('templates/header', $data);
    $this->load->view('laporan/terkirim', $data);
    $this->load->view('templates/footer');
  }

  public function diproses()
  {
    $data['title'] = "Laporan Di Proses";
    $data['laporan'] = $this->Laporan_model->getAllDataLaporanByStatusDiproses();
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/proses', $data);
    $this->load->view('templates/footer');
  }

  public function laporanSelesai()
  {
    $data['title'] = "Laporan Selesai";
    $data['laporan'] = $this->Laporan_model->getAllDataLaporanByStatusSelesai();
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/selesai', $data);
    $this->load->view('templates/footer');
  }

  public function tambahLaporan()
  {
    $data['title'] = "Tambah Data Laporan";

    $this->form_validation->set_rules('pelapor', 'Pelapor', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('kronologi', 'Kronologi', 'required', [
      'required' => '%s Harus diisi!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('laporan/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Laporan_model->tambahDataLaporan();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data laporan telah ditambahkan!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('laporan');
    }
  }

  public function detail($id)
  {
    $data['title'] = "Detail Laporan";
    $data['laporan'] = $this->Laporan_model->getDataById($id);

    $this->load->view('templates/header', $data);
    $this->load->view('laporan/detail', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {
    $data['laporan'] = $this->Laporan_model->hapusDataLaporan($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data laporan telah dihapus!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    redirect('laporan');
  }

  public function ubah($id)
  {
    $data['title'] = "Ubah Data Laporan";
    $data['laporan'] = $this->Laporan_model->getDataById($id);
    $data['status'] = ['terkirim', 'diproses', 'selesai'];

    $this->form_validation->set_rules('pelapor', 'Pelapor', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('kronologi', 'Kronologi', 'required', [
      'required' => '%s Harus diisi!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('laporan/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Laporan_model->ubahDataLaporan();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data laporan telah diubah!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('laporan');
    }
  }

  // public function acakNoUnik()
  // {
  //   $data['title'] = "ini adalah data acak";
  //   $data['acak'] = mt_rand(0000000000, 9999999999);

  //   $this->load->view('templates/header', $data);
  //   $this->load->view('laporan/acak', $data);
  //   $this->load->view('templates/footer');
  // }
}
