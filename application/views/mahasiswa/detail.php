<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <?php foreach( $mahasiswa as $mhs ) : ?>
                        <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $mhs['nrp']; ?></h6>
                        <p class="card-text"><?= $mhs['email']; ?></p>
                        <p class="card-text"><?= $mhs['jurusan']; ?></p>
                        <a href="<?= base_url(); ?>mahasiswa" class="card-link">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>