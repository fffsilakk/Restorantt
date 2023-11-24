<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<style>
        .login-button {
            float: right;
            margin-top: 0;
            margin-right: 20px;
        }
</style>
<div class="container"><br>
    <h2>Daftar Pemesanan</h2>
    <div class="login-button">
        <a href="<?= base_url('tambah_pemesanan'); ?>" class="btn btn-success">
        <img src="<?= base_url('assets/images/add.png'); ?>" alt="edit" style="width: 20px; height: 20px;">  Tambah</a><br><br>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pemesanan</th>
                <th>Tanggal Pengantaran</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
    </thead>
    <tbody>
    <?php
        foreach ($pemesanan as  $key => $item): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $item['tanggal_pemesanan']; ?></td>
                <td><?= $item['tanggal_pengantaran']; ?></td>
                <td><?= $item['total_pemesanan']; ?></td>
                <td>
                <a href="<?= base_url('ubah/') . $item['id_pemesanan'] ?>">
                            <img src="<?= base_url('assets/images/edit.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                        <a href="<?= base_url('hapus/') . $item['id_pemesanan'] ?>">s
                            <img src="<?= base_url('assets/images/hapus.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</div>
    <?= $this->endSection('content') ?>