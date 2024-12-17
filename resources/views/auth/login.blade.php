<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to top, #28a745, #34d058, #b8f5c1, #f2fff5); /* Gradasi hijau kombinasi putih */
            color: #004d40; /* Warna teks hijau gelap */
            height: 100vh; /* Tinggi body 100% layar */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #ffffff; /* Latar card putih */
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 12px rgba(0, 128, 0, 0.2); /* Bayangan hijau lembut */
            padding: 40px;
            width: 90%;
            max-width: 400px;
        }

        .form-label {
            font-weight: bold;
            color: #28a745; /* Warna label hijau terang */
        }

        .btn-primary {
            background-color: #28a745; /* Warna tombol hijau */
            border: none;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #218838; /* Warna hijau gelap saat hover */
        }

        .alert {
            background-color: #ffcdd2; /* Warna merah muda untuk alert */
            border: none;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert ul li {
            list-style: none;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 class="text-center mb-4">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
