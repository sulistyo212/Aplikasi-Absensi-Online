<div class="row">
 
        <div class="card">
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="card">
            <form action="<?= base_url('user/edit_profil') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Edit Profil</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Profil</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nip">NIP: </label>
                                <input type="hidden" name="id_user" value="<?= $this->uri->segment(3) ?>">
                                <input type="text" name="nip" id="nip" value="<?= $user->nip ?>" class="form-control" placeholder="Masukan NIP Karyawan" required="required"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap : </label>
                                <input type="text" name="nama" id="nama" value="<?= $user->nama ?>" class="form-control" placeholder="Masukana Nama Lengkap Karyawan" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 <?= ($this->session->level == 'Karyawan') ? 'col-sm-6 col-md-4' : 'col-sm-6' ?>">
                            <div class="form-group">
                                <label for="telp">No. Telp : </label>
                                <input type="tel" name="telp" id="telp" value="<?= $user->telp ?>" class="form-control" placeholder="Masukan No. Telp" required="required" />
                            </div>
                        </div>
                        <div class="col-xs-12 <?= ($this->session->level == 'Karyawan') ? 'col-sm-6 col-md-4' : 'col-sm-6' ?>">
                            <div class="form-group">
                                <label for="email">E-mail : </label>
                                <input type="email" name="email" id="email" value="<?= $user->email ?>" class="form-control" placeholder="Masukan Email" required="required" />
                            </div>
                        </div>
                  
                    </div>
                </div>
              
                <div class="card-footer">
                    <div class="row w-100">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>