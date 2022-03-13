<div class="card container mt-4">
  <div class="card-header">
    Form Ubah Data
  </div>
  <div class="card-body">

    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $warga['id']; ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $warga['nama']; ?>">
        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
      </div>
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" value="<?= $warga['nik']; ?>">
        <div class="form-text text-danger"><?= form_error('nik'); ?></div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="<?= $warga['email']; ?>">
        <div class="form-text text-danger"><?= form_error('email'); ?></div>
      </div>
      <div>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control mt-2" id="alamat" style="height: 100px" value="<?= $warga['alamat']; ?>"><?= $warga['alamat']; ?></textarea>
        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
      </div>
      <div class="mt-3">
        <label for="pekerjaan">Pekerjaan</label>
        <select class="form-select mt-2" aria-label="Default select example" name="pekerjaan" id="pekerjaan">
          <?php foreach ($works as $work) : ?>
            <?php if ($work === $warga['pekerjaan']) : ?>
              <option selected value="<?= $work; ?>"><?= $work; ?></option>
            <?php else : ?>
              <option value="<?= $work; ?>"><?= $work; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Ubah</button>
      <a href="<?= base_url(); ?>warga" class="btn btn-secondary mt-3  me-3 float-end">Cancel</a>
    </form>
  </div>
</div>