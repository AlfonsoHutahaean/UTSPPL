<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Produk - CampusMarket</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
        }

        .header-container {
            max-width: 1200px;
            margin: auto;
            padding: 18px 24px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            color: #2563eb;
        }

        .logo span {
            color: #111827;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            font-size: 14px;
            font-weight: 700;
            color: #111827;
        }

        .user-role {
            font-size: 12px;
            color: #6b7280;
            margin-top: 3px;
        }

        .btn-logout {
            border: none;
            background: #fee2e2;
            color: #dc2626;
            padding: 10px 16px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-logout:hover {
            background: #fecaca;
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 900px;
            margin: auto;
            padding: 35px 20px 60px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            margin-bottom: 25px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            color: #6b7280;
            font-size: 14px;
            font-weight: 600;

            margin-bottom: 15px;
        }

        .back-link:hover {
            color: #2563eb;
        }

        .page-title {
            font-size: 30px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 7px;
        }

        .page-description {
            font-size: 14px;
            color: #6b7280;
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 30px;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        .form-section {
            margin-bottom: 28px;
        }

        .section-title {
            font-size: 17px;
            font-weight: 700;
            color: #111827;

            padding-bottom: 12px;
            margin-bottom: 20px;

            border-bottom: 1px solid #f0f0f0;
        }

        /* =========================
           FORM GRID
        ========================= */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: 700;
            color: #374151;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        .input,
        .select,
        .textarea {
            width: 100%;

            border: 1px solid #d1d5db;
            border-radius: 9px;

            background: white;
            color: #111827;

            font-size: 14px;

            outline: none;

            transition: 0.2s;
        }

        .input,
        .select {
            height: 46px;
            padding: 0 14px;
        }

        .textarea {
            min-height: 120px;
            padding: 13px 14px;
            resize: vertical;
            line-height: 1.5;
        }

        .input:focus,
        .select:focus,
        .textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        .input::placeholder,
        .textarea::placeholder {
            color: #9ca3af;
        }

        .help-text {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 6px;
        }

        /* =========================
           PRICE INPUT
        ========================= */

        .price-wrapper {
            position: relative;
        }

        .price-prefix {
            position: absolute;
            left: 14px;
            top: 50%;

            transform: translateY(-50%);

            color: #6b7280;
            font-size: 14px;
            font-weight: 600;

            pointer-events: none;
        }

        .price-input {
            padding-left: 40px !important;
        }

        /* =========================
           IMAGE UPLOAD
        ========================= */

        .upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 12px;

            padding: 28px 20px;

            text-align: center;

            background: #fafafa;

            transition: 0.2s;
        }

        .upload-area:hover {
            border-color: #2563eb;
            background: #eff6ff;
        }

        .upload-icon {
            width: 55px;
            height: 55px;

            margin: 0 auto 12px;

            border-radius: 50%;

            background: #eff6ff;
            color: #2563eb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 24px;
        }

        .upload-title {
            font-size: 14px;
            font-weight: 700;
            color: #374151;
            margin-bottom: 5px;
        }

        .upload-description {
            font-size: 12px;
            color: #9ca3af;
            margin-bottom: 15px;
        }

        .file-input {
            width: 100%;
            max-width: 400px;
            margin: auto;

            font-size: 13px;
        }

        /* =========================
           ERROR
        ========================= */

        .alert-error {
            background: #fee2e2;
            color: #991b1b;

            border: 1px solid #fecaca;

            border-radius: 10px;

            padding: 15px 17px;

            margin-bottom: 25px;

            font-size: 14px;
        }

        .alert-error strong {
            display: block;
            margin-bottom: 7px;
        }

        .alert-error ul {
            padding-left: 20px;
            line-height: 1.6;
        }

        /* =========================
           FORM ACTION
        ========================= */

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;

            padding-top: 22px;

            border-top: 1px solid #f0f0f0;
        }

        .btn-cancel {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            height: 45px;
            padding: 0 20px;

            border-radius: 9px;

            background: #f3f4f6;
            color: #374151;

            font-size: 14px;
            font-weight: 700;
        }

        .btn-cancel:hover {
            background: #e5e7eb;
        }

        .btn-save {
            height: 45px;
            padding: 0 24px;

            border: none;
            border-radius: 9px;

            background: #2563eb;
            color: white;

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-save:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;
            color: #9ca3af;
            font-size: 13px;
            margin-top: 30px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

            .header-container {
                padding: 15px;
            }

            .user-info {
                display: none;
            }

            .container {
                padding: 25px 15px 40px;
            }

            .page-title {
                font-size: 25px;
            }

            .form-card {
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-cancel,
            .btn-save {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         HEADER
    ========================= -->

    <header class="header">

        <div class="header-container">

            <a
                href="{{ route('products.index') }}"
                class="logo"
            >
                Campus<span>Market</span>
            </a>


            <div class="header-right">

                @auth

                    <div class="user-info">

                        <div class="user-name">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="user-role">
                            {{ ucfirst(auth()->user()->role) }}
                        </div>

                    </div>


                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="btn-logout"
                        >
                            Logout
                        </button>

                    </form>

                @endauth

            </div>

        </div>

    </header>


    <!-- =========================
         MAIN
    ========================= -->

    <main class="container">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <a
                href="{{ route('products.index') }}"
                class="back-link"
            >
                ← Kembali ke Produk
            </a>

            <h1 class="page-title">
                Tambah Produk
            </h1>

            <p class="page-description">
                Tambahkan produk yang ingin kamu jual di CampusMarket.
            </p>

        </div>


        <!-- =========================
             ERROR VALIDATION
        ========================= -->

        @if($errors->any())

            <div class="alert-error">

                <strong>
                    Periksa kembali data yang kamu masukkan.
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- =========================
             FORM CARD
        ========================= -->

        <div class="form-card">

            <form
                action="{{ route('products.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <!-- =========================
                     INFORMASI PRODUK
                ========================= -->

                <div class="form-section">

                    <div class="section-title">
                        Informasi Produk
                    </div>


                    <div class="form-grid">

                        <!-- NAMA -->

                        <div class="form-group full">

                            <label for="name">
                                Nama Produk
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="input"
                                value="{{ old('name') }}"
                                placeholder="Contoh: Laptop ASUS, Buku Pemrograman, Jaket..."
                                required
                            >

                        </div>


                        <!-- KATEGORI -->

                        <div class="form-group">

                            <label for="category_id">
                                Kategori
                                <span class="required">*</span>
                            </label>

                            <select
                                id="category_id"
                                name="category_id"
                                class="select"
                                required
                            >

                                <option value="">
                                    Pilih Kategori
                                </option>

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>


                        <!-- HARGA -->

                        <div class="form-group">

                            <label for="price">
                                Harga
                                <span class="required">*</span>
                            </label>

                            <div class="price-wrapper">

                                <span class="price-prefix">
                                    Rp
                                </span>

                                <input
                                    type="number"
                                    id="price"
                                    name="price"
                                    class="input price-input"
                                    value="{{ old('price') }}"
                                    placeholder="100000"
                                    min="0"
                                    required
                                >

                            </div>

                            <span class="help-text">
                                Masukkan harga dalam Rupiah.
                            </span>

                        </div>


                        <!-- KONDISI -->

                        <div class="form-group">

                            <label for="condition">
                                Kondisi
                                <span class="required">*</span>
                            </label>

                            <select
                                id="condition"
                                name="condition"
                                class="select"
                                required
                            >

                                <option
                                    value="Baru"
                                    {{ old('condition', 'Baru') == 'Baru' ? 'selected' : '' }}
                                >
                                    Baru
                                </option>

                                <option
                                    value="Bekas"
                                    {{ old('condition') == 'Bekas' ? 'selected' : '' }}
                                >
                                    Bekas
                                </option>

                            </select>

                        </div>


                        <!-- LOKASI -->

                        <div class="form-group">

                            <label for="location">
                                Lokasi
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="location"
                                name="location"
                                class="input"
                                value="{{ old('location') }}"
                                placeholder="Contoh: Tembalang, Semarang"
                                required
                            >

                        </div>


                        <!-- TRANSAKSI -->

                        <div class="form-group">

                            <label for="transaction_type">
                                Jenis Transaksi
                                <span class="required">*</span>
                            </label>

                            <select
                                id="transaction_type"
                                name="transaction_type"
                                class="select"
                                required
                            >

                                <option
                                    value="COD"
                                    {{ old('transaction_type', 'COD') == 'COD' ? 'selected' : '' }}
                                >
                                    COD
                                </option>

                                <option
                                    value="Transfer"
                                    {{ old('transaction_type') == 'Transfer' ? 'selected' : '' }}
                                >
                                    Transfer
                                </option>

                                <option
                                    value="Keduanya"
                                    {{ old('transaction_type') == 'Keduanya' ? 'selected' : '' }}
                                >
                                    COD / Transfer
                                </option>

                            </select>

                        </div>


                        <!-- DESKRIPSI -->

                        <div class="form-group full">

                            <label for="description">
                                Deskripsi Produk
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                class="textarea"
                                placeholder="Jelaskan kondisi, spesifikasi, kelengkapan, atau informasi lain mengenai produk..."
                            >{{ old('description') }}</textarea>

                            <span class="help-text">
                                Berikan informasi yang jelas agar pembeli mengetahui kondisi produk.
                            </span>

                        </div>

                    </div>

                </div>


                <!-- =========================
                     FOTO PRODUK
                ========================= -->

                <div class="form-section">

                    <div class="section-title">
                        Foto Produk
                    </div>


                    <div class="upload-area">

                        <div class="upload-icon">
                            📷
                        </div>

                        <div class="upload-title">
                            Upload foto produk
                        </div>

                        <div class="upload-description">
                            Gunakan foto yang jelas dan sesuai dengan produk.
                            Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                        </div>

                        <input
                            type="file"
                            name="image"
                            id="image"
                            class="file-input"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                    </div>

                </div>


                <!-- =========================
                     BUTTON
                ========================= -->

                <div class="form-actions">

                    <a
                        href="{{ route('products.index') }}"
                        class="btn-cancel"
                    >
                        Batal
                    </a>


                    <button
                        type="submit"
                        class="btn-save"
                    >
                        Simpan Produk
                    </button>

                </div>

            </form>

        </div>


        <!-- FOOTER -->

        <div class="footer">

            © {{ date('Y') }} CampusMarket.
            Marketplace khusus mahasiswa.

        </div>

    </main>

</body>
</html>