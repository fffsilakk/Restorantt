<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Ubah Metode Pembayaran</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="tanggal_pembayaran">Tanggal Pembayaran:</label>
            <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" value="<?= esc($metode_pembayaran['tanggal_pembayaran'] ?? '') ?>" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran (Rp):</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control" name="jumlah_pembayaran" id="jumlah_pembayaran" value="<?= esc($metode_pembayaran['jumlah_pembayaran'] ?? '') ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="pembayaran">Pembayaran:</label>
            <select class="form-control" name="pembayaran" id="pembayaran" value="<?= esc($metode_pembayaran['pembayaran'] ?? '') ?>" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="E-wallet">E-wallet</option>
                <option value="Tunai">Tunai</option>
            </select>
        </div>
        <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
                            </div>
    </form>
</div>

<?= $this->endSection('content') ?>