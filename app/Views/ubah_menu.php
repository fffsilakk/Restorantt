<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Tambah Menu</h4>
                </div>
            </div>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Menu</h5>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nama_menu">Nama Menu</label>
                                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?= esc($menu['nama_menu'] ?? '') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="harga_menu">Harga Menu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" id="harga_menu" name="harga_menu" value="<?= esc($menu['harga_menu'] ?? '') ?>" required>>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection('content') ?>