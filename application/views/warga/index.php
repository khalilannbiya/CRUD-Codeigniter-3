<div class="container">

  <div class="row mt-4">
    <div class="col-md-6">
      <a class="btn btn-primary" href="<?= base_url(); ?>warga/tambah">Tambah Data</a>
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

  <div class="card mt-4">
    <div class="card-header">
      <h3>Data Warga</h3>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <?php foreach ($warga as $wrg) :  ?>
          <li class="list-group-item">
            <?= $wrg['nama']; ?>
            <a class="btn btn-danger float-end" href="<?= base_url(); ?>warga/hapus/<?= $wrg['id'] ?>" onclick="return confirm(` Yakin data <?= $wrg['nama']; ?> mau dihapus?`);">Hapus</a>
            <a class="btn btn-primary float-end me-2" href="<?= base_url(); ?>warga/detail/<?= $wrg['id'] ?>">Detail</a>
            <a class="btn btn-success float-end me-2" href="<?= base_url(); ?>warga/ubah/<?= $wrg['id'] ?>">Ubah</a>
          </li>
        <?php endforeach;  ?>
      </ul>
    </div>
  </div>
</div>