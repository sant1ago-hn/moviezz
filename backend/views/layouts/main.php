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
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type = number] {
            -moz-appearance: textfield;
        }
    </style>

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
    $(document).ready(function() {
        $("#movie_type").change(function() {
            if ($(this).val() === "1") {
                $("#episode").show("slow");
                $("#link_basic, #link_premium, #link_exclusive").hide();
            } else {
                $("#episode").hide();
                $("#link_basic, #link_premium, #link_exclusive").show("slow");
            }
        });
    });
</script>
<script>
    $(function() {
        setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 5000)
    })
</script>
<script>
    $(document).ready(function(){
        $("#search_input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#movies_table_body tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
    $('#empty').select2({
        placeholder: "Empty Field"
    });

    $('#movie_type').select2({
        placeholder: "Movie type",
        allowClear: true
    });

    $('#idcategory').select2({
        placeholder: "Categories",
    });

    $('#status').select2({
        placeholder: "Choose status",
        allowClear: true
    });

    $('#en_sub').select2({
        placeholder: "English subtitle",
        allowClear: true
    });

    $('#vie_sub').select2({
        placeholder: "Vietnamese subtitle",
        allowClear: true
    });
</script>
<script src="assets/js/sortable.min.js"></script>

</body>
</html>
