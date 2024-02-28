<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Kategori</h5>

      <a href="<?= site_url('tambah_kategori'); ?>" type="button" class="btn btn-primary">Tambah</a>
    </div>
    <!-- Table with stripped rows -->
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Kategori</th>

          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
      <?php if (isset($listKategori)) {
          $no = null;
          foreach ($listKategori as $k) {
            $no++
        ?>
            <tr>
              <td scope="row"><?= $no; ?></td>
              <td><?= $k['nama_kategori'] ?></td>
              <td>
                <a href="<?= site_url('edit-kategori/' . $k['id_kategori']); ?>" title="edit"><i class="bi bi-pencil -square"></i></a>
                <a href="<?= site_url('hapus-kategori/' . $k['id_kategori']); ?>" title="hapus"><i class="bi bi-trash"></i></a>

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