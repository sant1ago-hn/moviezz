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

<!-- header -->
<header class="header">
    <div class="header__content">
        <!-- header logo -->
        <a href="index.html" class="header__logo">
            <img src="assets/img/logo.svg" alt="">
        </a>
        <!-- end header logo -->

        <!-- header menu btn -->
        <button class="header__btn" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- end header menu btn -->
    </div>
</header>
<!-- end header -->

<!-- sidebar -->
<div class="sidebar">
    <!-- sidebar logo -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="sidebar__logo" id="hideDiv" style="color: green">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->error)): ?>
        <div class="sidebar__logo" id="hideDiv" style="color: red">
            <?php
            echo $this->error;
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="sidebar__logo" id="hideDiv" style="color: red">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php endif; ?>
    <a href="index.php" class="sidebar__logo">
        <img src="assets/img/logo.svg" alt="">
    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="assets/img/user.svg" alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p><?php echo $username; ?></p>
        </div>

        <button class="sidebar__user-btn" type="button">
            <a href="index.php?controller=admin&action=logout">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/>
                </svg>
            </a>
        </button>
    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <ul class="sidebar__nav">
        <!-- Dashboard -->
        <li class="sidebar__nav-item">
            <a href="index.php" class="sidebar__nav-link <?php echo $this->home_tab; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Dashboard -->

        <!-- Expand Categories -->
        <li class="sidebar__nav-item">
            <a href="#expandCategories" data-toggle="collapse" class="sidebar__nav-link sidebar__nav-link <?php echo $this->category_tab; ?>" role="button" aria-expanded="false" aria-controls="expandCategories">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/>
                </svg>
                <span>Categories</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                </svg>
            </a>

            <ul class="collapse sidebar__menu <?php echo $this->category_nav_active ?>" id="expandCategories">
                <li><a href="index.php?controller=category&action=index" class="<?php echo $this->category_nav_index ?>">All Categories</a></li>
                <li><a href="index.php?controller=category&action=create" class="<?php echo $this->category_nav_create ?>">New Category</a></li>
            </ul>
        </li>
        <!-- End expand Categories -->

        <!-- Expand Movies -->
        <li class="sidebar__nav-item">
            <a class="sidebar__nav-link <?php echo $this->movie_tab;?>" data-toggle="collapse" href="#expandMovies" role="button" aria-expanded="false" aria-controls="expandMovies">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"></path></svg>
                <span>Movies</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                </svg>
            </a>

            <ul class="collapse sidebar__menu <?php echo $this->movie_nav_active ?>" id="expandMovies">
                <li><a href="index.php?controller=movie&action=index" class="<?php echo $this->movie_nav_index ?>">All Movies</a></li>
                <li><a href="index.php?controller=movie&action=create" class="<?php echo $this->movie_nav_create ?>">New Movie</a></li>
            </ul>
        </li>
        <!-- End expand Movies -->

        <!-- Expand Users -->
        <li class="sidebar__nav-item">
            <a class="sidebar__nav-link <?php echo $this->user_tab;?>" data-toggle="collapse" href="#expandUsers" role="button" aria-expanded="false" aria-controls="expandUsers">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/>
                </svg>
                <span>Users</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                </svg>
            </a>

            <ul class="collapse sidebar__menu <?php echo $this->user_nav_active ?>" id="expandUsers">
                <li><a href="index.php?controller=user&action=index" class="<?php echo $this->user_nav_index ?>">All Users</a></li>
                <li><a href="index.php?controller=user&action=create" class="<?php echo $this->user_nav_create ?>">New Users</a></li>
            </ul>
        </li>
        <!-- End expand Users -->

        <li class="sidebar__nav-item">
            <a href="#" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"/></svg> <span>Comments</span></a>
        </li>

        <li class="sidebar__nav-item">
            <a href="#" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> <span>Reviews</span></a>
        </li>
        <li class="sidebar__nav-item">
            <a href="../frontend/index.php" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg> <span>Back to FlixTV</span></a>
        </li>
    </ul>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">© FlixTV Admin Dashboard, 2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Hoài Nam</a></div>
    <!-- end sidebar copyright -->
</div>
<!-- end sidebar -->
