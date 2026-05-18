@extends('layouts.app')

@section('content')
    <section id="katalog" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm sticky-top" style="top: 100px; z-index: 10;">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Kategori</h5>
                            <div class="list-group list-group-flush" id="categoryFilter">
                                <a href="#" class="list-group-item list-group-item-action active filter-btn"
                                    data-category="all">
                                    Semua Produk
                                </a>
                                @foreach ($categories as $category)
                                    <a href="#" class="list-group-item list-group-item-action filter-btn"
                                        data-category="{{ $category->id }}">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="card border-0 shadow-sm mb-4 search-wrapper">
                        <div class="card-body p-2">
                            <div class="input-group custom-search">
                                <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                                <input type="text" id="searchInput" class="form-control border-0"
                                    placeholder="Cari perlengkapan safety...">
                            </div>
                        </div>
                    </div>

                    <div class="row g-3" id="productList">
                        @forelse($products as $product)
                            <div class="col-6 col-md-4 product-item" data-name="{{ strtolower($product->name) }}"
                                data-category="{{ $product->category_id }}">
                                <div class="card h-100 border-0 shadow-sm product-card transition">
                                    <div class="position-relative overflow-hidden">
                                        <img src="{{ $product->thumbnail ? asset('storage/' . $product->thumbnail) : 'https://via.placeholder.com/300' }}"
                                            class="card-img-top p-3" alt="{{ $product->name }}"
                                            style="height: 200px; object-fit: contain;">
                                    </div>
                                    <div class="card-body d-flex flex-column p-3">
                                        <span class="badge bg-light text-dark mb-2 align-self-start border">
                                            {{ $product->category->name ?? 'Safety' }}
                                        </span>
                                        <h6 class="fw-bold text-dark mb-1 text-truncate">{{ $product->name }}</h6>
                                        <p class="text-warning fw-bold mb-3">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <a href="{{ route('product.show', $product->slug) }}"
                                            class="btn btn-outline-dark btn-sm mt-auto rounded-pill">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <img src="https://illustrations.popsy.co/gray/searching.svg" alt="Not Found"
                                    style="width: 200px;">
                                <p class="text-muted mt-3">Produk tidak ditemukan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Global & Utilities */
        .product-card {
            transition: 0.3s;
            border-radius: 12px;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
        }

        /* Category Filter */
        .filter-btn.active {
            background: #fbff00 !important;
            color: #000 !important;
            font-weight: 600;
            border-radius: 8px;
        }

        .list-group-item {
            border: none;
            margin-bottom: 2px;
            border-radius: 8px;
        }

        /* Search Bar Stylings */
        .search-wrapper {
            border-radius: 12px;
            transition: 0.3s;
            border: 2px solid transparent;
        }

        /* Warna kuning menyatu saat kolom diklik */
        .search-wrapper:focus-within {
            border-color: #fbff00;
            box-shadow: 0 0 0 0.2rem rgba(251, 255, 0, 0.15) !important;
        }

        #searchInput:focus {
            box-shadow: none !important;
            outline: none;
        }

        .custom-search i {
            color: #ccc;
            transition: 0.3s;
        }

        .search-wrapper:focus-within i {
            color: #000;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const filterBtns = document.querySelectorAll('.filter-btn');
            const products = document.querySelectorAll('.product-item');

            function filterLogic() {
                const searchText = searchInput.value.toLowerCase();
                const activeCategory = document.querySelector('.filter-btn.active').dataset.category;

                products.forEach(item => {
                    const name = item.dataset.name;
                    const category = item.dataset.category;

                    const matchSearch = name.includes(searchText);
                    const matchCategory = (activeCategory === 'all' || activeCategory === category);

                    if (matchSearch && matchCategory) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // Event Pencarian
            searchInput.addEventListener('input', filterLogic);

            // Event Klik Kategori
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    filterLogic();
                });
            });
        });
    </script>
@endsection
