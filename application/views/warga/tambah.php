<div class="card container mt-4">
  <div class="card-header">
    Form Tambah Data
  </div>
  <div class="card-body">

    <form action="" method="POST">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama">
        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
      </div>
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik">
        <div class="form-text text-danger"><?= form_error('nik'); ?></div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email">
        <div class="form-text text-danger"><?= form_error('email'); ?></div>
      </div>
      <div class="form-floating">
        <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="alamat" style="height: 100px"></textarea>
        <label for="alamat">Alamat</label>
        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
      </div>
      <div class="mt-3">
        <label for="pekerjaan">Pekerjaan</label>
        <select class="form-select mt-2" aria-label="Default select example" name="pekerjaan" id="pekerjaan">
          <option value="" selected>Pilih Pekerjaan</option>
          <?php foreach ($works as $work) : ?>
            <option value="<?= $work; ?>"><?= $work; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Submit</button>
      <a href="<?= base_url(); ?>warga" class="btn btn-secondary mt-3  me-3 float-end">Cancel</a>
    </form>
  </div>
</div>