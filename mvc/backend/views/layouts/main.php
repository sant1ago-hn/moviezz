<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hoai Nam">
    <title>
        <?php echo $this->page_title; ?>
    </title>

</head>

<body>

<?php require_once 'header.php'; ?>

<?php echo $this->content; ?>

<!-- JS -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/smooth-scrollbar.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/admin.js"></script>
<script>
    $(function() {
        setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 5000)
    })
</script>
</body>
</html>
