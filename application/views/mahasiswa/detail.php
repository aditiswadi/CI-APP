<div class="container">
    <row class="mt-3">
        <col-md-6>
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nrp']; ?></h6>
                <p class="card-text"><?= $mahasiswa['email']; ?></p>
                <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </col-md-6>
    </row>
</div>