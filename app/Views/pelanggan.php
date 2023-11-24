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
    <h2>Daftar Pelanggan</h2>
    <div class="login-button">
        <a href="<?= base_url('tambah_pelanggan'); ?>" class="btn btn-success">
        <img src="<?= base_url('assets/images/add.png'); ?>" alt="edit" style="width: 20px; height: 20px;">  Tambah</a><br><br>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>No Telepon</th>
                <th>Alamat Pelanggan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pelanggan as  $key => $item) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $item['nama_pelanggan']; ?></td>
                    <td><?= $item['no_telepon']; ?></td>
                    <td><?= $item['alamat_pelanggan']; ?></td>
                    <td>
                        <a href="<?= base_url('ubahh/' . $item['id_pelanggan']) ?>" class="">
                            <img src="<?= base_url('assets/images/edit.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                        <a href="<?= base_url('hapus/') . $item['id_pelanggan'] ?>" class="">
                            <img src="<?= base_url('assets/images/hapus.png'); ?>" alt="edit" style="width: 30px; height: 30px;">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('content') ?>