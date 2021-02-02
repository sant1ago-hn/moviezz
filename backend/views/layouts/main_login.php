<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="backend/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="backend/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="backend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="backend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="backend/assets/css/select2.min.css">
    <link rel="stylesheet" href="backend/assets/css/admin.css">
    <link rel="stylesheet" href="backend/assets/css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="backend/assets/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="backend/assets/icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hoài Nam">
    <title>
        <?php echo $this->page_title; ?>
    </title>

</head>

<body class="bg-primary bg-pattern">
<section class="content-header d-flex justify-content-center">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>
</section>

<?php echo $this->content; ?>

<!-- JS -->
<script src="backend/assets/js/jquery-3.5.1.min.js"></script>
<script src="backend/assets/js/bootstrap.bundle.min.js"></script>
<script src="backend/assets/js/owl.carousel.min.js"></script>
<script src="backend/assets/js/jquery.magnific-popup.min.js"></script>
<script src="backend/assets/js/smooth-scrollbar.js"></script>
<script src="backend/assets/js/select2.min.js"></script>
<script src="backend/assets/js/jquery.magnific-popup.min.js"></script>
<script src="backend/assets/js/admin.js"></script>
<script src="backend/assets/js/main.js"></script>
<script src="backend/assets/js/validation.js"></script>
</body>
</html>
