<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="Logo.smk.png" alt="Logo SMK PGRI Wlingi" width="60" height="55" class="me-2">
                <fw-bold>SMK PGRI Wlingi</fw-bold>
            </a>
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
                <img src="T1.jpg" class="d-block w-100" alt="Slide utama" width="2000" height="450">
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/7mAIHtunQqM/maxresdefault.jpg" class="d-block w-100"
                    alt="Slide kedua" width="2000" height="450">
            </div>
            <div class="carousel-item">
                <img src="images (10).jpg"
                    class="d-block w-100" alt="Slide ketiga" width="2000" height="450">
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

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3" style="max-width: 990px;">
                    <div class="row g-0">
                        <h5 class="card-header">Sambutan Kepala sekolah <br> </h5>
                        <div class="col-md-4">
                            <img src="https://sikabar.smkpgriwlingi.sch.id/img/guru-putih/Drs.%20BAMBANG%20SETIYONO,%20ST,%20M.Pd.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Assalamualaikum Wr Wb </h5>
                                <p class="card-text">Yang saya hormati rekan-rekan guru dan staf tata usaha yang saya
                                    banggakan, para orang tua/wali murid yang kami muliakan, serta anak-anakku sekalian
                                    yang sangat saya cintai.
                                    Puji syukur marilah kita panjatkan ke hadirat Allah SWT, karena atas limpahan rahmat
                                    dan karunia-Nya, kita semua dapat berkumpul dalam acara hari ini dalam keadaan sehat
                                    walafiat.
                                    Atas nama lembaga sekolah, saya menyampaikan terima kasih dan apresiasi yang
                                    setinggi-tingginya kepada seluruh panitia, guru, dan semua pihak yang telah bekerja
                                    keras mendukung kesuksesan acara ini. Kepada anak-anakku sekalian, jadikanlah
                                    momentum hari ini sebagai langkah awal untuk terus maju. Tetaplah menjaga nama baik
                                    almamater, selalu berakhlak mulia, dan jangan pernah lelah untuk menuntut ilmu di
                                    mana pun kalian berada.
                                    Akhir kata, saya memohon maaf apabila terdapat kekurangan dalam penyelenggaraan
                                    acara ini. Mari bersama-sama kita sukseskan seluruh rangkaian kegiatan dengan penuh
                                    semangat.
                                    Wabillahi taufiq wal hidayah," <b>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</b>
                                </p>
                                <p class="card-text"><small class="text-body-secondary"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <h5 class="card-header">Kegiatan Terbaru</h5>
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGKuKdxHIABO2jw1gGRcRWGOMkx2kIJZmAiJOSZIiTrw&s=10"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Diesnatalis 39 Tahun </h5>
                                        <small class="text-muted"><i class="bi bi-calendar"></i>16 Juli 2026</small>
                                        <p class="card-text">Kegiatan peringatan Dies Natalis ke-39 SMK PGRI Wlingi
                                            yang dimeriahkan dengan berbagai acara dan hiburan bagi warga sekolah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="riyal.jpg" class="card-img-top" alt="..." height="280">
                                    <div class="card-body">
                                        <h5 class="card-title">Sosialisasi & pelatihan AI</h5>
                                        <small class="text-muted"><i class="bi bi-calendar"></i>14 Agustus
                                            2026</small>
                                        <p class="card-text">Kegiatan sosialisasi dan pelatihan Artificial Intelligence
                                            (AI) yang bertujuan mengenalkan serta meningkatkan pemahaman siswa mengenai
                                            pemanfaatan teknologi AI.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaVqyEGGxv6mIsWhLJ9D1O92u_omx8jiyhxAzywAFrhERRhKWWJu7Jbm-6&s=10"
                                        class="card-img-top" alt="..." height="">
                                    <div class="card-body">
                                        <h5 class="card-title">Classmeet & Pameran DKV</h5>
                                        <small class="text-muted"><i class="bi bi-calendar"></i>12 Juni 2026</small>
                                        <p class="card-text">Kegiatan Classmeet Day 2 yang diisi dengan berbagai
                                            aktivitas dan perlombaan untuk meningkatkan kreativitas, kekompakan, serta
                                            semangat kebersamaan antarsiswa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpW2vK_7njImbj8zVeUoUaxEXPnUDop_O2h-xTl5nY6Q&s=10"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Hari Kemerdekaan Ke 81</h5>
                                        <small class="text-muted"><i class="bi bi-calendar"></i>17 Agustus
                                            2026</small>
                                        <p class="card-text">Kegiatan upacara pengibaran bendera dalam rangka
                                            memperingati Hari Ulang Tahun ke-81 Kemerdekaan Republik Indonesia pada 17
                                            Agustus 2026.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h5><i class="bi bi-megaphone-fill text-primary me-2">Pengumuman Terbaru </i></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>

                        <li class="list-group-item">Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026
                            <br><small class="text-muted"><i class="bi bi-calendar"></i>13 Februari 2025</small>
                        </li>
                        <li class="list-group-item">Jadwal Ujian Semester Genap Tahun Ajaran 2025/2026
                            <br><small class="text-muted"><i class="bi bi-calendar"></i>15 Juni 2026</small>
                        </li>
                        <li class="list-group-item">Informasi Libur Idul Fitri 1446 H
                            <br><small class="text-muted"><i class="bi bi-calendar"></i>31 Maret 2026</small>
                        </li>
                        <li class="list-group-item">Pengumuman Kelulusan Kelas XII
                            <br><small class="text-muted"><i class="bi bi-calendar"></i>4 Mei 2026</small>
                        </li>
                        <li class="list-group-item">Kegiatan Bakti Sosial Sekolah
                            <br><small class="text-muted"><i class="bi bi-calendar"></i>10 Juli 2026</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom bg-dark text-white py-2">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-md-4 border-end">
                    <div class="d-flex align-items-center">
                        <img src="Logo.smk.png" alt="Logo SMK PGRI Wlingi" width="55" height="50"
                            class="me-3">

                        <div>
                            <strong class="fs-6">SMK PGRI Wlingi</strong>
                        </div>
                    </div>
                </div>

                <!-- Pengembang -->
                <div class="col-md-4 border-end">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-code-slash fs-3 me-3"></i>

                        <div>
                            <small>Website ini dikembangkan oleh</small>
                            <div class="fw-bold">
                                Klik Komputer dan Audio Blitar
                            </div>
                            <small>Solusi Teknologi untuk Pendidikan</small>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-info-circle-fill fs-5 me-2"></i>

                        <div>
                            <small>
                                © 2025 Nama Sekolah. All rights reserved.
                            </small>
                            <br>
                            <small>
                                Powered by Klik Komputer dan Audio Blitar
                            </small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
