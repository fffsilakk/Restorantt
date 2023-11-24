<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Detail</h4>
        </div>
      </div>
      <div class="container mt-5">
            <form method="post" action="">
              <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
              </div>
              <div class="form-group">
                <label for="jumlah_pemesanan">Jumlah Pemesanan</label>
                <input type="text" class="form-control" id="jumlah_pemesanan" name="jumlah_pemesanan" required>
              </div>
              <div class="form-group">
                <label for="harga_satuan">Harga</label>
                <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" required>
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="total" name="total">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success" name="tambah_detail">Tambah</button>
              </div>
            </form>
      </div>
    </div>

  </div>
  <?= $this->endSection('content') ?>