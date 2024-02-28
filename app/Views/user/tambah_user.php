<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<form method="POST" action="<?=site_url('/simpan-user'); ?>">

<div class="row">
    <label class="fw-bold">Nama User</label>
    <div>
    <input class="form-control" type="text" name="nama_user" width="30" placeholder="Masukan Nama Anda" required/>
    </div>
    <label class="fw-bold">Username</label>
    <div>
    <input class="form-control" type="text" name="username" width="30" placeholder="Masukan Username Anda" required />
    </div>
    <label class="fw-bold">Password</label>
    <div>
    <input class="form-control" type="text" name="password" width="30" placeholder="Masukan Password Anda" required/>
    </div>
    <label class="fw-bold">Level</label>
    <div>
    <input class="form-control" type="text" name="level" width="30" placeholder="Masukan Level Anda" required/>
    </div>
</div>    
<div class="row mt-3">
    <div class="col-md-2">
    <button class="btn btn-block btn-primary btn-sm" type="submit">Simpan</button>
    </div>
</div>
</form>

<?=$this->endSection();?>