<div class="card container mt-4">
  <div class="card-header">
    Form Tambah Data Laporan
  </div>
  <div class="card-body">

    <form action="" method="POST">
      <div class="mb-3">
        <label for="pelapor" class="form-label">Pelapor</label>
        <input type="text" class="form-control" name="pelapor" id="pelapor">
        <div class="form-text text-danger"><?= form_error('pelapor'); ?></div>
      </div>'
      <div class="mb-3">
        <label for="laporan">Jenis Laporan</label>
        <select class="form-select mt-2 text-capitalize" aria-label="Default select example" name="laporan" id="laporan">
          <option value="" selected>Pilih Jenis Laporan</option>
          <?php foreach ($jenis as $lprn) : ?>
            <option value="<?= $lprn['jenis_laporan']; ?>" class="text-capitalize"><?= $lprn['jenis_laporan']; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('laporan'); ?></div>
      </div>'
      <div class="form-floating">
        <textarea name="kronologi" class="form-control" placeholder="Leave a comment here" id="kronologi" style="height: 100px"></textarea>
        <label for="kronologi">Kronologi</label>
        <div class="form-text text-danger"><?= form_error('kronologi'); ?></div>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Submit</button>
      <a href="<?= base_url(); ?>laporan" class="btn btn-secondary mt-3  me-3 float-end">Cancel</a>
    </form>
  </div>
</div>