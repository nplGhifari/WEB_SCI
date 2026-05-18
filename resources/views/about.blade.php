@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('images/safety-herosec.jpg') }}" alt="Tentang SCI" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-warning fw-bold text-uppercase">Tentang Kami</h6>
                    <h2 class="display-5 fw-bold mb-4">Safety Corner Indonesia (SCI)</h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Kami adalah penyedia solusi perlengkapan keselamatan kerja (PPE) terpercaya di Indonesia. SCI
                        berkomitmen menyediakan produk berkualitas tinggi dengan standar keamanan nasional dan internasional
                        demi melindungi aset paling berharga Anda: sumber daya manusia.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h5 class="fw-bold"><i class="fas fa-shield-alt text-warning me-2"></i> Kualitas</h5>
                            <p class="small text-muted">Hanya menjual produk yang telah lulus uji standar keamanan.</p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="fw-bold"><i class="fas fa-truck text-warning me-2"></i> Pengiriman</h5>
                            <p class="small text-muted">Layanan pengiriman cepat ke seluruh wilayah operasional Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('images/toko-alat-safety-di-semarang.jpg') }}" alt="Gudang SCI"
                        class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="fw-bold mb-4">Profil Perusahaan</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        Berdiri awal buka pada tahun 2019, SCI Semarang berlokasi strategis di Jl. Indraprasta No.130, Kota
                        Semarang.
                        Kami hadir untuk memenuhi kebutuhan peralatan keselamatan kerja bagi berbagai sektor industri, mulai
                        dari otomotif hingga konstruksi.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        Melalui komitmen yang kuat, SCI telah berkembang menjadi mitra terpercaya bagi perusahaan-perusahaan
                        besar dalam menjaga standar keamanan kerja di lingkungan operasional mereka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="p-4 bg-warning h-100 rounded-4 shadow-sm">
                        <h3 class="fw-bold mb-3"><i class="fas fa-eye me-2"></i> Visi Kami</h3>
                        <p class="fs-5 fw-medium">
                            "Menjadi perusahaan penyedia peralatan keselamatan kerja terbaik dan terpercaya di Indonesia
                            dengan mengutamakan kualitas produk dan pelayanan prima".
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="p-4 bg-white h-100 rounded-4 shadow-sm border-start border-warning border-5">
                        <h3 class="fw-bold mb-3 text-warning"><i class="fas fa-bullseye me-2"></i> Misi Kami</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle text-warning mt-1 me-3"></i>
                                <span>Menyediakan produk peralatan keselamatan kerja yang memenuhi standar kualitas nasional
                                    maupun internasional.</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle text-warning mt-1 me-3"></i>
                                <span>Memberikan solusi terbaik bagi pelanggan dalam memenuhi kebutuhan perlengkapan
                                    keselamatan.</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fas fa-check-circle text-warning mt-1 me-3"></i>
                                <span>Membangun hubungan kerja sama yang harmonis dan berkelanjutan dengan seluruh mitra
                                    bisnis.</span>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-check-circle text-warning mt-1 me-3"></i>
                                <span>Terus berinovasi dalam meningkatkan sistem pelayanan untuk kepuasan pelanggan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Kenapa Memilih Kami?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-3 border h-100 shadow-sm">
                        <div class="mb-3"><i class="fas fa-shield-alt fa-3x text-warning"></i></div>
                        <h4 class="fw-bold">Terjamin</h4>
                        <p class="text-muted small">Semua barang yang kami sediakan memiliki kualitas tinggi dan orisinal.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 border h-100 shadow-sm">
                        <div class="mb-3"><i class="fas fa-boxes fa-3x text-warning"></i></div>
                        <h4 class="fw-bold">Stok Tersedia</h4>
                        <p class="text-muted small">Kelengkapan stok produk untuk mendukung kelancaran proyek Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 border h-100 shadow-sm">
                        <div class="mb-3"><i class="fas fa-shipping-fast fa-3x text-warning"></i></div>
                        <h4 class="fw-bold">Kirim Cepat</h4>
                        <p class="text-muted small">Layanan logistik yang handal untuk memastikan barang sampai tepat waktu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
