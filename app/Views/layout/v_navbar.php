<nav class="main-header navbar navbar-expand navbar-light" style="background-color:  #ffc107;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <!-- Garis tiga interaktif -->
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link  text-capitalize">
                <i class="fas fa-user"></i> <?= session('username') ?>
            </a>
        </li>
    </ul>
</nav>