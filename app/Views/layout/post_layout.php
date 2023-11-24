<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita CodeIgniter</title>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>"/>
</head>
<body>
<?php
    
?>

<?= $this->include('layout/navbar') ?>
<?= $this->include('layout/header') ?>

<div class="container">
        <div class="row">
                <div class="col-md-8">
                    <?= $this->renderSection('content') ?>
               </div>
                <div class="col-md-4">
                    <?= $this->include('layout/sidebar') ?>
                </div>
        </div>
</div>


<?= $this->include('layout/footer') ?>

    <!-- jQuery dan Bootstrap 35 -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
