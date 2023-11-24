<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Restorant</title>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>"/>
</head>
<body>

<?= $this->include('layout/navbar') ?>
<?= $this->include('layout/header') ?>
<?= $this->renderSection('content') ?>
<?= $this->include('layout/footer') ?>

    <!-- jQuery dan Bootstrap 35 -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
