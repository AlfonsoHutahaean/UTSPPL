<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Transaksi - CampusMarket</title>


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
            max-width: 1100px;

            margin: 0 auto;

            padding:
                35px 20px 60px;
        }


        /* =====================================================
           TOP
        ===================================================== */

        .top-section {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 25px;
        }


        .title h1 {
            margin: 0 0 7px;

            font-size: 30px;

            color: #111827;
        }


        .title p {
            margin: 0;

            color: #6b7280;

            font-size: 14px;
        }


        .btn-marketplace {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding:
                11px 17px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 9px;

            font-size: 14px;

            font-weight: bold;

            white-space: nowrap;
        }


        .btn-marketplace:hover {
            background: #1d4ed8;
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
           SUMMARY
        ===================================================== */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;

            margin-bottom: 25px;
        }


        .summary-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 12px;

            padding: 18px;

            box-shadow:
                0 3px 12px
                rgba(0, 0, 0, 0.04);
        }


        .summary-label {
            font-size: 12px;

            color: #6b7280;

            margin-bottom: 7px;
        }


        .summary-value {
            font-size: 23px;

            font-weight: bold;

            color: #111827;
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {
            margin-top: 25px;
        }


        .section-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 15px;
        }


        .section-header h2 {
            margin: 0;

            font-size: 20px;

            color: #111827;
        }


        .section-header span {
            font-size: 13px;

            color: #6b7280;
        }


        /* =====================================================
           TRANSACTION CARD
        ===================================================== */

        .transaction-list {
            display: flex;

            flex-direction: column;

            gap: 15px;
        }


        .transaction-card {
            background: white;

            border:
                1px solid #e5e7eb;

            border-radius: 14px;

            padding: 18px;

            display: grid;

            grid-template-columns:
                120px
                1fr
                auto;

            gap: 20px;

            align-items: center;

            box-shadow:
                0 3px 12px
                rgba(0, 0, 0, 0.04);
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .product-image {
            width: 120px;

            height: 120px;

            border-radius: 10px;

            object-fit: contain;

            background: #f3f4f6;
        }


        .no-image {
            width: 120px;

            height: 120px;

            border-radius: 10px;

            background: #f3f4f6;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: #9ca3af;

            font-size: 12px;
        }


        /* =====================================================
           PRODUCT INFO
        ===================================================== */

        .product-name {
            margin: 0 0 8px;

            font-size: 18px;

            font-weight: bold;

            color: #111827;
        }


        .product-name a {
            color: inherit;

            text-decoration: none;
        }


        .product-name a:hover {
            color: #2563eb;
        }


        .product-price {
            font-size: 18px;

            font-weight: bold;

            color: #2563eb;

            margin-bottom: 10px;
        }


        .detail {
            display: flex;

            flex-wrap: wrap;

            gap: 8px 18px;

            font-size: 13px;

            color: #6b7280;

            margin-bottom: 10px;
        }


        .detail strong {
            color: #374151;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 6px;

            width: fit-content;

            padding:
                6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: bold;
        }


        .status-completed {
            background: #dcfce7;

            color: #166534;
        }


        .status-paid {
            background: #dbeafe;

            color: #1e40af;
        }


        .status-confirmed {
            background: #fef3c7;

            color: #92400e;
        }


        .status-cancelled {
            background: #fee2e2;

            color: #991b1b;
        }


        .status-default {
            background: #f3f4f6;

            color: #374151;
        }


        /* =====================================================
           RIGHT SIDE
        ===================================================== */

        .transaction-right {
            min-width: 150px;

            text-align: right;
        }


        .transaction-date {
            font-size: 12px;

            color: #9ca3af;

            margin-bottom: 12px;
        }


        .btn-detail {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding:
                9px 14px;

            border:
                1px solid #dbeafe;

            border-radius: 8px;

            background: #eff6ff;

            color: #2563eb;

            text-decoration: none;

            font-size: 12px;

            font-weight: bold;
        }


        .btn-detail:hover {
            background: #dbeafe;
        }


        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .empty {
            background: white;

            border:
                1px dashed #d1d5db;

            border-radius: 14px;

            padding: 50px 25px;

            text-align: center;
        }


        .empty-icon {
            font-size: 45px;

            margin-bottom: 12px;
        }


        .empty h3 {
            margin:
                0 0 8px;

            color: #374151;

            font-size: 18px;
        }


        .empty p {
            margin:
                0 auto 20px;

            max-width: 450px;

            color: #9ca3af;

            font-size: 13px;

            line-height: 1.6;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            margin-top: 35px;

            color: #9ca3af;

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 800px) {

            .header {
                padding:
                    15px 20px;
            }


            .summary {
                grid-template-columns: 1fr;
            }


            .transaction-card {
                grid-template-columns:
                    100px
                    1fr;
            }


            .product-image,
            .no-image {
                width: 100px;

                height: 100px;
            }


            .transaction-right {
                grid-column:
                    1 / -1;

                min-width: 0;

                text-align: left;

                display: flex;

                align-items: center;

                justify-content: space-between;

                gap: 15px;

                border-top:
                    1px solid #f3f4f6;

                padding-top: 15px;
            }

        }


        @media (max-width: 550px) {

            .container {
                padding:
                    25px 15px 50px;
            }


            .top-section {
                flex-direction: column;

                align-items: flex-start;
            }


            .btn-marketplace {
                width: 100%;
            }


            .title h1 {
                font-size: 25px;
            }


            .transaction-card {
                grid-template-columns: 1fr;

                gap: 15px;
            }


            .product-image,
            .no-image {
                width: 100%;

                height: 220px;
            }


            .transaction-right {
                grid-column: auto;

                flex-direction: column;

                align-items: flex-start;
            }


            .btn-detail {
                width: 100%;
            }


            .user-info {
                display: none;
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


    {{-- =====================================================
         TOP
    ====================================================== --}}

    <div class="top-section">

        <div class="title">

            @if(auth()->user()->role === 'penjual')

                <h1>
                    Produk Terjual
                </h1>

                <p>
                    Daftar produk kamu yang sudah dibeli oleh pembeli.
                </p>

            @else

                <h1>
                    Produk yang Dibeli
                </h1>

                <p>
                    Daftar barang yang sudah kamu beli di CampusMarket.
                </p>

            @endif

        </div>


        <a
            href="{{ route('products.index') }}"
            class="btn-marketplace"
        >

            ← Kembali ke Marketplace

        </a>

    </div>



    {{-- =====================================================
         SUCCESS ALERT
    ====================================================== --}}

    @if(session('success'))

        <div class="alert alert-success">

            <strong>
                ✓ Pembayaran Berhasil
            </strong>

            <br>

            {{ session('success') }}

        </div>

    @endif



    {{-- =====================================================
         ERROR ALERT
    ====================================================== --}}

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
         PEMBELI
    ====================================================== --}}

    @if(auth()->user()->role === 'pembeli')


        {{-- SUMMARY --}}

        <div class="summary">


            <div class="summary-card">

                <div class="summary-label">
                    Total Pembelian
                </div>

                <div class="summary-value">

                    {{ $transactions->count() }}

                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Total Pengeluaran
                </div>

                <div class="summary-value">

                    Rp {{ number_format(
                        $transactions->sum('total_price'),
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Barang Berhasil Dibeli
                </div>

                <div class="summary-value">

                    {{ $transactions->whereIn(
                        'status',
                        ['paid', 'confirmed', 'completed']
                    )->count() }}

                </div>

            </div>


        </div>



        {{-- SECTION --}}

        <div class="section">

            <div class="section-header">

                <h2>
                    Riwayat Pembelian
                </h2>

                <span>
                    {{ $transactions->count() }} transaksi
                </span>

            </div>



            @if($transactions->count() > 0)

                <div class="transaction-list">


                    @foreach($transactions as $transaction)

                        <div class="transaction-card">


                            {{-- GAMBAR PRODUK --}}

                            <div>

                                @if(
                                    $transaction->product &&
                                    $transaction->product->image
                                )

                                    <img
                                        src="{{ asset(
                                            'storage/' .
                                            $transaction->product->image
                                        ) }}"
                                        alt="{{ $transaction->product->name }}"
                                        class="product-image"
                                    >

                                @else

                                    <div class="no-image">

                                        Tidak ada gambar

                                    </div>

                                @endif

                            </div>



                            {{-- INFORMASI --}}

                            <div>


                                @if($transaction->product)

                                    <h3 class="product-name">

                                        <a
                                            href="{{ route(
                                                'products.show',
                                                $transaction->product->id
                                            ) }}"
                                        >

                                            {{ $transaction->product->name }}

                                        </a>

                                    </h3>

                                @else

                                    <h3 class="product-name">

                                        Produk tidak tersedia

                                    </h3>

                                @endif



                                <div class="product-price">

                                    Rp {{ number_format(
                                        $transaction->total_price,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </div>



                                <div class="detail">

                                    <span>

                                        Penjual:

                                        <strong>

                                            {{ $transaction->seller->name ?? '-' }}

                                        </strong>

                                    </span>


                                    @if($transaction->product)

                                        <span>

                                            Kondisi:

                                            <strong>

                                                {{ $transaction->product->condition }}

                                            </strong>

                                        </span>

                                    @endif

                                </div>



                                {{-- STATUS --}}

                                @if($transaction->status === 'completed')

                                    <div class="status status-completed">

                                        ✓ Pembelian Berhasil

                                    </div>

                                @elseif($transaction->status === 'paid')

                                    <div class="status status-paid">

                                        ✓ Sudah Dibayar

                                    </div>

                                @elseif($transaction->status === 'confirmed')

                                    <div class="status status-confirmed">

                                        ✓ Dikonfirmasi

                                    </div>

                                @elseif($transaction->status === 'cancelled')

                                    <div class="status status-cancelled">

                                        ✕ Dibatalkan

                                    </div>

                                @else

                                    <div class="status status-default">

                                        {{ ucfirst(
                                            $transaction->status
                                        ) }}

                                    </div>

                                @endif


                            </div>



                            {{-- KANAN --}}

                            <div class="transaction-right">

                                <div>

                                    <div class="transaction-date">

                                        {{ $transaction->created_at
                                            ? $transaction->created_at->format(
                                                'd M Y, H:i'
                                            )
                                            : '-'
                                        }}

                                    </div>


                                    @if($transaction->product)

                                        <a
                                            href="{{ route(
                                                'products.show',
                                                $transaction->product->id
                                            ) }}"
                                            class="btn-detail"
                                        >

                                            Lihat Produk

                                        </a>

                                    @endif

                                </div>

                            </div>


                        </div>

                    @endforeach


                </div>

            @else


                {{-- EMPTY PEMBELI --}}

                <div class="empty">

                    <div class="empty-icon">
                        🛍️
                    </div>

                    <h3>
                        Belum Ada Pembelian
                    </h3>

                    <p>
                        Kamu belum membeli produk apa pun.
                        Silakan cari produk preloved yang kamu
                        butuhkan di marketplace.
                    </p>

                    <a
                        href="{{ route('products.index') }}"
                        class="btn-marketplace"
                    >

                        Cari Produk

                    </a>

                </div>

            @endif

        </div>


    {{-- =====================================================
         PENJUAL
    ====================================================== --}}

    @elseif(auth()->user()->role === 'penjual')


        {{-- SUMMARY --}}

        <div class="summary">


            <div class="summary-card">

                <div class="summary-label">
                    Total Produk Terjual
                </div>

                <div class="summary-value">

                    {{ $soldTransactions->count() }}

                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Total Penjualan
                </div>

                <div class="summary-value">

                    Rp {{ number_format(
                        $soldTransactions->sum('total_price'),
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            <div class="summary-card">

                <div class="summary-label">
                    Transaksi Berhasil
                </div>

                <div class="summary-value">

                    {{ $soldTransactions->whereIn(
                        'status',
                        ['paid', 'confirmed', 'completed']
                    )->count() }}

                </div>

            </div>


        </div>



        {{-- SECTION --}}

        <div class="section">

            <div class="section-header">

                <h2>
                    Daftar Produk Terjual
                </h2>

                <span>
                    {{ $soldTransactions->count() }} transaksi
                </span>

            </div>



            @if($soldTransactions->count() > 0)

                <div class="transaction-list">


                    @foreach($soldTransactions as $transaction)

                        <div class="transaction-card">


                            {{-- GAMBAR --}}

                            <div>

                                @if(
                                    $transaction->product &&
                                    $transaction->product->image
                                )

                                    <img
                                        src="{{ asset(
                                            'storage/' .
                                            $transaction->product->image
                                        ) }}"
                                        alt="{{ $transaction->product->name }}"
                                        class="product-image"
                                    >

                                @else

                                    <div class="no-image">

                                        Tidak ada gambar

                                    </div>

                                @endif

                            </div>



                            {{-- INFORMASI --}}

                            <div>


                                @if($transaction->product)

                                    <h3 class="product-name">

                                        <a
                                            href="{{ route(
                                                'products.show',
                                                $transaction->product->id
                                            ) }}"
                                        >

                                            {{ $transaction->product->name }}

                                        </a>

                                    </h3>

                                @else

                                    <h3 class="product-name">

                                        Produk tidak tersedia

                                    </h3>

                                @endif



                                <div class="product-price">

                                    Rp {{ number_format(
                                        $transaction->total_price,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </div>



                                <div class="detail">

                                    <span>

                                        Pembeli:

                                        <strong>

                                            {{ $transaction->buyer->name ?? '-' }}

                                        </strong>

                                    </span>


                                    @if($transaction->product)

                                        <span>

                                            Lokasi:

                                            <strong>

                                                {{ $transaction->product->location }}

                                            </strong>

                                        </span>

                                    @endif

                                </div>



                                {{-- STATUS --}}

                                @if($transaction->status === 'completed')

                                    <div class="status status-completed">

                                        ✓ Produk Terjual

                                    </div>

                                @elseif($transaction->status === 'paid')

                                    <div class="status status-paid">

                                        ✓ Sudah Dibayar

                                    </div>

                                @elseif($transaction->status === 'confirmed')

                                    <div class="status status-confirmed">

                                        ✓ Dikonfirmasi

                                    </div>

                                @elseif($transaction->status === 'cancelled')

                                    <div class="status status-cancelled">

                                        ✕ Dibatalkan

                                    </div>

                                @else

                                    <div class="status status-default">

                                        {{ ucfirst(
                                            $transaction->status
                                        ) }}

                                    </div>

                                @endif


                            </div>



                            {{-- KANAN --}}

                            <div class="transaction-right">

                                <div>

                                    <div class="transaction-date">

                                        {{ $transaction->created_at
                                            ? $transaction->created_at->format(
                                                'd M Y, H:i'
                                            )
                                            : '-'
                                        }}

                                    </div>


                                    @if($transaction->product)

                                        <a
                                            href="{{ route(
                                                'products.show',
                                                $transaction->product->id
                                            ) }}"
                                            class="btn-detail"
                                        >

                                            Lihat Produk

                                        </a>

                                    @endif

                                </div>

                            </div>


                        </div>

                    @endforeach


                </div>

            @else


                {{-- EMPTY PENJUAL --}}

                <div class="empty">

                    <div class="empty-icon">
                        📦
                    </div>

                    <h3>
                        Belum Ada Produk Terjual
                    </h3>

                    <p>
                        Belum ada pembeli yang membeli produk
                        kamu. Produk yang berhasil dibeli akan
                        muncul di halaman ini.
                    </p>

                    <a
                        href="{{ route('products.index') }}"
                        class="btn-marketplace"
                    >

                        Lihat Produk

                    </a>

                </div>

            @endif

        </div>


    @endif



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <div class="footer">

        CampusMarket © {{ date('Y') }}

        <br>

        Marketplace khusus mahasiswa.

    </div>


</div>


</body>

</html>