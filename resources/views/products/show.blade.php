<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $product->name }} - CampusMarket
    </title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f5f7fb;

            color: #1f2937;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {
            background: white;

            border-bottom:
                1px solid #e5e7eb;

            padding:
                18px 50px;
        }


        .header-content {
            max-width: 1100px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .logo {
            font-size: 25px;

            font-weight: bold;

            color: #2563eb;
        }


        .logo span {
            color: #111827;
        }


        .user-area {
            display: flex;

            align-items: center;

            gap: 15px;
        }


        .user-info {
            text-align: right;
        }


        .user-info strong {
            display: block;

            font-size: 14px;
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

            padding:
                10px 17px;

            border-radius: 8px;

            font-weight: bold;

            cursor: pointer;
        }


        .logout:hover {
            background: #fecaca;
        }


        .auth-buttons {
            display: flex;

            gap: 10px;
        }


        .btn-login {
            display: inline-block;

            padding:
                10px 17px;

            border-radius: 8px;

            background: #eff6ff;

            color: #2563eb;

            text-decoration: none;

            font-weight: bold;

            font-size: 14px;
        }


        .btn-register {
            display: inline-block;

            padding:
                10px 17px;

            border-radius: 8px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            font-weight: bold;

            font-size: 14px;
        }


        .btn-login:hover {
            background: #dbeafe;
        }


        .btn-register:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {
            max-width: 1100px;

            margin:
                0 auto;

            padding:
                35px 20px 60px;
        }


        /* =====================================================
           BACK
        ===================================================== */

        .back {
            display: inline-flex;

            align-items: center;

            gap: 5px;

            margin-bottom: 25px;

            color: #2563eb;

            text-decoration: none;

            font-weight: bold;

            font-size: 14px;
        }


        .back:hover {
            text-decoration: underline;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            padding:
                15px 18px;

            border-radius: 10px;

            margin-bottom: 25px;

            font-size: 14px;

            line-height: 1.5;
        }


        .alert-success {
            background: #dcfce7;

            border:
                1px solid #bbf7d0;

            color: #166534;
        }


        .alert-error {
            background: #fee2e2;

            border:
                1px solid #fecaca;

            color: #991b1b;
        }


        /* =====================================================
           PRODUCT DETAIL
        ===================================================== */

        .product-detail {
            background: white;

            border-radius: 18px;

            padding: 30px;

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(0, 1fr);

            gap: 40px;

            box-shadow:
                0 5px 25px
                rgba(0, 0, 0, 0.06);

            border:
                1px solid #eef0f3;
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .image-wrapper {
            width: 100%;

            height: 500px;

            background: #f3f4f6;

            border-radius: 14px;

            overflow: hidden;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .product-image {
            width: 100%;

            height: 100%;

            object-fit: contain;
        }


        .no-image {
            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #9ca3af;

            font-size: 18px;
        }


        /* =====================================================
           PRODUCT INFO
        ===================================================== */

        .product-info {
            display: flex;

            flex-direction: column;
        }


        .category-badge {
            display: inline-block;

            width: fit-content;

            padding:
                7px 12px;

            background: #eff6ff;

            color: #2563eb;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 12px;
        }


        .product-info h1 {
            margin:
                0 0 12px;

            font-size: 32px;

            line-height: 1.25;

            color: #111827;
        }


        .price {
            font-size: 30px;

            font-weight: bold;

            color: #2563eb;

            margin-bottom: 25px;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status-box {
            display: flex;

            align-items: center;

            gap: 10px;

            padding:
                12px 15px;

            border-radius: 10px;

            margin-bottom: 22px;
        }


        .status-active {
            background: #dcfce7;

            color: #166534;
        }


        .status-sold {
            background: #fee2e2;

            color: #991b1b;
        }


        .status-dot {
            width: 9px;

            height: 9px;

            border-radius: 50%;

            background: currentColor;
        }


        .status-text {
            font-size: 14px;

            font-weight: bold;
        }


        /* =====================================================
           INFORMATION
        ===================================================== */

        .info-list {
            border-top:
                1px solid #e5e7eb;

            border-bottom:
                1px solid #e5e7eb;

            padding:
                8px 0;

            margin-bottom: 25px;
        }


        .info-row {
            display: flex;

            justify-content: space-between;

            gap: 20px;

            padding:
                12px 0;

            border-bottom:
                1px solid #f0f0f0;

            font-size: 14px;
        }


        .info-row:last-child {
            border-bottom: none;
        }


        .info-label {
            color: #6b7280;
        }


        .info-value {
            color: #111827;

            font-weight: 600;

            text-align: right;
        }


        .condition-badge {
            display: inline-block;

            padding:
                5px 10px;

            border-radius: 20px;

            background: #f3f4f6;

            color: #374151;

            font-size: 12px;
        }


        /* =====================================================
           SELLER
        ===================================================== */

        .seller-box {
            background: #f8fafc;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            padding:
                15px;

            margin-bottom: 25px;
        }


        .seller-title {
            font-size: 12px;

            color: #6b7280;

            margin-bottom: 7px;
        }


        .seller-name {
            font-size: 16px;

            font-weight: bold;

            color: #111827;
        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .description {
            margin-top: 5px;

            margin-bottom: 25px;
        }


        .description h3 {
            margin:
                0 0 10px;

            font-size: 18px;

            color: #111827;
        }


        .description p {
            margin: 0;

            color: #6b7280;

            line-height: 1.7;

            font-size: 14px;

            white-space: pre-line;
        }


        /* =====================================================
           BUY BUTTON
        ===================================================== */

        .buy-section {
            margin-top: auto;
        }


        .btn-buy {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding:
                15px 20px;

            border: none;

            border-radius: 10px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition:
                0.2s ease;
        }


        .btn-buy:hover {
            background: #1d4ed8;

            transform:
                translateY(-1px);
        }


        .btn-sold {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding:
                15px 20px;

            border-radius: 10px;

            background: #f3f4f6;

            color: #6b7280;

            font-size: 16px;

            font-weight: bold;

            border:
                1px solid #e5e7eb;
        }


        .btn-own {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            padding:
                15px 20px;

            border-radius: 10px;

            background: #eff6ff;

            color: #2563eb;

            font-size: 15px;

            font-weight: bold;

            border:
                1px solid #dbeafe;
        }


        .btn-login-buy {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            padding:
                15px 20px;

            border-radius: 10px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            font-size: 15px;

            font-weight: bold;
        }


        .btn-login-buy:hover {
            background: #1d4ed8;
        }


        .buy-note {
            text-align: center;

            margin-top: 10px;

            font-size: 12px;

            color: #9ca3af;

            line-height: 1.5;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            margin-top: 35px;

            color: #9ca3af;

            font-size: 12px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 850px) {

            .header {
                padding:
                    15px 20px;
            }


            .product-detail {
                grid-template-columns: 1fr;

                gap: 25px;
            }


            .image-wrapper {
                height: 400px;
            }


            .product-info h1 {
                font-size: 27px;
            }

        }


        @media (max-width: 550px) {

            .container {
                padding:
                    25px 15px 50px;
            }


            .user-info {
                display: none;
            }


            .product-detail {
                padding: 20px;

                border-radius: 14px;
            }


            .image-wrapper {
                height: 300px;
            }


            .product-info h1 {
                font-size: 24px;
            }


            .price {
                font-size: 25px;
            }


            .info-row {
                flex-direction: column;

                gap: 4px;
            }


            .info-value {
                text-align: left;
            }

        }

    </style>

</head>


<body>


{{-- =========================================================
     HEADER
========================================================= --}}

<header class="header">

    <div class="header-content">


        {{-- LOGO --}}

        <div class="logo">

            Campus<span>Market</span>

        </div>



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


                <form
                    action="{{ route('logout') }}"
                    method="POST"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout"
                    >
                        Logout
                    </button>

                </form>

            </div>

        @else

            <div class="auth-buttons">

                <a
                    href="{{ route('login') }}"
                    class="btn-login"
                >
                    Login
                </a>


                <a
                    href="{{ route('register') }}"
                    class="btn-register"
                >
                    Register
                </a>

            </div>

        @endauth


    </div>

</header>



{{-- =========================================================
     MAIN
========================================================= --}}

<div class="container">


    {{-- KEMBALI --}}

    <a
        href="{{ route('products.index') }}"
        class="back"
    >

        ← Kembali ke Produk

    </a>



    {{-- =====================================================
         ALERT SUCCESS
    ===================================================== --}}

    @if(session('success'))

        <div class="alert alert-success">

            <strong>
                ✓ Berhasil
            </strong>

            <br>

            {{ session('success') }}

        </div>

    @endif



    {{-- =====================================================
         ALERT ERROR
    ===================================================== --}}

    @if(session('error'))

        <div class="alert alert-error">

            <strong>
                ⚠ Perhatian
            </strong>

            <br>

            {{ session('error') }}

        </div>

    @endif



    {{-- =====================================================
         PRODUCT DETAIL
    ===================================================== --}}

    <div class="product-detail">


        {{-- =================================================
             GAMBAR
        ================================================== --}}

        <div class="image-wrapper">

            @if($product->image)

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="product-image"
                >

            @else

                <div class="no-image">

                    Tidak ada gambar produk

                </div>

            @endif

        </div>



        {{-- =================================================
             INFORMASI PRODUK
        ================================================== --}}

        <div class="product-info">


            {{-- KATEGORI --}}

            <div class="category-badge">

                {{ $product->category->name ?? 'Tanpa Kategori' }}

            </div>



            {{-- NAMA --}}

            <h1>

                {{ $product->name }}

            </h1>



            {{-- HARGA --}}

            <div class="price">

                Rp {{ number_format(
                    $product->price,
                    0,
                    ',',
                    '.'
                ) }}

            </div>



            {{-- =================================================
                 STATUS PRODUK
            ================================================== --}}

            @if($product->status === 'active')

                <div class="status-box status-active">

                    <span class="status-dot"></span>

                    <span class="status-text">
                        Produk Masih Tersedia
                    </span>

                </div>

            @else

                <div class="status-box status-sold">

                    <span class="status-dot"></span>

                    <span class="status-text">
                        Produk Sudah Terjual
                    </span>

                </div>

            @endif



            {{-- =================================================
                 DETAIL PRODUK
            ================================================== --}}

            <div class="info-list">


                {{-- KONDISI --}}

                <div class="info-row">

                    <span class="info-label">
                        Kondisi
                    </span>

                    <span class="info-value">

                        <span class="condition-badge">

                            {{ $product->condition }}

                        </span>

                    </span>

                </div>



                {{-- LOKASI --}}

                <div class="info-row">

                    <span class="info-label">
                        Lokasi
                    </span>

                    <span class="info-value">

                        {{ $product->location }}

                    </span>

                </div>



                {{-- KATEGORI --}}

                <div class="info-row">

                    <span class="info-label">
                        Kategori
                    </span>

                    <span class="info-value">

                        {{ $product->category->name ?? '-' }}

                    </span>

                </div>



                {{-- TRANSAKSI --}}

                <div class="info-row">

                    <span class="info-label">
                        Metode Transaksi
                    </span>

                    <span class="info-value">

                        {{ $product->transaction_type }}

                    </span>

                </div>



                {{-- STATUS --}}

                <div class="info-row">

                    <span class="info-label">
                        Status
                    </span>

                    <span class="info-value">

                        @if($product->status === 'active')

                            Tersedia

                        @else

                            Terjual

                        @endif

                    </span>

                </div>


            </div>



            {{-- =================================================
                 PENJUAL
            ================================================== --}}

            <div class="seller-box">

                <div class="seller-title">
                    Dijual oleh
                </div>

                <div class="seller-name">

                    {{ $product->user->name ?? 'Penjual CampusMarket' }}

                </div>

            </div>



            {{-- =================================================
                 DESKRIPSI
            ================================================== --}}

            <div class="description">

                <h3>
                    Deskripsi Produk
                </h3>

                <p>

                    {{ $product->description ?: 'Tidak ada deskripsi produk.' }}

                </p>

            </div>



            {{-- =================================================
                 BAGIAN PEMBELIAN
            ================================================== --}}

            <div class="buy-section">


                {{-- =================================================
                     PRODUK MASIH AKTIF
                ================================================== --}}

                @if($product->status === 'active')


                    {{-- =============================================
                         USER SUDAH LOGIN
                    ============================================== --}}

                    @auth


                        {{-- =========================================
                             PEMBELI
                        ========================================== --}}

                        @if(auth()->user()->role === 'pembeli')


                            {{-- -------------------------------------
                                 PEMBELI TIDAK BOLEH MEMBELI SENDIRI
                            -------------------------------------- --}}

                            @if(
                                (int) $product->user_id ===
                                (int) auth()->id()
                            )

                                <div class="btn-own">

                                    Produk ini milik kamu

                                </div>

                                <div class="buy-note">

                                    Kamu tidak dapat membeli produk
                                    milik sendiri.

                                </div>


                            @else

                                {{-- ---------------------------------
                                     TOMBOL BELI
                                ---------------------------------- --}}

                                <a
                                    href="{{ route(
                                        'transactions.create',
                                        $product->id
                                    ) }}"
                                    class="btn-buy"
                                >

                                    🛒 Beli Sekarang

                                </a>

                                <div class="buy-note">

                                    Produk ini hanya tersedia
                                    satu unit karena merupakan
                                    barang preloved.

                                </div>

                            @endif


                        {{-- =========================================
                             PENJUAL
                        ========================================== --}}

                        @elseif(auth()->user()->role === 'penjual')


                            @if(
                                (int) $product->user_id ===
                                (int) auth()->id()
                            )

                                <div class="btn-own">

                                    Produk Milik Anda

                                </div>

                                <div class="buy-note">

                                    Produk ini merupakan barang
                                    yang kamu jual.

                                </div>

                            @else

                                <div class="btn-own">

                                    Login sebagai Pembeli untuk membeli

                                </div>

                                <div class="buy-note">

                                    Akun penjual tidak dapat melakukan
                                    pembelian.

                                </div>

                            @endif


                        @endif


                    {{-- =============================================
                         USER BELUM LOGIN
                    ============================================== --}}

                    @else


                        <a
                            href="{{ route('login') }}"
                            class="btn-login-buy"
                        >

                            Login untuk Membeli

                        </a>

                        <div class="buy-note">

                            Silakan login sebagai pembeli untuk
                            melakukan pembelian.

                        </div>


                    @endauth



                {{-- =================================================
                     PRODUK SUDAH TERJUAL
                ================================================== --}}

                @else


                    <div class="btn-sold">

                        ✓ Produk Sudah Terjual

                    </div>


                    <div class="buy-note">

                        Produk ini sudah dibeli dan tidak dapat
                        dibeli kembali.

                    </div>


                @endif


            </div>


        </div>

    </div>



    {{-- =========================================================
         FOOTER
    ========================================================= --}}

    <div class="footer">

        CampusMarket © {{ date('Y') }}

        <br>

        Marketplace khusus mahasiswa.

    </div>


</div>


</body>
</html>