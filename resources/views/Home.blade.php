<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK PGRI WLINGI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .school-navbar {
            min-height: 72px;
            background: #fff;
            box-shadow: 0 2px 12px rgb(22 49 88 / 8%);
        }

        .school-navbar .container-fluid {
            min-height: 72px;
            padding-inline: clamp(1rem, 3.2vw, 3rem);
        }

        .school-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-right: auto;
            color: #1e3a63;
            text-decoration: none;
            white-space: nowrap;
        }

        .school-brand img {
            width: 48px;
            height: 54px;
            object-fit: contain;
        }

        .school-brand strong {
            display: block;
            font-size: 1.3rem;
            line-height: 1.15;
        }

        .school-navbar .navbar-collapse {
            flex-grow: 0;
        }

        .school-navbar .navbar-nav {
            align-items: stretch;
            gap: clamp(.25rem, 1.1vw, 1.2rem);
        }

        .school-navbar .nav-link {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 72px;
            padding-inline: .65rem !important;
            color: #203b63;
            font-size: .95rem;
        }

        .school-navbar .nav-link:hover,
        .school-navbar .nav-link.active {
            color: #0878ef;
        }

        .school-navbar .nav-link.active::after {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 4px;
            background: #1684f8;
            content: '';
        }

        .carousel-item img {
            width: 100%;
            height: clamp(180px, 32vw, 420px);
            object-fit: cover;
        }

        body {
            padding-bottom: 96px;
        }

        .home-footer {
            position: fixed;
            z-index: 1020;
            right: 8px;
            bottom: 6px;
            left: 8px;
            display: grid;
            grid-template-columns: 1fr 1.2fr 1fr;
            align-items: center;
            min-height: 78px;
            padding: 10px clamp(16px, 4vw, 48px);
            color: #f5f7fb;
            border: 1px solid #73849b;
            border-radius: 7px;
            background: linear-gradient(110deg, #4d617e, #5c708b);
            box-shadow: 0 2px 8px rgb(19 39 66 / 18%);
        }

        .home-footer__school {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .home-footer__school img {
            width: 32px;
            height: 36px;
            object-fit: contain;
        }

        .home-footer__school strong,
        .home-footer__school span {
            display: block;
        }

        .home-footer__school strong {
            font-size: .95rem;
        }

        .home-footer__school span,
        .home-footer__credit,
        .home-footer__copyright {
            color: #e0e7f0;
            font-size: .68rem;
            line-height: 1.45;
        }

        .home-footer__credit,
        .home-footer__copyright {
            min-height: 38px;
            padding-left: clamp(12px, 3vw, 36px);
            border-left: 1px solid rgb(231 239 249 / 50%);
        }

        .home-footer__credit strong {
            color: #fff;
        }

        .home-footer__copyright {
            justify-self: end;
        }

        @media (max-width: 991.98px) {
            body {
                padding-bottom: 125px;
            }

            .school-navbar .container-fluid {
                flex-wrap: wrap;
            }

            .school-brand {
                margin-right: auto;
            }

            .school-navbar .navbar-toggler {
                order: 2;
            }

            .school-navbar .navbar-collapse {
                flex-basis: 100%;
                order: 3;
            }

            .school-navbar form[role="search"] {
                flex-basis: 100%;
                order: 4;
                margin: .5rem 0 0;
            }

            .school-navbar form[role="search"] input {
                flex: 1;
            }

            .school-navbar .navbar-nav {
                gap: 0;
                padding-top: .5rem;
            }

            .school-navbar .nav-link {
                min-height: 44px;
            }

            .school-navbar .nav-link.active::after {
                top: 10px;
                right: auto;
                bottom: auto;
                left: 0;
                width: 4px;
                height: 24px;
            }

            .home-footer {
                grid-template-columns: 1fr 1fr;
                gap: 8px 12px;
            }

            .home-footer__copyright {
                grid-column: 1 / -1;
                justify-self: stretch;
                padding: 8px 0 0;
                border-top: 1px solid rgb(231 239 249 / 40%);
                border-left: 0;
            }
        }

        @media (max-width: 575.98px) {
            body {
                padding-bottom: 180px;
            }

            .home-footer {
                grid-template-columns: 1fr;
                gap: 8px;
                padding: 12px 14px;
            }

            .home-footer__school img {
                width: 28px;
                height: 30px;
            }

            .home-footer__credit,
            .home-footer__copyright {
                grid-column: auto;
                justify-self: stretch;
                padding: 7px 0 0;
                border-top: 1px solid rgb(231 239 249 / 40%);
                border-left: 0;
            }

            .home-footer__school span,
            .home-footer__credit,
            .home-footer__copyright {
                font-size: .65rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg school-navbar">
        <div class="container-fluid">
            <a class="school-brand" href="/" aria-label="SMK PGRI Wlingi - Beranda">
                <img src="{{ asset('Logo.smk.png') }}" alt="Logo SMK PGRI Wlingi">
                <strong>SMK PGRI Wlingi</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homeNavbar"
                aria-controls="homeNavbar" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="homeNavbar">
                <ul class="navbar-nav mb-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Akademik</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Kesiswaan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Berita</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="T1.jpg" class="d-block w-100" alt="Slide utama" width="2000" height="200">
            </div>
            <div class="carousel-item">
                <img src="T1.jpg" class="d-block w-100" alt="Slide kedua" width="1555" height="200">
            </div>
            <div class="carousel-item">
                <img src="T1.jpg" class="d-block w-100" alt="Slide ketiga" width="1555" height="200">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>

    <footer class="home-footer">
        <div class="home-footer__school">
            <img src="{{ asset('Logo.smk.png') }}" alt="Logo SMK PGRI Wlingi">
            <div>
                <strong>SMK PGRI Wlingi</strong>
            </div>
        </div>
        <div class="home-footer__credit">
            Website dikembangkan oleh<br>
            <strong>Klinik Komputer dan Audio Blitar</strong>
        </div>
        <div class="home-footer__copyright">
            &copy; 2026 SMK PGRI Wlingi. All rights reserved.<br>
            Powered by Klinik Komputer dan Audio Blitar
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
