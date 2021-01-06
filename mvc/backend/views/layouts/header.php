<?php
$year = '';
$username = '';
$avatar = '';
if (isset($_SESSION['admin'])) {
    $username = $_SESSION['admin']['username'];
    $avatar = $_SESSION['admin']['avatar'];
    $year = date('Y', strtotime($_SESSION['admin']['created_at']));
}
?>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="container-fluid">
                <div class="float-right">

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Search dropdown-->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-tune"></i>
                        </button>
                    </div>
                    <!--More Details dropdown-->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1"><?php echo $username; ?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="index.php?controller=user&action=logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i>Logout</a>
                        </div>
                    </div>
                    <!--User dropdown-->
                </div>

                <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div class="topnav">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        Dashboard
                                    </a>
                                </li>
                                <!--Dashboard-->
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=category&action=index">
                                        Categories manager
                                    </a>
                                </li>
                                <!--Categories manager-->
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=movie&action=index">
                                        Movies manager
                                    </a>
                                </li>
                                <!--Products manager-->
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=user&action=index">
                                        Users manager
                                    </a>
                                </li>
                                <!--Users manager-->

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>