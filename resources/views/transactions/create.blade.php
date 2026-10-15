<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Konfirmasi Pembelian - CampusMarket</title>


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

            padding: 18px 50px;
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

            padding: 10px 17px;

            border-radius: 8px;

            font-weight: bold;

            cursor: pointer;
        }


        .logout:hover {
            background: #fecaca;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {
            max-width: 900px;

            margin: 0 auto;

            padding: 35px 20px 60px;
        }


        /* =====================================================
           BACK
        ===================================================== */

        .back {
            display: inline-block;

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
           TITLE
        ===================================================== */

        .page-title {
            margin-bottom: 25px;
        }


        .page-title h1 {
            margin: 0 0 8px;

            font-size: 30px;

            color: #111827;
        }


        .page-title p {
            margin: 0;

            color: #6b7280;

            font-size: 14px;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .checkout-card {
            background: white;

            border-radius: 18px;

            padding: 30px;

            box-shadow:
                0 5px 25px
                rgba(0, 0, 0, 0.06);

            border:
                1px solid #eef0f3;
        }


        /* =====================================================
           PRODUCT
        ===================================================== */

        .product-section {
            display: grid;

            grid-template-columns: 230px 1fr;

            gap: 25px;

            padding-bottom: 25px;

            border-bottom:
                1px solid #e5e7eb;
        }


        .product-image {
            width: 230px;

            height: 230px;

            object-fit: contain;

            background: #f3f4f6;

            border-radius: 12px;
        }


        .no-image {
            width: 230px;

            height: 230px;

            background: #f3f4f6;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #9ca3af;

            font-size: 14px;

            text-align: center;
        }


        .product-info {
            padding-top: 5px;
        }


        .category {
            display: inline-block;

            padding: 6px 11px;

            background: #eff6ff;

            color: #2563eb;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 12px;
        }


        .product-info h2 {
            margin: 0 0 12px;

            font-size: 25px;

            color: #111827;
        }


        .price {
            font-size: 25px;

            font-weight: bold;

            color: #2563eb;

            margin-bottom: 20px;
        }


        .info-row {
            display: flex;

            justify-content: space-between;

            gap: 20px;

            padding: 9px 0;

            border-bottom:
                1px solid #f3f4f6;

            font-size: 14px;
        }


        .info-row:last-child {
            border-bottom: none;
        }


        .info-label {
            color: #6b7280;
        }


        .info-value {
            font-weight: 600;

            text-align: right;

            color: #111827;
        }


        /* =====================================================
           PAYMENT INFO
        ===================================================== */

        .payment-section {
            padding: 25px 0;
        }


        .section-title {
            margin: 0 0 15px;

            font-size: 18px;

            color: #111827;
        }


        .payment-box {
            background: #f8fafc;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            padding: 18px;
        }


        .payment-row {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 10px 0;

            font-size: 14px;
        }


        .payment-row.total {
            margin-top: 10px;

            padding-top: 18px;

            border-top:
                1px solid #d1d5db;

            font-size: 18px;

            font-weight: bold;
        }


        .total-price {
            color: #2563eb;

            font-size: 21px;
        }


        /* =====================================================
           NOTICE
        ===================================================== */

        .notice {
            display: flex;

            gap: 12px;

            background: #eff6ff;

            border:
                1px solid #dbeafe;

            color: #1e40af;

            padding: 15px;

            border-radius: 10px;

            font-size: 13px;

            line-height: 1.6;

            margin-bottom: 25px;
        }


        .notice-icon {
            font-size: 18px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .actions {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px;
        }


        .btn {
            display: flex;

            align-items: center;

            justify-content: center;

            padding: 14px 20px;

            border-radius: 10px;

            text-decoration: none;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            border: none;
        }


        .btn-cancel {
            background: #f3f4f6;

            color: #374151;

            border:
                1px solid #e5e7eb;
        }


        .btn-cancel:hover {
            background: #e5e7eb;
        }


        .btn-pay {
            background: #2563eb;

            color: white;
        }


        .btn-pay:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            margin-top: 30px;

            color: #9ca3af;

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 700px) {

            .header {
                padding:
                    15px 20px;
            }


            .container {
                padding:
                    25px 15px 50px;
            }


            .checkout-card {
                padding: 20px;
            }


            .product-section {
                grid-template-columns: 1fr;
            }


            .product-image,
            .no-image {
                width: 100%;

                height: 300px;
            }


            .product-info h2 {
                font-size: 22px;
            }


            .actions {
                grid-template-columns: 1fr;
            }


            .user-info {
                display: none;
            }

        }


        @media (max-width: 450px) {

            .page-title h1 {
                font-size: 25px;
            }


            .product-image,
            .no-image {
                height: 250px;
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


        <div class="logo">

            Campus<span>Market</span>

        </div>


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

        @endauth


    </div>

</header>



{{-- =========================================================
     MAIN
========================================================= --}}

<div class="container">


    {{-- KEMBALI --}}

    <a
        href="{{ route('products.show', $product->id) }}"
        class="back"
    >
        ← Kembali ke Detail Produk
    </a>



    {{-- =====================================================
         JUDUL
    ===================================================== --}}

    <div class="page-title">

        <h1>
            Konfirmasi Pembelian
        </h1>

        <p>
            Periksa kembali produk dan total pembayaran sebelum
            melakukan pembelian.
        </p>

    </div>



    {{-- =====================================================
         CHECKOUT CARD
    ===================================================== --}}

    <div class="checkout-card">


        {{-- =================================================
             PRODUK
        ================================================== --}}

        <div class="product-section">


            {{-- GAMBAR --}}

            <div>

                @if($product->image)

                    <img
                        src="{{ asset(
                            'storage/' . $product->image
                        ) }}"
                        alt="{{ $product->name }}"
                        class="product-image"
                    >

                @else

                    <div class="no-image">

                        Tidak ada gambar produk

                    </div>

                @endif

            </div>



            {{-- INFORMASI --}}

            <div class="product-info">


                <div class="category">

                    {{ $product->category->name ?? 'Tanpa Kategori' }}

                </div>


                <h2>

                    {{ $product->name }}

                </h2>


                <div class="price">

                    Rp {{ number_format(
                        $product->price,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Kondisi
                    </span>

                    <span class="info-value">
                        {{ $product->condition }}
                    </span>

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Lokasi
                    </span>

                    <span class="info-value">
                        {{ $product->location }}
                    </span>

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Penjual
                    </span>

                    <span class="info-value">

                        {{ $product->user->name ?? 'Penjual' }}

                    </span>

                </div>


                <div class="info-row">

                    <span class="info-label">
                        Status
                    </span>

                    <span class="info-value">
                        Tersedia
                    </span>

                </div>


            </div>

        </div>



        {{-- =================================================
             PAYMENT
        ================================================== --}}

        <div class="payment-section">


            <h3 class="section-title">

                Ringkasan Pembayaran

            </h3>


            <div class="payment-box">


                <div class="payment-row">

                    <span>
                        Harga Produk
                    </span>

                    <strong>

                        Rp {{ number_format(
                            $product->price,
                            0,
                            ',',
                            '.'
                        ) }}

                    </strong>

                </div>


                <div class="payment-row">

                    <span>
                        Jumlah Produk
                    </span>

                    <strong>
                        1 Barang
                    </strong>

                </div>


                <div class="payment-row">

                    <span>
                        Biaya Tambahan
                    </span>

                    <strong>
                        Rp 0
                    </strong>

                </div>


                <div class="payment-row total">

                    <span>
                        Total Pembayaran
                    </span>

                    <span class="total-price">

                        Rp {{ number_format(
                            $product->price,
                            0,
                            ',',
                            '.'
                        ) }}

                    </span>

                </div>


            </div>

        </div>



        {{-- =================================================
             NOTICE
        ================================================== --}}

        <div class="notice">

            <div class="notice-icon">
                ℹ️
            </div>

            <div>

                Produk ini merupakan barang preloved dan hanya
                tersedia <strong>1 unit</strong>.

                Setelah kamu menekan tombol
                <strong>Konfirmasi & Bayar</strong>,
                produk akan langsung ditandai sebagai
                <strong>terjual</strong> dan tidak dapat dibeli
                oleh pembeli lain.

            </div>

        </div>



        {{-- =================================================
             BUTTON
        ================================================== --}}

        <div class="actions">


            {{-- BATAL --}}

            <a
                href="{{ route(
                    'products.show',
                    $product->id
                ) }}"
                class="btn btn-cancel"
            >

                ← Kembali

            </a>



            {{-- BAYAR --}}

            <form
                action="{{ route('transactions.store') }}"
                method="POST"
            >

                @csrf


                <input
                    type="hidden"
                    name="product_id"
                    value="{{ $product->id }}"
                >


                <button
                    type="submit"
                    class="btn btn-pay"
                    style="width: 100%;"
                    onclick="return confirm(
                        'Apakah kamu yakin ingin membeli produk ini?'
                    );"
                >

                    ✓ Konfirmasi & Bayar

                </button>

            </form>


        </div>


    </div>



    {{-- =====================================================
         FOOTER
    ===================================================== --}}

    <div class="footer">

        CampusMarket © {{ date('Y') }}

        <br>

        Marketplace khusus mahasiswa.

    </div>


</div>


</body>

</html>