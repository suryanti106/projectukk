<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<form method="POST" action="<?=site_url('/simpan-satuan'); ?>">

<div class="row">
    <label class="fw-bold">Nama Satuan</label>
    <div>
    <input class="form-control" type="text" name="nama_satuan" width="30"/>
    </div>
</div>    
<div class="row mt-3">
    <div class="col-md-2">
    <button class="btn btn-block btn-primary btn-sm" type="submit">Simpan</button>
    </div>
</div>
</form>

<?=$this->endSection();?>