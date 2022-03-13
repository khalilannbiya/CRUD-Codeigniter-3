<?php
class Warga extends CI_Controller
{

  public function index()
  {
    $data['title'] = "Data Warga";
    $data['warga'] = $this->Warga_model->getAllWarga();
    if ($this->input->post('keyword')) {
      $data['warga'] = $this->Warga_model->cariDataWarga();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('warga/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['title'] = "Tambah Data Warga";
    $data['works'] = ['Tidak Bekerja', 'Siswa/Mahasiswa', 'Ibu Rumah Tangga', 'PNS', 'Polisi', 'TNI', 'Karyawan Swasta', 'Petani', 'Peternak', 'Nelayan', 'Freelance', 'Guru', 'Dokter', 'Bidan', 'Perawat', 'Programmer', 'Youtuber'];

    $this->form_validation->set_rules('nama', 'Nama', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|max_length[16]|min_length[16]', [
      'required' => '%s Harus diisi!',
      'numeric' => '%s Harus Angka!',
      'max_length' => 'Panjang dari %s tidak boleh lebih dari 16 digit',
      'min_length' => 'Panjang dari %s tidak boleh kurang dari 16 digit'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
      'required' => '%s Harus diisi!',
      'valid_email' => 'Email harus valid!'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
      'required' => '%s Harus diisi!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('warga/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Warga_model->tambah();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data telah ditambahkan!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('warga');
    }
  }

  public function hapus($id)
  {
    $this->Warga_model->hapusData($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data telah dihapus!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    redirect('warga');
  }

  public function detail($id)
  {

    $data['title'] = "Detail Warga";
    $data['warga'] = $this->Warga_model->getWargaById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('warga/detail', $data);
    $this->load->view('templates/footer');
  }

  public function ubah($id)
  {
    $data['title'] = "Ubah Data Warga";
    $data['warga'] = $this->Warga_model->getWargaById($id);
    $data['works'] = ['Tidak Bekerja', 'Siswa/Mahasiswa', 'Ibu Rumah Tangga', 'PNS', 'Polisi', 'TNI', 'Karyawan Swasta', 'Petani', 'Peternak', 'Nelayan', 'Freelance', 'Guru', 'Dokter', 'Bidan', 'Perawat', 'Programmer', 'Youtuber'];

    $this->form_validation->set_rules('nama', 'Nama', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|max_length[16]|min_length[16]', [
      'required' => '%s Harus diisi!',
      'numeric' => '%s Harus Angka!',
      'max_length' => 'Panjang dari %s tidak boleh lebih dari 16 digit',
      'min_length' => 'Panjang dari %s tidak boleh kurang dari 16 digit'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
      'required' => '%s Harus diisi!',
      'valid_email' => 'Email harus valid!'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
      'required' => '%s Harus diisi!'
    ]);
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
      'required' => '%s Harus diisi!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('warga/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Warga_model->ubahDataWarga();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Selamat!</strong> data telah diubah!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('warga');
    }
  }
}
