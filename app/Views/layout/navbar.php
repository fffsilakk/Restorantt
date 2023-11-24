<style>
    .navbar-toggler-icon {
        background-color: #fff;
    }

    .navbar-toggler {
        border-color: #fff;
    }

    .admin-icon img {
        width: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-text mr-3 admin-icon">
        <a href="<?= base_url(''); ?>" style="margin-left: 20px;">
            <img src="<?= base_url('assets/images/admin.jpg'); ?>" alt="admin Logo" style="width: 30px; height: 30px;">
        </a><?= session()->get('nama')?>
    </span>
    <div class="container ">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/images/home.png'); ?>" alt="" srcset="" style="width: 20px; height: 20px;">
                Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pelanggan') ?>">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pemesanan') ?>">Pemesanan</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('detail') ?>">Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu') ?>">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('metode_pembayaran') ?>">Metode Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('authentication/logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>