@extends('layouts.app')

@section('content')
    <div class="main-wrapper">
        <section class="hero-wrapper bg-white">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start mb-5 mb-lg-0">
                        <h1 class="hero-title mb-3">Solusi Safety <span class="text-warning">Terpercaya</span> Untuk Anda</h1>
                        <p class="hero-subtitle mb-4">
                            Lindungi diri dan tim Anda dengan peralatan safety berkualitas tinggi.
                            Ingat Safety, Ingat SCI. Telusuri katalog produk unggulan kami sekarang.
                        </p>
                        <div class="d-grid d-sm-flex justify-content-lg-start justify-content-center gap-3">
                            <a href="#produk"
                                class="btn btn-hero shadow-lg d-inline-flex align-items-center justify-content-center">
                                Lihat Produk
                            </a>

                            <a href="{{ route('contact') }}"
                                class="btn btn-outline-dark px-4 py-2 rounded-pill fw-bold border-2 d-inline-flex align-items-center justify-content-center"
                                style="min-height: 48px;">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="{{ asset('images/safety-herosec.jpg') }}" alt="Safety SCI"
                            class="img-fluid hero-image mx-auto">
                    </div>
                </div>
            </div>
        </section>

        <section id="produk" class="pt-2 pb-5">
            <div class="container-fluid px-md-5">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="fw-bold">Katalog Produk</h2>
                        <div class="mx-auto"
                            style="width: 60px; height: 4px; background-color: #fbff00; border-radius: 10px;"></div>
                    </div>
                </div>

                <div class="row g-3 justify-content-center">
                    @forelse($products->take(6) as $product)
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="card h-100 border-0 shadow-sm product-card">
                                <div class="img-container p-2">
                                    <img src="{{ $product->thumbnail ? asset('storage/' . $product->thumbnail) : 'https://via.placeholder.com/300' }}"
                                        class="card-img-top" alt="{{ $product->name }}">
                                </div>
                                <div class="card-body text-center p-2">
                                    <h6 class="fw-bold mb-1 text-truncate" style="font-size: 0.9rem;">{{ $product->name }}
                                    </h6>
                                    <p class="text-muted small mb-2">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </p>
                                    <a href="{{ route('product.show', $product->slug) }}"
                                        class="btn btn-dark btn-sm w-100 rounded-pill py-1" style="font-size: 0.8rem;">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Produk sedang dalam proses update.</p>
                        </div>
                    @endforelse
                </div>

                @if ($products->count() > 6)
                    <div class="text-center mt-5">
                        <a href="{{ route('catalog') }}" class="btn btn-outline-dark px-5 rounded-pill fw-bold border-2">
                            Lihat Produk Lainnya
                        </a>
                    </div>
                @endif
            </div>
        </section>

        <section id="tentang-kami" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="position-relative">
                            <img src="{{ asset('images/perlengkapan-safety.jpg') }}" alt="Tentang SCI"
                                class="img-fluid rounded-5 shadow-lg">
                            <div class="position-absolute bottom-0 start-0 translate-middle-x bg-warning d-none d-lg-block"
                                style="width: 80px; height: 80px; z-index: -1; border-radius: 20px; transform: rotate(15deg) translateX(30px);">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ps-lg-5">
                        <h6 class="text-warning fw-bold text-uppercase mb-2">Siapa Kami</h6>
                        <h2 class="display-6 fw-bold text-dark mb-4">Solusi Peralatan <span
                                class="text-warning">Safety</span> Terbaik</h2>
                        <p class="text-muted mb-4" style="line-height: 1.8;">
                            SCI (Safety Center Indonesia) berkomitmen untuk menyediakan peralatan keamanan kerja berkualitas
                            tinggi.
                            Keselamatan adalah prioritas utama dalam setiap industri.
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-warning me-2"></i>
                                    <span class="fw-bold small">Produk Standar SNI</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-warning me-2"></i>
                                    <span class="fw-bold small">Harga Kompetitif</span>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('catalog') }}"
                            class="btn btn-dark btn-lg px-4 py-2 rounded-pill fw-bold shadow-sm">Lihat
                            Katalog</a>
                    </div>
                </div>
            </div>

            <style>
                html {
                    scroll-behavior: smooth;
                }

                .hero-image {
                    max-width: 100%;
                    height: auto;
                    /* Memastikan rasio tetap terjaga */
                    object-fit: cover;
                    /* Jika gambar harus mengisi area tertentu tanpa gepeng */
                    border-radius: 20px;
                    /* Opsional: agar sudutnya melengkung rapi */
                }

                .btn-outline-dark {
                    line-height: 1;
                    /* Menghilangkan extra space dari default line-height browser */
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                /* Merapatkan jarak antar section agar tidak terlalu kosong */
                #produk {
                    scroll-margin-top: 100px;
                    /* Sesuaikan dengan tinggi navbar Anda */
                }

                /* Pengaturan kartu produk */
                .product-card {
                    border-radius: 15px !important;
                    transition: transform 0.2s;
                    /* Membatasi lebar agar kotak tidak "melar" saat layar sangat lebar */
                    max-width: 210px;
                    margin: 0 auto;
                }

                .product-card:hover {
                    transform: translateY(-5px);
                }

                /* Memastikan area gambar seragam tingginya */
                .img-container {
                    height: 150px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                    background-color: #f8f9fa;
                    /* Opsional: beri background tipis pada area gambar */
                    border-radius: 10px;
                }

                .img-container img {
                    max-height: 100%;
                    width: auto;
                    object-fit: contain;
                }

                /* Efek titik-titik jika nama produk terlalu panjang */
                .text-truncate {
                    display: block;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                /* Penyesuaian tombol hero agar konsisten */
                .btn-outline-dark {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }
            </style>

        </section>
    </div>
@endsection
