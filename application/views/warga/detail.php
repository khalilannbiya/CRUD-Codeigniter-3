<div class="container">
  <div class="row mt-3">
    <div class="card mt-3">
      <h5 class="card-header">Detail Warga</h5>
      <div class="card-body">
        <h5 class="card-title"><?= $warga['nama']; ?></h5>
        <p class="card-text">NIK : <?= $warga['nik']; ?></p>
        <p class="card-text">Email : <?= $warga['email']; ?></p>
        <p class="card-text">Alamat : <?= $warga['alamat']; ?></p>
        <p class="card-text">Pekerjaan : <?= $warga['pekerjaan']; ?></p>
        <a href="<?= base_url(); ?>warga" class="btn btn-primary float-end">Kembali</a>
      </div>
    </div>
  </div>
</div>