
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Pelanggan</h4>
        </div>
      </div>
      <div class="card-body">
      <form method="post" action="">
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon:</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon">
            </div>
            <div class="form-group">
                <label for="alamat_pelanggan">Alamat Pelanggan:</label>
                <textarea class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" rows="4"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="tambah_pelanggan">
            <img src="<?= base_url('assets/images/add.png'); ?>" alt="edit" style="width: 20px; height: 20px;">
             tambah</button>
            </div>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
  <?= $this->endSection('content') ?>