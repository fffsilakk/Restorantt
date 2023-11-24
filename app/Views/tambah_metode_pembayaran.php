<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Form Metode Pembayaran</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="tanggal_pembayaran">Tanggal Pembayaran:</label>
            <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran (Rp):</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control" name="jumlah_pembayaran" id="jumlah_pembayaran">
            </div>
        </div>
        <div class="form-group">
            <label for="pembayaran">Pembayaran:</label>
            <select class="form-control" name="pembayaran" id="pembayaran" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="E-wallet">E-wallet</option>
                <option value="Tunai">Tunai</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" name="tambah_metode_pembayaran"> 
            <img src="<?= base_url('assets/images/add.png'); ?>" alt="edit" style="width: 20px; height: 20px;"> Tambah
        </button>
    </form>
</div>
<?= $this->endSection('content') ?>