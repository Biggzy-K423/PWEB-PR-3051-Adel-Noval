<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container">
        <a href="#" class="navbar-brand sidebar-gone-hide">
            <img src="images/1701714126067.png" class="img-fluid d-none d-md-block" width="160px">
            <img src="images/1701714126067.png" class="img-fluid d-lg-none d-md-inline-block" width="160px">
        </a>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <span class="rounded-circle mr-1"><i class="fas fa-user"></i></span>
                    <div class="d-sm-none d-lg-inline-block"><?= UserModel::getUsername(); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="index.php?action=logout" class="dropdown-item has-icon">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
