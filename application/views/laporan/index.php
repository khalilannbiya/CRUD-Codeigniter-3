<div class="container">
  <div class="container">

    <div class="row mt-4">
      <div class="col-md-6">
        <a class="btn btn-primary" href="<?= base_url(); ?>laporan/tambahLaporan">Tambah Laporan</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Jenis Laporan
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="laporan/tambahJenisLaporan" method="POST">
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Tambahkan Jenis Laporan" name="jenis" id="jenis">
                    <div class="form-text text-danger"><?= form_error('jenis'); ?></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="tambah" class="btn btn-primary float-end">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6"><?= $this->session->flashdata('pesan'); ?></div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword">
            <button class="btn btn-primary" type="submit" name="cari" id="button-addon2">Search</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <a class="text-decoration-none btn btn-primary" href="<?= base_url(); ?>laporan">All Laporan</a>
        <a class="text-decoration-none btn btn-success" href="<?= base_url(); ?>laporan/terkirim">Terkirim</a>
        <a class="text-decoration-none btn btn-warning text-dark" href="<?= base_url(); ?>laporan/diproses">Di Proses</a>
        <a class="text-decoration-none btn btn-danger" href="<?= base_url(); ?>laporan/laporanSelesai">Selesai</a>
      </div>
    </div>

    <div class="card mt-4">
      <div class="card-header">
        <h3>Data Laporan</h3>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Pelapor</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($laporan as $lpr) : ?>
              <tr>
                <td><?= $lpr['pelapor']; ?></td>
                <?php if ($lpr['status'] == "terkirim") : ?>
                  <td class="text-success text-capitalize fw-bold"><?= $lpr['status']; ?></td>
                <?php elseif ($lpr['status'] == "diproses") : ?>
                  <td class="text-warning text-capitalize fw-bold"><?= $lpr['status']; ?></td>
                <?php else : ?>
                  <td class="text-danger text-capitalize fw-bold"><?= $lpr['status']; ?></td>
                <?php endif; ?>
                <td>
                  <a class="badge bg-primary text-decoration-none" href="<?= base_url(); ?>laporan/detail/<?= $lpr['id']; ?>">Detail</a>
                  <a class="badge bg-success text-decoration-none" href="<?= base_url(); ?>laporan/ubah/<?= $lpr['id']; ?>">Ubah</a>
                  <a class="badge bg-danger text-decoration-none" href="<?= base_url(); ?>laporan/hapus/<?= $lpr['id']; ?>" onclick="return confirm(`Apakah anda yakin untuk menghapus data <?= $lpr['pelapor']; ?> ?`)">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>