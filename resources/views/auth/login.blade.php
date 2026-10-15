<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - CampusMarket</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
        }

        .login-box {
            width: 400px;
            background-color: white;

            padding: 30px;

            border-radius: 10px;

            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 5px;
        }

        .login-box p {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 11px;

            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-login {
            width: 100%;

            padding: 11px;

            background-color: #007bff;
            color: white;

            border: none;
            border-radius: 5px;

            cursor: pointer;

            font-size: 15px;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;

            padding: 10px;

            border-radius: 5px;

            margin-bottom: 15px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;

            padding: 10px;

            border-radius: 5px;

            margin-bottom: 15px;
        }

    </style>

</head>

<body>

    <div class="login-box">

        <h1>CampusMarket</h1>

        <p>Login ke akun kamu</p>


        {{-- Pesan berhasil --}}

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif


        {{-- Error --}}

        @if($errors->any())

            <div class="error">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <form
            action="{{ route('login') }}"
            method="POST"
        >

            @csrf


            <div class="form-group">

                <label>
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >

            </div>


            <div class="form-group">

                <label>
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <button
                type="submit"
                class="btn-login"
            >
                Login
            </button>

        </form>


        <div class="register-link">

            Belum punya akun?

            <a href="{{ route('register') }}">
                Daftar sekarang
            </a>

        </div>

    </div>

</body>

</html>