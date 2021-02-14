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
        .frame_button_basic {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 50px;
            color: #e0e0e0;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            text-align: center;
            line-height: 56px;
            box-sizing: border-box;
            border-radius: 16px;
            background-color: #151f30;
            transition: all ease 0.5s;
        }
        .frame_button_basic:hover {
            color: #fff;
            background-color: #2f80ed;
        }
        .frame_button_premium {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 50px;
            color: #e0e0e0;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            text-align: center;
            line-height: 56px;
            box-sizing: border-box;
            border-radius: 16px;
            background-color: #151f30;
            transition: all ease 0.5s;
        }
        .frame_button_premium:hover {
            color: #fff;
            background-color: #2f80ed;
        }
        .frame_button_exclusive {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 50px;
            color: #e0e0e0;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            text-align: center;
            line-height: 56px;
            box-sizing: border-box;
            border-radius: 16px;
            background-color: #151f30;
            transition: all ease 0.5s;
        }
        .frame_button_exclusive:hover {
            color: #fff;
            background-color: #2f80ed;
        }
        .sclt{
            font-size: 0;
            width: 50px;
            height: 50px;
            border: 2px solid #2f80ed;
            border-radius: 50%;
            border-left-color: transparent;
            animation: rotate 1.4s ease 0.5s infinite;
        }
        @keyframes rotate{
            0%{
                transform: rotate(360deg);
            }
        }

        .success{
            position: relative;
            background-color: #fff;
            animation: bounce .3s ease-in;
        }
        @keyframes bounce{
            0%{
                transform: scale(0.9);
            }
        }
        .success:before{
            content: '';
            position: absolute;
            background: url(../../assets/img/check-circle.svg) no-repeat fixed center;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 31px;
            height: 31px;
            line-height: 31px;
            top: 8px;
        }
        .scltd {
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
        })
        $("a#button_pr").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
        })
        $("a#button_ex").click(function(e) {
            e.preventDefault();
            $("#player").attr("src", $(this).attr("href"));
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".frame_button_basic").click(function(){
            $(this).addClass("sclt");

            // Add Success Class After 2.5 Seconds
            setTimeout(function(){
                $(".frame_button_basic").addClass("success");
            }, 2500);

            // Remove class after 3 second
            setTimeout(function(){
                $(".frame_button_basic").removeClass("sclt");
                $(".frame_button_basic").removeClass("success");
            }, 3000);
        });
        $(".frame_button_premium").click(function(){
            $(this).addClass("sclt");


            // Add Success Class After 3.7 Seconds
            setTimeout(function(){
                $(".frame_button_premium").addClass("success");
            }, 2500);

            // Remove class after 5 second
            setTimeout(function(){
                $(".frame_button_premium").removeClass("sclt");
                $(".frame_button_premium").removeClass("success");
            }, 3000);
        });
        $(".frame_button_exclusive").click(function(){
            $(this).addClass("sclt");


            // Add Success Class After 3.7 Seconds
            setTimeout(function(){
                $(".frame_button_exclusive").addClass("success");
            }, 2500);

            // Remove class after 5 second
            setTimeout(function(){
                $(".frame_button_exclusive").removeClass("sclt");
                $(".frame_button_exclusive").removeClass("success");
            }, 3000);
        });
    });
</script>

</body>

</html>