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
    <h2>Daftar Metode Pembayaran</h2>
    <div class="login-button">
        <a href="<?= base_url('tambah_metode_pembayaran'); ?>" class="btn btn-success">
            <img src="<?= base_url('assets/images/add.png'); ?>" alt="edit" style="width: 20px; height: 20px;"> Tambah</a><br><br>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($metode_pembayaran as $item) : ?>
                <tr>
                    <td><?= $item['tanggal_pembayaran']; ?></td>
                    <td><?= $item['jumlah_pembayaran']; ?></td>
                    <td><?= $item['pembayaran']; ?></td>
                    <td>
                    <a href="<?= base_url('edit/') . $item['id_pembayaran'] ?>">
                            <img src="<?= base_url('assets/images/edit.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                        <a href="<?= base_url('delete/') . $item['id_pembayaran'] ?>">
                            <img src="<?= base_url('assets/images/hapus.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection('content') ?>