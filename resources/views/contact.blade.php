@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p class="text-muted">Punya pertanyaan seputar produk atau pemesanan skala besar? Kami siap membantu.</p>
            </div>

            <div class="row g-4 justify-content-center mb-5">
                <div class="col-md-5 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 text-center h-100 d-flex flex-column">
                        <div class="bg-warning rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3"
                            style="width: 70px; height: 70px;">
                            <i class="fab fa-whatsapp fs-2 text-dark"></i>
                        </div>
                        <h5 class="fw-bold">WhatsApp SCI Semarang</h5>
                        <p class="text-muted flex-grow-1">0898-8945-704</p>
                        <div class="mt-auto">
                            <a href="https://wa.me/628988945704" target="_blank"
                                class="btn btn-outline-dark w-100 py-2 rounded-pill shadow-sm">
                                <i class="fab fa-whatsapp me-2"></i>Chat Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 text-center h-100 d-flex flex-column">
                        <div class="bg-warning rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3"
                            style="width: 70px; height: 70px;">
                            <i class="fas fa-envelope fs-2 text-dark"></i>
                        </div>
                        <h5 class="fw-bold">Email Resmi</h5>
                        <p class="text-muted flex-grow-1">salesscisemarang@gmail.com</p>
                        <div class="mt-auto">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=salesscisemarang@gmail.com"
                                target="_blank" class="btn btn-outline-dark w-100 py-2 rounded-pill">
                                <i class="fas fa-paper-plane me-2"></i>Kirim Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-lg overflow-hidden rounded-4">
                        <div class="card-header bg-dark text-white p-3 text-center">
                            <h5 class="mb-0 fw-bold"><i class="fas fa-map-marker-alt text-warning me-2"></i>Lokasi Toko
                                Safety Corner Indonesia Semarang</h5>
                        </div>
                        <div class="ratio ratio-21x9" style="min-height: 450px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.273418567215!2d110.40742127504543!3d-6.97705139302359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4931a55555%3A0x6734c718a994793d!2sSafety%20Corner%20Indonesia%20(Semarang)!5e0!3m2!1sid!2sid!4v1714210000000!5m2!1sid!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="card-body bg-white text-center border-top">
                            <p class="mb-1 text-muted">
                                <i class="fas fa-map-marked-alt me-2 text-warning"></i>
                                <strong>Alamat:</strong> Jl. Indraprasta No.130, Pindrikan Lor, Kec. Semarang Tengah, Kota
                                Semarang, Jawa Tengah 50131
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
