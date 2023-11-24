<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #ffffff;
            height: 100vh;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="content">
                <h2>Welcome to the Admin Dashboard</h2>
                <p>This is a beautiful and responsive admin dashboard built with Bootstrap.</p>
                <!-- Add more content as needed -->
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

   
    <?= $this->endSection()?>