<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCI Web - Solusi Safety Terpercaya</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles

    <style>
        :root {
            --primary-yellow: #fbff00;
            --dark-bg: #000000;
            --soft-white: #f8f9fa;
        }

        /* Tombol lihat produk */
        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #fff;
            /* Tambahkan 3 baris di bawah ini */
            display: flex;
            flex-direction: column;
        }

        /* Ini memastikan konten utama mengambil semua ruang yang tersisa */
        main {
            flex: 1 0 auto;
        }

        /* Footer tetap pada ukuran aslinya namun terdorong ke bawah */
        footer {
            flex-shrink: 0;
        }

        /* --- NAVBAR FIX & IMPROVEMENT --- */
        .navbar {
            background-color: var(--dark-bg);
            padding: 15px 0;
            transition: all 0.3s ease;
            border-block-end: none !important;
            /* Menghilangkan garis kuning bawah */
        }

        .navbar-brand .brand-text {
            color: var(--primary-yellow);
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500;
            margin: 0 12px;
            transition: all 0.3s ease;
            position: relative;
            padding-bottom: 5px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-yellow) !important;
        }

        /* Hilangkan Bug Garis Kuning Ganda */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            /* Awalnya lebar 0 */
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-yellow);
            transition: width 0.3s ease;
            /* Efek animasi melebar */
            border-radius: 2px;
        }

        /* Garis muncul saat hover atau saat menu aktif */
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
            /* Melebar penuh */
        }

        /* Khusus tampilan Mobile agar garis tidak terlalu panjang */
        @media (max-width: 991px) {
            .nav-link::after {
                display: none;
                /* Opsional: hilangkan garis di mobile jika dirasa terlalu ramai */
            }

            .nav-link.active {
                border-left: 4px solid var(--primary-yellow);
                /* Ganti dengan garis samping di mobile */
                padding-left: 10px;
            }
        }

        /* --- HERO SECTION IMPROVEMENT --- */
        .hero-wrapper {
            background: linear-gradient(135deg, #ffffff 0%, #fefdf0 100%);
            padding: 80px 0 120px;
            border-radius: 0 0 80px 80px;
            margin-block-end: 60px;
            position: relative;
        }

        .hero-title {
            font-weight: 800;
            font-size: 3.5rem;
            color: #1a1a1a;
            line-height: 1.1;
        }

        .hero-title span {
            color: #d4af37;
            /* Gold/Kuning lebih elegan */
            position: relative;
            display: inline-block;
        }

        .btn-hero {
            background-color: var(--dark-bg);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: 0.4s;
        }

        .btn-hero:hover {
            transform: translateY(-5px);
            background-color: #333;
            color: var(--primary-yellow);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Responsivitas */
        @media (max-inline-size: 991px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .navbar-collapse {
                background: var(--dark-bg);
                padding: 20px;
                border-radius: 20px;
                margin-block-start: 15px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logosci.jpg') }}" alt="Logo SCI" class="navbar-logo me-2">
                <div class="d-flex flex-column brand-container">
                    <span class="brand-text">Safety Corner Indonesia</span>
                    <span class="brand-slogan text-white small">Ingat Safety Ingat SCI</span>
                </div>
            </a>

            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('catalog') ? 'active' : '' }}"
                            href="{{ route('catalog') }}">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-4 text-center bg-dark text-white-50 mt-5">
        <div class="container">
            <small>&copy; 2024 Safety Corner Indonesia. All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>

<style>
    /* Default (Desktop) */
    .navbar-logo {
        height: 50px;
        width: auto;
        transition: all 0.3s ease;
    }

    /* Default (Desktop) */
    .brand-text {
        font-size: 24px;
        line-height: 1.2;
        /* Ditingkatkan sedikit dari 1 agar tidak mepet ke bawah */
        margin-bottom: 2px;
        /* Memberikan jarak pasti ke slogan */
    }

    .brand-slogan {
        font-size: 12px;
        line-height: 1.2;
        /* Ditingkatkan sedikit agar lebih seimbang */
        letter-spacing: 0.5px;
        /* Opsional: agar slogan lebih mudah dibaca */
    }

    /* Tablet (di bawah 992px) */
    @media (max-width: 991.98px) {
        .navbar-logo {
            height: 40px;
        }

        .brand-text {
            font-size: 20px;
        }

        .brand-slogan {
            font-size: 10px;
            opacity: 0.7;
            white-space: nowrap;
        }
    }

    /* Mobile (di bawah 576px) */
    @media (max-width: 575.98px) {
        .navbar-logo {
            height: 35px;
        }

        .brand-text {
            font-size: 18px;
        }

        /* Sembunyikan slogan di layar sangat kecil agar tidak berantakan */
        .brand-slogan {
            display: none;
        }

        .navbar-brand {
            max-width: 70%;
            /* Mencegah brand menabrak tombol menu */
        }
    }

    /* Memastikan menu mobile tidak transparan */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: var(--dark-bg);
            padding: 15px;
            border-radius: 10px;
            margin-top: 10px;
        }
    }
</style>
