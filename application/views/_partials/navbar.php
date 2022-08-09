<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= site_url() ?>" class="logo d-flex align-items-center">
            <img src=" <?= base_url('assets/img/logo3.png') ?>" alt="logo gabungan">
            <img src=" <?= base_url('assets/img/logo1.png') ?>" alt="logo gabungan">
            <img src=" <?= base_url('assets/img/logo2.png') ?>" alt="logo gabungan">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= site_url() ?>">Home</a></li>
                <li><a href="<?= site_url('article') ?>">Berita</a></li>
                <li><a href="<?= site_url('page/about') ?>">Dokumentasi</a></li>
                <li><a href="<?= site_url('page/contact') ?>">Profil</a></li>
                <li><a href="<?= site_url('auth/login') ?>">Login</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Fitur search belum bisa gaess...!" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header>