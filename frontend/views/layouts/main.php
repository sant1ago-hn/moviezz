<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/assets/css/slider-radio.css">
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/plyr.css">
    <link rel="stylesheet" href="frontend/assets/css/main.css">
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 180px;
            height: auto;
            bottom: 100%;
            left: 50%;
            margin-left: -60px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>
    <style>
        .sclt {
            color: #fff;
            background-color: #2f80ed;
        }
    </style>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="frontend/assets/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="frontend/assets/icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hoài Nam">
    <title>
        <?php echo $this->page_title?>
    </title>

</head>
<body>

<?php require_once 'header.php'; ?>

<?php echo $this->content; ?>

<?php require_once 'footer.php'; ?>

<!-- JS -->
<script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
<script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/js/owl.carousel.min.js"></script>
<script src="frontend/assets/js/slider-radio.js"></script>
<script src="frontend/assets/js/select2.min.js"></script>
<script src="frontend/assets/js/smooth-scrollbar.js"></script>
<script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
<script src="frontend/assets/js/plyr.min.js"></script>
<script src="frontend/assets/js/main.js"></script>
<script type="text/javascript">
    var uid = '309660';
    var wid = '605765';
    var pop_tag = document.createElement('script');pop_tag.src='//cdn.popcash.net/show.js';document.body.appendChild(pop_tag);
    pop_tag.onerror = function() {pop_tag = document.createElement('script');pop_tag.src='//cdn2.popcash.net/show.js';document.body.appendChild(pop_tag)};
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="Vq1R8wtC"></script>
<script>
    $(document).ready(function(){
        $("a#frame_player").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
            $("#button_ba").attr("href", $(this).attr("link_ba"));
            $("#button_pr").attr("href", $(this).attr("link_pr"));
            $("#button_ex").attr("href", $(this).attr("link_ex"));
        })
        $("a#button_ba").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
            $(".frame_button_basic").addClass("sclt");
            $(".frame_button_premium").removeClass("sclt");
            $(".frame_button_exclusive").removeClass("sclt");
        })
        $("a#button_pr").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
            $(".frame_button_premium").addClass("sclt");
            $(".frame_button_basic").removeClass("sclt");
            $(".frame_button_exclusive").removeClass("sclt");
        })
        $("a#button_ex").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
            $(".frame_button_exclusive").addClass("sclt");
            $(".frame_button_basic").removeClass("sclt");
            $(".frame_button_premium").removeClass("sclt");
        })
    });
</script>

</body>

</html>