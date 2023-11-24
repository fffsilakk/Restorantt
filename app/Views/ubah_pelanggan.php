<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Ubah Pelanggan</h4>
                </div>
            </div>
            <div class="card-body">
            <form method="post" action="">

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan:</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= esc($pelanggan['nama_pelanggan'] ?? '') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No Telepon:</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= esc($pelanggan['no_telepon'] ?? '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pelanggan">Alamat Pelanggan:</label>
                        <textarea class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" rows="4"><?= esc($pelanggan['alamat_pelanggan'] ?? '') ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
