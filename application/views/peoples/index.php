<div class="container">
  <div class="row">
    <div class="col-md-10">

      <h3 class="mt-3">List Of People</h3>
    </div>
  </div>


  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($peoples as $people) : ?>
        <tr>
          <th><?= ++$start; ?></th>
          <td><?= $people['name']; ?></td>
          <td><?= $people['email']; ?></td>
          <td>
            <a href="" class="badge bg-warning text-decoration-none">Detail</a>
            <a href="" class="badge bg-success text-decoration-none">Ubah</a>
            <a href="" class="badge bg-danger text-decoration-none">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?= $this->pagination->create_links(); ?>
</div>