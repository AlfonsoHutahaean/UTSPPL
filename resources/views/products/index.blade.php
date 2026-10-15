<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk - CampusMarket</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 40px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #2563eb;
            text-decoration: none;
            white-space: nowrap;
        }

        .logo span {
            color: #111827;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
            justify-content: center;
        }

        .nav a {
            text-decoration: none;
            color: #4b5563;
            padding: 9px 13px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        .nav a:hover {
            background: #eff6ff;
            color: #2563eb;
        }

        .nav a.active {
            background: #eff6ff;
            color: #2563eb;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-info {
            text-align: right;
        }

        .user-info strong {
            display: block;
            font-size: 14px;
            color: #111827;
        }

        .user-info span {
            display: block;
            margin-top: 3px;
            font-size: 12px;
            color: #6b7280;
        }

        .logout {
            border: none;
            background: #fee2e2;
            color: #dc2626;
            padding: 9px 14px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout:hover {
            background: #fecaca;
        }

        .auth-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-login,
        .btn-register {
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        .btn-login {
            color: #2563eb;
            background: #eff6ff;
        }

        .btn-register {
            color: white;
            background: #2563eb;
        }

        .btn-login:hover {
            background: #dbeafe;
        }

        .btn-register:hover {
            background: #1d4ed8;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 20px 60px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-header h1 {
            margin: 0 0 8px;
            font-size: 30px;
            color: #111827;
        }

        .page-header p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }

        .btn-add {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 11px 17px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: bold;
            white-space: nowrap;
        }

        .btn-add:hover {
            background: #1d4ed8;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 14px 17px;
            border-radius: 10px;
            margin-bottom: 22px;
            font-size: 14px;
            line-height: 1.5;
        }

        .alert-success {
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .alert-error {
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
        }

        .alert-warning {
            background: #fef3c7;
            border: 1px solid #fde68a;
            color: #92400e;
        }

        /* =========================
           SEARCH & FILTER
        ========================= */

        .filter-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
        }

        .filter-title {
            margin: 0 0 15px;
            font-size: 17px;
            color: #111827;
        }

        .filter-form {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr auto;
            gap: 10px;
        }

        .form-control {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background: white;
            color: #374151;
            font-size: 13px;
            outline: none;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        .btn-filter {
            border: none;
            background: #2563eb;
            color: white;
            padding: 11px 17px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 13px;
        }

        .btn-filter:hover {
            background: #1d4ed8;
        }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            background: #f3f4f6;
            color: #4b5563;
            padding: 11px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        .btn-reset:hover {
            background: #e5e7eb;
        }

        /* =========================
           PRODUCT HEADER
        ========================= */

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .product-header h2 {
            margin: 0;
            font-size: 22px;
            color: #111827;
        }

        .product-count {
            background: #eff6ff;
            color: #2563eb;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           PRODUCT GRID
        ========================= */

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .product-image {
            width: 100%;
            height: 210px;
            background: #f1f3f5;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-image {
            color: #9ca3af;
            font-size: 13px;
        }

        /* =========================
           STATUS BADGE
        ========================= */

        .status-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .status-active {
            background: #dcfce7;
            color: #166534;
        }

        .status-sold {
            background: #fee2e2;
            color: #991b1b;
        }

        /* =========================
           PRODUCT INFO
        ========================= */

        .product-body {
            padding: 17px;
        }

        .category {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 9px;
        }

        .product-name {
            margin: 0 0 7px;
            font-size: 17px;
            color: #111827;
            line-height: 1.35;
        }

        .product-description {
            color: #6b7280;
            font-size: 12px;
            line-height: 1.5;
            min-height: 36px;
            margin-bottom: 10px;

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .price {
            font-size: 19px;
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 12px;
        }

        .product-meta {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 13px;
        }

        .meta-item {
            color: #6b7280;
            font-size: 12px;
        }

        .meta-item strong {
            color: #374151;
        }

        /* =========================
           CONDITION BADGE
        ========================= */

        .condition {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 5px;
            background: #f3f4f6;
            color: #4b5563;
            font-size: 11px;
            font-weight: bold;
        }

        /* =========================
           BUTTON
        ========================= */

        .product-actions {
            display: flex;
            gap: 7px;
        }

        .btn-detail {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 9px 10px;
            border-radius: 7px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-detail:hover {
            background: #dbeafe;
        }

        .btn-buy {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 9px 10px;
            border-radius: 7px;
            background: #2563eb;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-buy:hover {
            background: #1d4ed8;
        }

        .btn-sold {
            flex: 1;
            text-align: center;
            padding: 9px 10px;
            border-radius: 7px;
            background: #f3f4f6;
            color: #9ca3af;
            font-size: 12px;
            font-weight: bold;
            cursor: not-allowed;
        }

        /* =========================
           SELLER ACTION
        ========================= */

        .seller-actions {
            display: flex;
            gap: 7px;
            margin-top: 8px;
        }

        .btn-edit {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 8px;
            border-radius: 7px;
            background: #fef3c7;
            color: #92400e;
            font-size: 11px;
            font-weight: bold;
        }

        .btn-edit:hover {
            background: #fde68a;
        }

        .btn-delete {
            flex: 1;
            border: none;
            padding: 8px;
            border-radius: 7px;
            background: #fee2e2;
            color: #dc2626;
            font-size: 11px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-delete:hover {
            background: #fecaca;
        }

        /* =========================
           OWNER LABEL
        ========================= */

        .owner-label {
            margin-top: 10px;
            padding: 7px 9px;
            border-radius: 7px;
            background: #f3f4f6;
            color: #6b7280;
            font-size: 11px;
            text-align: center;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 55px 20px;
            text-align: center;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 12px;
        }

        .empty h3 {
            margin: 0 0 8px;
            color: #374151;
            font-size: 20px;
        }

        .empty p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }

        .btn-empty {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 17px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        .btn-empty:hover {
            background: #1d4ed8;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .filter-form {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 800px) {
            .header {
                padding: 15px 20px;
            }

            .header-content {
                flex-wrap: wrap;
            }

            .nav {
                order: 3;
                width: 100%;
                justify-content: flex-start;
                overflow-x: auto;
            }

            .user-info {
                display: none;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .filter-form {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {
            .container {
                padding: 25px 15px 50px;
            }

            .logo {
                font-size: 21px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .filter-form {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 230px;
            }

            .auth-buttons {
                display: none;
            }

            .product-header {
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="header-content">

        {{-- LOGO --}}
        <a href="{{ route('products.index') }}" class="logo">
            Campus<span>Market</span>
        </a>

        {{-- NAVIGATION --}}
        <nav class="nav">

            <a href="{{ route('products.index') }}" class="active">
                Produk
            </a>

            @auth
                <a href="{{ route('transactions.index') }}">
                    @if(auth()->user()->role === 'penjual')
                        Produk Terjual
                    @else
                        Produk Dibeli
                    @endif
                </a>
            @endauth

            @if(auth()->check() && auth()->user()->role === 'penjual')
                <a href="{{ route('products.create') }}">
                    Tambah Produk
                </a>
            @endif

        </nav>

        {{-- USER --}}
        @auth

            <div class="user-area">

                <div class="user-info">
                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        {{ ucfirst(auth()->user()->role) }}
                    </span>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout">
                        Logout
                    </button>
                </form>

            </div>

        @else

            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn-login">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn-register">
                    Register
                </a>
            </div>

        @endauth

    </div>
</header>


<div class="container">

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success">
            <strong>✓ Berhasil</strong>
            <br>
            {{ session('success') }}
        </div>
    @endif


    {{-- ALERT ERROR --}}
    @if(session('error'))
        <div class="alert alert-error">
            <strong>✕ Terjadi Kesalahan</strong>
            <br>
            {{ session('error') }}
        </div>
    @endif


    {{-- PAGE HEADER --}}
    <div class="page-header">

        <div>
            <h1>Marketplace CampusMarket</h1>

            <p>
                Temukan berbagai produk preloved dari mahasiswa.
            </p>
        </div>

        @auth
            @if(auth()->user()->role === 'penjual')
                <a
                    href="{{ route('products.create') }}"
                    class="btn-add"
                >
                    + Tambah Produk
                </a>
            @endif
        @endauth

    </div>


    {{-- SEARCH & FILTER --}}
    <div class="filter-card">

        <h3 class="filter-title">
            🔎 Cari & Filter Produk
        </h3>

        <form
            action="{{ route('products.index') }}"
            method="GET"
            class="filter-form"
        >

            {{-- SEARCH --}}
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Cari nama produk..."
                value="{{ request('search') }}"
            >


            {{-- CATEGORY --}}
            <select
                name="category_id"
                class="form-control"
            >
                <option value="">
                    Semua Kategori
                </option>

                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ request('category_id') == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>


            {{-- CONDITION --}}
            <select
                name="condition"
                class="form-control"
            >
                <option value="">
                    Semua Kondisi
                </option>

                <option
                    value="baru"
                    {{ request('condition') == 'baru' ? 'selected' : '' }}
                >
                    Baru
                </option>

                <option
                    value="seperti baru"
                    {{ request('condition') == 'seperti baru' ? 'selected' : '' }}
                >
                    Seperti Baru
                </option>

                <option
                    value="bekas"
                    {{ request('condition') == 'bekas' ? 'selected' : '' }}
                >
                    Bekas
                </option>
            </select>


            {{-- LOCATION --}}
            <input
                type="text"
                name="location"
                class="form-control"
                placeholder="Lokasi..."
                value="{{ request('location') }}"
            >


            {{-- TRANSACTION TYPE --}}
            <select
                name="transaction_type"
                class="form-control"
            >
                <option value="">
                    Semua Transaksi
                </option>

                <option
                    value="COD"
                    {{ request('transaction_type') == 'COD' ? 'selected' : '' }}
                >
                    COD
                </option>

                <option
                    value="Transfer"
                    {{ request('transaction_type') == 'Transfer' ? 'selected' : '' }}
                >
                    Transfer
                </option>
            </select>


            {{-- BUTTON --}}
            <button
                type="submit"
                class="btn-filter"
            >
                Cari
            </button>

        </form>


        {{-- RESET --}}
        @if(request()->hasAny([
            'search',
            'category_id',
            'condition',
            'location',
            'transaction_type'
        ]))

            <div style="margin-top: 12px;">

                <a
                    href="{{ route('products.index') }}"
                    class="btn-reset"
                >
                    Reset Filter
                </a>

            </div>

        @endif

    </div>


    {{-- PRODUCT HEADER --}}
    <div class="product-header">

        <h2>
            Daftar Produk
        </h2>

        <span class="product-count">
            {{ $products->count() }} Produk
        </span>

    </div>


    {{-- PRODUCT LIST --}}
    @if($products->count() > 0)

        <div class="product-grid">

            @foreach($products as $product)

                <div class="product-card">

                    {{-- IMAGE --}}
                    <div class="product-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                            >

                        @else

                            <span class="no-image">
                                Tidak ada foto
                            </span>

                        @endif


                        {{-- STATUS --}}
                        @if($product->status === 'active')

                            <span class="status-badge status-active">
                                Tersedia
                            </span>

                        @else

                            <span class="status-badge status-sold">
                                Terjual
                            </span>

                        @endif

                    </div>


                    {{-- BODY --}}
                    <div class="product-body">

                        {{-- CATEGORY --}}
                        <span class="category">
                            {{ $product->category->name ?? 'Tanpa Kategori' }}
                        </span>


                        {{-- NAME --}}
                        <h3 class="product-name">
                            {{ $product->name }}
                        </h3>


                        {{-- DESCRIPTION --}}
                        <p class="product-description">
                            {{ $product->description ?: 'Tidak ada deskripsi produk.' }}
                        </p>


                        {{-- PRICE --}}
                        <div class="price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>


                        {{-- META --}}
                        <div class="product-meta">

                            <div class="meta-item">
                                📍
                                <strong>Lokasi:</strong>
                                {{ $product->location }}
                            </div>

                            <div class="meta-item">
                                📦
                                <strong>Kondisi:</strong>

                                <span class="condition">
                                    {{ $product->condition }}
                                </span>
                            </div>

                            <div class="meta-item">
                                💳
                                <strong>Transaksi:</strong>
                                {{ $product->transaction_type }}
                            </div>

                        </div>


                        {{-- ACTION --}}
                        <div class="product-actions">

                            {{-- DETAIL --}}
                            <a
                                href="{{ route('products.show', $product->id) }}"
                                class="btn-detail"
                            >
                                Lihat Detail
                            </a>


                            {{-- BUY --}}
                            @auth

                                @if(
                                    auth()->user()->role === 'pembeli'
                                    &&
                                    (int) $product->user_id !== (int) auth()->id()
                                )

                                    @if($product->status === 'active')

                                        <a
                                            href="{{ route('transactions.create', $product->id) }}"
                                            class="btn-buy"
                                        >
                                            Beli
                                        </a>

                                    @else

                                        <span class="btn-sold">
                                            Sudah Terjual
                                        </span>

                                    @endif

                                @endif

                            @else

                                @if($product->status === 'active')

                                    <a
                                        href="{{ route('login') }}"
                                        class="btn-buy"
                                    >
                                        Login untuk Beli
                                    </a>

                                @else

                                    <span class="btn-sold">
                                        Sudah Terjual
                                    </span>

                                @endif

                            @endauth

                        </div>


                        {{-- SELLER ACTION --}}
                        @auth

                            @if(
                                auth()->user()->role === 'penjual'
                                &&
                                (int) $product->user_id === (int) auth()->id()
                            )

                                <div class="owner-label">
                                    Produk milik kamu
                                </div>

                                <div class="seller-actions">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('products.edit', $product->id) }}"
                                        class="btn-edit"
                                    >
                                        Edit
                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route('products.destroy', $product->id) }}"
                                        method="POST"
                                        style="flex: 1;"
                                        onsubmit="return confirm('Apakah kamu yakin ingin menghapus produk ini?');"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-delete"
                                            style="width: 100%;"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            @endif

                        @endauth

                    </div>

                </div>

            @endforeach

        </div>

    @else

        {{-- EMPTY --}}
        <div class="empty">

            <div class="empty-icon">
                🔍
            </div>

            <h3>
                Produk Tidak Ditemukan
            </h3>

            <p>
                Belum ada produk yang sesuai dengan pencarian atau filter kamu.
            </p>

            @if(request()->hasAny([
                'search',
                'category_id',
                'condition',
                'location',
                'transaction_type'
            ]))

                <a
                    href="{{ route('products.index') }}"
                    class="btn-empty"
                >
                    Lihat Semua Produk
                </a>

            @endif

        </div>

    @endif

</div>

</body>
</html>