<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Produk - CampusMarket</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #222;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .header h1 {
            margin: 0 0 5px 0;
        }

        .header p {
            margin: 0;
            color: #666;
        }

        .form-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .form-control {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .current-image {
            margin-top: 10px;
        }

        .current-image img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .help-text {
            margin-top: 6px;
            color: #777;
            font-size: 13px;
        }

        .error-box {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 11px 18px;
            border-radius: 5px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-update {
            background-color: #007bff;
            color: white;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
        }

        .btn-back:hover {
            background-color: #545b62;
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px auto;
            }

            .form-box {
                padding: 20px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
                width: 100%;
            }
        }
    </style>

</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <h1>
            Edit Produk
        </h1>

        <p>
            Ubah informasi produk yang kamu jual di CampusMarket.
        </p>

    </div>


    <!-- FORM -->

    <div class="form-box">

        {{-- ERROR VALIDASI --}}

        @if ($errors->any())

            <div class="error-box">

                <strong>
                    Terdapat kesalahan:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('products.update', $product->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            @method('PUT')


            <!-- NAMA PRODUK -->

            <div class="form-group">

                <label for="name">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ old('name', $product->name) }}"
                    placeholder="Masukkan nama produk"
                    required
                >

            </div>


            <!-- KATEGORI -->

            <div class="form-group">

                <label for="category_id">
                    Kategori
                </label>

                <select
                    id="category_id"
                    name="category_id"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    @foreach ($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- DESKRIPSI -->

            <div class="form-group">

                <label for="description">
                    Deskripsi
                </label>

                <textarea
                    id="description"
                    name="description"
                    class="form-control"
                    placeholder="Masukkan deskripsi produk"
                >{{ old('description', $product->description) }}</textarea>

            </div>


            <!-- HARGA -->

            <div class="form-group">

                <label for="price">
                    Harga
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                    class="form-control"
                    value="{{ old('price', $product->price) }}"
                    min="0"
                    placeholder="Contoh: 100000"
                    required
                >

            </div>


            <!-- KONDISI -->

            <div class="form-group">

                <label for="condition">
                    Kondisi
                </label>

                <select
                    id="condition"
                    name="condition"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Kondisi --
                    </option>

                    <option
                        value="Baru"
                        {{ old('condition', $product->condition) == 'Baru' ? 'selected' : '' }}
                    >
                        Baru
                    </option>

                    <option
                        value="Bekas"
                        {{ old('condition', $product->condition) == 'Bekas' ? 'selected' : '' }}
                    >
                        Bekas
                    </option>

                </select>

            </div>


            <!-- LOKASI -->

            <div class="form-group">

                <label for="location">
                    Lokasi
                </label>

                <input
                    type="text"
                    id="location"
                    name="location"
                    class="form-control"
                    value="{{ old('location', $product->location) }}"
                    placeholder="Contoh: Semarang"
                    required
                >

            </div>


            <!-- TRANSAKSI -->

            <div class="form-group">

                <label for="transaction_type">
                    Jenis Transaksi
                </label>

                <select
                    id="transaction_type"
                    name="transaction_type"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Jenis Transaksi --
                    </option>

                    <option
                        value="COD"
                        {{ old('transaction_type', $product->transaction_type) == 'COD' ? 'selected' : '' }}
                    >
                        COD
                    </option>

                    <option
                        value="Transfer"
                        {{ old('transaction_type', $product->transaction_type) == 'Transfer' ? 'selected' : '' }}
                    >
                        Transfer
                    </option>

                    <option
                        value="Keduanya"
                        {{ old('transaction_type', $product->transaction_type) == 'Keduanya' ? 'selected' : '' }}
                    >
                        Keduanya
                    </option>

                </select>

            </div>


            <!-- GAMBAR -->

            <div class="form-group">

                <label for="image">
                    Ganti Foto Produk
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <div class="help-text">
                    Kosongkan jika tidak ingin mengganti foto.
                    Maksimal 2 MB.
                </div>


                <!-- FOTO LAMA -->

                @if ($product->image)

                    <div class="current-image">

                        <p>
                            <strong>Foto saat ini:</strong>
                        </p>

                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                        >

                    </div>

                @endif

            </div>


            <!-- BUTTON -->

            <div class="buttons">

                <button
                    type="submit"
                    class="btn btn-update"
                >
                    Simpan Perubahan
                </button>

                <a
                    href="{{ route('products.index') }}"
                    class="btn btn-back"
                >
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

</body>

</html>