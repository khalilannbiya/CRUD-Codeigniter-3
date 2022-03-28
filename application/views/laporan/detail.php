<div class="container">
  <div class="row mt-3">
    <div class="card mt-3">
      <h5 class="card-header">Detail Laporan</h5>
      <div class="card-body">
        <h5 class="card-title"><?= $laporan['pelapor']; ?></h5>
        <p class="card-text">Jenis laporan : <?= $laporan['laporan']; ?></p>
        <p class="card-text">Kronologi : <?= $laporan['kronologi']; ?></p>
        <p class="card-text">Ini adalah kode Unik anda : <span class="text-danger fw-bold"><?= $laporan['kode']; ?></span> </p>
        <p class="card-text">Status : <?= $laporan['status']; ?></p>
        <a href="<?= base_url(); ?>laporan" class="btn btn-primary float-end">Kembali</a>
        <a href="<?= base_url(); ?>laporan/print/<?= $laporan['id']; ?>" class="btn btn-secondary float-end me-2">Print</a>
      </div>
    </div>
  </div>
</div>