<!-- Start Header Area -->
<div class="header-area">
    <div class="container">
        <div class="header-wrapper">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="site-logo">
                        <h2>DANSOS</h2>
                        <a data-toggle="tooltip" title="Be-one" href="index.html"></a>
                    </div>
                </div>
                <div class="col-6 d-lg-none static text-right">
                    <div class="show-mobile-menu"></div>
                </div>
                <div class="col-lg-9 text-right d-none d-lg-block">
                    <nav class="menu-wrapper">
                        <ul class="main-menu" id="mobile-menu">
                            <li class=""><a class="{{ Request::segment(1) == "" ? "active" : " " }}" href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="#feature">Berita</a></li>
                            <li><a class="{{ Request::segment(1) == "pengajuan" ? "active" : " " }}" href="{{ route('pengajuan.create') }}">Pengaduan</a></li>
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i> Rifjan Jundila
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"> Riwayat</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"> LogOut</a>
                                    </div>
                                </li>
                            @else
                                <li class="">
                                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                                </li>
                            @endauth
                            <li>
                                <a href="https://pp-pusdatin-dinsos.jakarta.go.id/page/home" target="_blank" class="btn btn-primary">Check NIK</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->
