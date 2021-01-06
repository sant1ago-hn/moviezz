<?php
require_once 'helpers/Helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Account</title>
    <link rel="icon" type="images/favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-arrows.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-basic.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-basic-elaboration.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-music.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-software.css">
    <link rel="stylesheet" type="text/css" href="assets/css/linea-weather.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/woocommerce.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<section class="page-banner">
    <h2 class="page-title">Register Account</h2>
</section>
<section id="main-container" class="main-container">
    <div class="section-iconboxes-firts container">
        <div class="row">
            <div class="col-md-12">
                <div class="myaccount">
                    <div class="ts-login-form text-center">
                        <div class="inner-login">
                            <form  class="login-form" method="post" action="">
                                <div class="form-group">
                                    <label for="username">Username or email address * </label>
                                    <input type="text" class="form-control" id="username" name="username" required value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password * </label>
                                    <input type="password" class="form-control" id="password" name="password" required value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Confirm * </label>
                                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required value="<?php echo isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" required value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" required value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" required value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" required value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" class="form-control" name="avatar" id="avatar"/>
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo isset($_POST['facebook']) ? $_POST['facebook'] : '' ?>"/>
                                </div>

                                <button type="submit" name="submit">Register</button>

                                <div class="bottom-login">
                                    <a href="login.html">Already have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/jquery.debouncedresize.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/js/isotope.pkgd.js"></script>
<script type="text/javascript" src="assets/js/packery-mode.pkgd.min.js"></script>
<script type='text/javascript' src='assets/js/debounced-resize/jquery.debouncedresize.js'></script>
<script type="text/javascript" src="assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="assets/js/front-end.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>

