<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <?php foreach( $mahasiswa as $mhs ) : ?>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
                                <small class="form-text text-danger"><?= form_error( 'nama' ); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text  " class="form-control" id="nrp" name="nrp" value="<?= $mhs['nrp']; ?>">
                                <small class="form-text text-danger"><?= form_error( 'nrp' ); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>">
                                <small class="form-text text-danger"><?= form_error( 'email' ); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['jurusan']; ?>">
                                    <?php foreach( $jurusan as $j ) : ?>
                                        <?php if ( $mhs['jurusan'] == $j ) : ?>
                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j ?>"><?= $j; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endforeach; ?>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div>