<div class="card container mt-4">
  <div class="card-header">
    Form Ubah Data Laporan
  </div>
  <div class="card-body">

    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $laporan['id']; ?>">
      <div class="mb-3">
        <label for="pelapor" class="form-label">Pelapor</label>
        <input type="text" class="form-control" name="pelapor" id="pelapor" value="<?= $laporan['pelapor']; ?>">
        <div class="form-text text-danger"><?= form_error('pelapor'); ?></div>
      </div>
      <div class="mb-3">
        <label for="laporan">Jenis Laporan</label>
        <select class="form-select mt-2" aria-label="Default select example" name="laporan" id="laporan">
          <?php foreach ($jenis as $js) : ?>
            <?php if ($js['jenis_laporan'] === $laporan['laporan']) : ?>
              <option selected value="<?= $js['jenis_laporan']; ?>"><?= $js['jenis_laporan']; ?></option>
            <?php else : ?>
              <option value="<?= $js['jenis_laporan']; ?>"><?= $js['jenis_laporan']; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('laporan'); ?></div>
      </div>
      <div class="">
        <label for="kronologi">Kronologi</label>
        <textarea name="kronologi" class="form-control mt-2" placeholder="Leave a comment here" id="kronologi" style="height: 100px"><?= $laporan['kronologi']; ?></textarea>
        <div class="form-text text-danger"><?= form_error('kronologi'); ?></div>
      </div>
      <div class="mt-3">
        <label for="status">Status</label>
        <select class="form-select mt-2" aria-label="Default select example" name="status" id="status">
          <?php foreach ($status as $st) : ?>
            <?php if ($st === $laporan['status']) : ?>
              <option selected value="<?= $st; ?>"><?= $st; ?></option>
            <?php else : ?>
              <option value="<?= $st; ?>"><?= $st; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
      </div>
      <button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Ubah</button>
      <a href="<?= base_url(); ?>laporan" class="btn btn-secondary mt-3  me-3 float-end">Cancel</a>
    </form>
  </div>
</div>