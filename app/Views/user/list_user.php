<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>

      <a href="<?= site_url('tambah_satuan'); ?>" type="button" class="btn btn-primary">Tambah</a>
    </div>
    <!-- Table with stripped rows -->
    <table class="table datatable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama User</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Level</th>


          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php if (isset($listUser)) {
          $no = null;
          foreach ($listUser as $u) {
            $no++
        ?>
            <tr>
              <td scope="row"><?= $no; ?></td>
              <td><?= $u['nama_user'] ?></td>
              <td><?= $u['username'] ?></td>
              <td><?= $u['password'] ?></td>
              <td><?= $u['level'] ?></td>
              <td>
              <a href="<?= site_url('edit-user/' . $u['id_user']); ?>" title="edit"><i class="bi bi-pencil-square"></i></a>
              <a href="<?= site_url('hapus-user/' . $u['id_user']); ?>" title="hapus"><i class="bi bi-trash"></i></a>

              </td>
            </tr>
        <?php
          }
        }

        ?>
        </tr>
      </tbody>

  </div>

<?= $this->endSection(); ?>