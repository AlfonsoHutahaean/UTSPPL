<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - CampusMarket</title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            min-height: 100vh;

            font-family: Arial, sans-serif;

            background-color: #f5f5f5;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 20px;
        }


        .register-container {
            width: 100%;

            max-width: 450px;

            background-color: white;

            border: 1px solid #ddd;

            border-radius: 10px;

            padding: 35px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }


        .logo {
            text-align: center;

            margin-bottom: 10px;
        }


        .logo h1 {
            margin: 0;

            color: #007bff;

            font-size: 32px;
        }


        .subtitle {
            text-align: center;

            color: #666;

            margin-bottom: 30px;
        }


        .form-group {
            margin-bottom: 18px;
        }


        .form-group label {
            display: block;

            font-weight: bold;

            margin-bottom: 7px;
        }


        .form-group input {
            width: 100%;

            padding: 12px;

            border: 1px solid #ccc;

            border-radius: 6px;

            font-size: 15px;

            outline: none;
        }


        .form-group input:focus {
            border-color: #007bff;
        }


        .error {
            color: #dc3545;

            font-size: 13px;

            margin-top: 5px;
        }


        .general-error {
            background-color: #f8d7da;

            color: #721c24;

            border: 1px solid #f5c6cb;

            padding: 12px;

            border-radius: 6px;

            margin-bottom: 20px;

            font-size: 14px;
        }


        .info-box {
            background-color: #e7f3ff;

            border: 1px solid #b8daff;

            color: #004085;

            padding: 12px;

            border-radius: 6px;

            margin-bottom: 20px;

            font-size: 14px;

            line-height: 1.5;
        }


        .register-button {
            width: 100%;

            padding: 12px;

            border: none;

            border-radius: 6px;

            background-color: #007bff;

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;
        }


        .register-button:hover {
            background-color: #0056b3;
        }


        .login-link {
            text-align: center;

            margin-top: 20px;

            color: #666;

            font-size: 14px;
        }


        .login-link a {
            color: #007bff;

            text-decoration: none;

            font-weight: bold;
        }


        .login-link a:hover {
            text-decoration: underline;
        }


        .back-link {
            display: block;

            text-align: center;

            margin-top: 15px;

            color: #666;

            text-decoration: none;

            font-size: 14px;
        }


        .back-link:hover {
            color: #007bff;
        }


        @media (max-width: 500px) {

            .register-container {
                padding: 25px 20px;
            }

            .logo h1 {
                font-size: 27px;
            }

        }

    </style>

</head>


<body>


    <div class="register-container">


        <!-- LOGO -->

        <div class="logo">

            <h1>
                CampusMarket
            </h1>

        </div>


        <div class="subtitle">

            Buat akun pembeli baru

        </div>


        <!-- INFORMASI -->

        <div class="info-box">

            <strong>Informasi:</strong>

            <br>

            Pendaftaran akun ini khusus untuk
            <strong>Pembeli</strong>.

            <br>

            Akun penjual dikelola oleh administrator
            CampusMarket.

        </div>


        <!-- ERROR VALIDASI -->

        @if ($errors->any())

            <div class="general-error">

                <strong>
                    Terdapat kesalahan:
                </strong>

                <ul style="margin-bottom: 0;">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- FORM REGISTER -->

        <form
            action="{{ route('register') }}"
            method="POST"
        >

            @csrf


            <!-- NAMA -->

            <div class="form-group">

                <label for="name">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap"
                    required
                    autofocus
                >

                @error('name')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >

                @error('email')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Minimal 6 karakter"
                    required
                >

                @error('password')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- KONFIRMASI PASSWORD -->

            <div class="form-group">

                <label for="password_confirmation">
                    Konfirmasi Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Masukkan kembali password"
                    required
                >

            </div>


            <!-- TOMBOL -->

            <button
                type="submit"
                class="register-button"
            >
                Daftar sebagai Pembeli
            </button>


        </form>


        <!-- LOGIN -->

        <div class="login-link">

            Sudah memiliki akun?

            <a href="{{ route('login') }}">
                Login di sini
            </a>

        </div>


        <!-- KEMBALI -->

        <a
            href="{{ route('products.index') }}"
            class="back-link"
        >
            ← Kembali ke CampusMarket
        </a>


    </div>


</body>

</html>