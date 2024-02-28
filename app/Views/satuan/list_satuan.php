<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Satuan</h5>

      <a href="<?= site_url('tambah_satuan'); ?>" type="button" class="btn btn-primary">Tambah</a>
    </div>
    <!-- Table with stripped rows -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Satuan</th>

          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php if (isset($listSatuan)) {
          $no = null;
          foreach ($listSatuan as $s) {
            $no++
        ?>
            <tr>
              <td scope="row"><?= $no; ?></td>
              <td><?= $s['nama_satuan'] ?></td>
              <td>
                <a href="<?= site_url('/edit-satuan/' . $s['id_satuan']); ?>" title="edit"><i class="bi bi-pencil -square"></i></a>
                <a href="<?= site_url('/hapus-satuan/' . $s['id_satuan']); ?>" title="hapus"><i class="bi bi-trash"></i></a>

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