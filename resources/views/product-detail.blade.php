@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column" style="min-height: 100vh;">
        <div class="container my-5 flex-grow-1">
            <nav aria-label="breadcrumb" class="mb-4 d-flex justify-content-between align-items-center">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-muted">Beranda</a></li>
                    <li class="breadcrumb-item text-dark fw-bold" aria-current="page">Detail Produk</li>
                </ol>
                <a href="{{ url()->previous() }}" class="btn btn-outline-dark btn-sm rounded-pill px-3">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </nav>

            <div class="card shadow-lg rounded-5 border-0 overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6 bg-light d-flex align-items-center justify-content-center p-3 p-md-5">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}"
                                class="img-fluid main-product-img">
                        </div>
                    </div>

                    <div class="col-lg-6 p-4 p-md-5 bg-white">
                        <div class="detail-content">
                            <div class="mb-3">
                                <a href="javascript:history.back()"
                                    class="text-decoration-none text-muted small hover-primary">
                                    <i class="fas fa-chevron-left me-1"></i> Kembali ke halaman sebelumnya
                                </a>
                            </div>
                            <h1 class="display-5 fw-bold text-dark mb-2">{{ $product->name }}</h1>
                            <h3 class="text-danger fw-bold mb-4">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </h3>

                            <div class="product-description-box p-4 rounded-4 border mb-4 bg-light bg-opacity-10">
                                <h5 class="fw-bold text-dark border-bottom pb-2 mb-3" style="border-width: 2px !important;">
                                    Deskripsi Produk
                                </h5>
                                <div class="text-muted" style="line-height: 1.8; font-size: 0.95rem;">
                                    @if ($product->content)
                                        {!! $product->content !!}
                                    @else
                                        <p class="fst-italic m-0">Belum ada deskripsi untuk produk ini.</p>
                                    @endif
                                </div>
                            </div>

                            <div class="row g-2 mb-5 text-center">
                                <div class="col-4">
                                    <div class="p-2 border rounded-3 bg-white shadow-sm h-100">
                                        <small class="text-muted d-block">Kualitas</small>
                                        <span class="fw-bold small">Terjamin</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 border rounded-3 bg-white shadow-sm h-100">
                                        <small class="text-muted d-block">Stok</small>
                                        <span class="fw-bold small">Tersedia</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 border rounded-3 bg-white shadow-sm h-100">
                                        <small class="text-muted d-block">Kirim</small>
                                        <span class="fw-bold small">Cepat</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <a href="https://wa.me/628123456789?text=Halo%20SCI,%20saya%20ingin%20memesan%20{{ $product->name }}"
                                    target="_blank" class="btn btn-dark btn-lg py-3 rounded-pill fw-bold shadow-hover-lg">
                                    <i class="fab fa-whatsapp me-2"></i> Pesan Sekarang via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Mengatur Body untuk Sticky Footer */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Styling Gambar agar Besar dan Tajam */
        .product-image-wrapper {
            width: 100%;
            text-align: center;
            padding: 20px;
        }

        .main-product-img {
            max-height: 550px;
            /* Ukuran maksimal ditambah */
            width: 100%;
            object-fit: contain;
            filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.15));
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .main-product-img:hover {
            transform: scale(1.05) translateY(-5px);
        }

        /* Border Deskripsi yang Lebih Rapi */
        .product-description-box {
            border: 1px solid #e9ecef !important;
            transition: border-color 0.3s ease;
        }

        .product-description-box:hover {
            border-color: #fbff00 !important;
            /* Warna kuning khas SCI saat hover */
        }

        /* Tombol Hover Effect */
        .shadow-hover-lg:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
            transform: translateY(-2px);
        }

        /* Breadcrumb separator */
        .breadcrumb-item+.breadcrumb-item::before {
            content: "/";
            color: #fbff00;
        }

        /* Responsive Mobile */
        @media (max-width: 991px) {
            .main-product-img {
                max-height: 350px;
            }

            .detail-content {
                padding: 10px 0;
            }
        }
    </style>
@endsection
