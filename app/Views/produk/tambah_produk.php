<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<form method="POST" action="<?=site_url('simpan-produk'); ?>">

<div class="row">
    <label class="fw-bold">Kode Produk</label>
    <div>
    <input class="form-control" type="text" name="kode_produk" width="30" />
    </div>
    <label class="fw-bold">Nama Produk</label>
    <div>
    <input class="form-control" type="text" name="nama_produk" width="30" />
    </div>
    <label class="fw-bold">Harga Beli</label>
    <div>
    <input class="form-control" type="text" name="harga_beli" width="30" />
    </div>
    <label class="fw-bold">Harga Jual</label>
    <div>
    <input class="form-control" type="text" name="harga_jual" width="30"/>
    </div>
    <label class="fw-bold">Nama Satuan</label>
    <div class="select-position">
        <select class="form-control" name="id_satuan">
            <option value="">Pilih Satuan</option>
            <?php foreach ($listSatuan as $value) : ?>
                    <option value="<?= $value->id_satuan; ?>"><?= $value->nama_satuan; ?></option>
                <?php endforeach; ?>
            
        </select>
    </div>
    <label class="fw-bold">Nama Kategori</label>
    <div class="select-position">
        <select class="form-control" name="id_kategori">
            <option value="">Pilih Kategori</option>
                <?php foreach ($listKategori as $value) : ?>
                    <option value="<?= $value->id_kategori; ?>"><?= $value->nama_kategori; ?></option>
                <?php endforeach; ?>
        </select>
    <label class="fw-bold">Stok</label>
    <div>
    <input class="form-control" type="number" name="stok" width="30"/>
    </div>
    </div>
    
</div>    
<div class="row mt-3">
    <div class="col-md-2">
    <button class="btn btn-block btn-primary btn-sm" type="submit">Simpan</button>
    </div>
</div>
</form>

<?=$this->endSection();?>