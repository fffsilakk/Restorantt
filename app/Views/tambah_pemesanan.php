<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pemesanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Pemesanan</h4>
        </div>
      </div>
      <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
                  <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
                  <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_pengantaran">Tanggal Pengantaran:</label>
                  <input type="date" class="form-control" id="tanggal_pengantaran" name="tanggal_pengantaran" required>
                </div>
                
        <div class="form-group">
                  <label for="total_pemesanan">Total Pemesanan:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Rp</span>
                    </div>
                    <input type="text" class="form-control" id="total" name="total_pemesanan" required>
                  </div>
        </div>
                <button type="submit" class="btn btn-success" name="tambah_pemesanan">Tambah</button>
              </form><br>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
