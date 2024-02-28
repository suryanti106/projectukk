<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

<form method="POST" action="<?=site_url('/update-user'); ?>">

<div class="row">


    <label class="fw-bold">Nama User</label>
    <div>
    <input class="form-control" type="hidden" name="id_user" width="30"
                    value="<?=isset($detailUser[0]->id_user) ? $detailUser[0]->id_user : null;?>" placeholder="Masukan id User" required/>
  <input class="form-control" type="text" name="nama_user" width="30"
                    value="<?=isset($detailUser[0]->nama_user) ? $detailUser[0]->nama_user : null;?>" placeholder="Masukan Nama Anda" required/>
    </div>
    <label class="fw-bold">Username</label>
    <div>
  <input class="form-control" type="text" name="username" width="30"
                    value="<?=isset($detailUser[0]->username) ? $detailUser[0]->username : null;?>" placeholder="Masukan Username Anda" required/>
    </div>
    <label class="fw-bold">Password</label>
    <div>
  <input class="form-control" type="text" name="password" width="30"
                    value="<?=isset($detailUser[0]->username) ? $detailUser[0]->password : null;?>" placeholder="Masukan password Anda" required/>
    </div>
    <label class="fw-bold">Level</label>
    <div>
  <input class="form-control" type="text" name="level" width="30"
                    value="<?=isset($detailUser[0]->level) ? $detailUser[0]->level : null;?>" placeholder="Masukan Level " required/>
    </div>

</div>    
<div class="row mt-3"> 
    <div class="col-md-2">
    <button class="btn btn-block btn-primary btn-sm" type="submit">Simpan</button>
    </div>
</div>
</form>

<?=$this->endSection();?>