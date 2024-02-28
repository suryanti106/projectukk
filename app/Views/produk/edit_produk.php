<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<form method="POST" action="<?=site_url('/update-produk'); ?>">

<div class="row">
    <label class="fw-bold">Kode Produk</label>
    <div>
    <input class="form-control" type="hidden" name="id_produk" width="30"
                    value="<?=isset($detailProduk[0]->id_produk) ? $detailProduk[0]->id_produk : null;?>" placeholder="Masukan id produk" required/>
    <input class="form-control" type="text" name="kode_produk" width="30" 
    value="<?=isset($detailProduk[0]->kode_produk) ? $detailProduk[0]->kode_produk : null;?>" placeholder="Masukan Kode Produk" required/>
    </div>
    <label class="fw-bold">Nama Produk</label>
    <div>
    <input class="form-control" type="text" name="nama_produk" width="30"
    value="<?=isset($detailProduk[0]->nama_produk) ? $detailProduk[0]->nama_produk : null;?>" placeholder="Masukan Nama Produk" required/>
    </div>
    <label class="fw-bold">Harga Beli</label>
    <div>
    <input class="form-control" type="text" name="harga_beli" width="30"
    value="<?=isset($detailProduk[0]->harga_beli) ? $detailProduk[0]->harga_beli : null;?>" placeholder="Masukan Harga Beli" required/>
    </div>
    <label class="fw-bold">Harga Jual</label>
    <div>
    <input class="form-control" type="text" name="harga_jual" width="30"
    value="<?=isset($detailProduk[0]->harga_jual) ? $detailProduk[0]->harga_jual : null;?>" placeholder="Masukan Harga Jual" required/>
    </div>
    <label class="fw-bold">Nama Satuan</label>
    <div>
    <input class="form-control" type="text" name="id_satuan" width="30"
    value="<?=isset($detailSatuan[0]->nama_satuan) ? $detailProduk[0]->nama_satuan : null;?>" placeholder="Pilih Id Satuan" required/>
    </div>
    <label class="fw-bold">Nama Kategori</label>
    <div>
    <input class="form-control" type="text" name="id_kategori" width="30
    value="<?=isset($detailKategori[0]->nama_kategori) ? $detailProduk[0]->nama_kategori : null;?>" placeholder="Pilih Id Kategori" required/>
    <label class="fw-bold">Stok</label>
    <div>
    <input class="form-control" type="text" name="stok" width="30"
    value="<?=isset($detailProduk[0]->nama_produk) ? $detailProduk[0]->stok : null;?>" placeholder="Masukan Stok Produk" required/>
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