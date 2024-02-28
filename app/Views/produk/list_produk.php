<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Produk</h5>

      <a href="<?= site_url('tambah_produk'); ?>" type="button" class="btn btn-primary">Tambah</a>
    </div>
    <!-- Table with stripped rows -->
    <table class="table">
      <thead>
        <tr>
          <th >No</th>
          <th >Id Produk</th>
          <th >Kode Produk</th>
          <th >Nama Produk</th>
          <th >Harga Beli</th>
          <th >Harga Jual</th>
          <th >Nama Satuan</th>
          <th >Nama Kategori</th>
          <th >Stok</th>
          <th >Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php if (isset($listProduk)) {
          $no = null;
          foreach ($listProduk as $p) {
            $no++
        ?>
            <tr>
              <td scope="row"><?= $no; ?></td>
              <td><?= $p['id_produk'] ?></td>
              <td><?= $p['kode_produk'] ?></td>
              <td><?= $p['nama_produk'] ?></td>
              <td><?= $p['harga_beli'] ?></td>
              <td><?= $p['harga_jual'] ?></td>
              <td><?= $p['id_satuan'] ?></td>
              <td><?= $p['id_kategori'] ?></td>
              <td><?= $p['stok'] ?></td>
              <td>
                <a href="<?= site_url('edit-produk/' . $p['id_produk']); ?>" title="edit"><i class="bi bi-pencil -square"></i></a>
                <a href="<?= site_url('hapus-produk/' . $p['id_produk']); ?>" title="hapus"><i class="bi bi-trash"></i></a>

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