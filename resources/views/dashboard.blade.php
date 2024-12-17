<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body dengan background hijau kombinasi putih */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4CAF50, #FFFFFF);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: rgb(0, 0, 0);
        }

        /* Navbar */
        .navbar {
            background-color: #2e7d32; /* Hijau gelap */
            color: #ffffff;
        }
        .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #ffd700 !important; /* Emas saat hover */
        }

        /* Content Styling */
        .content {
            flex: 1; /* Membuat konten fleksibel mengisi sisa ruang */
            padding: 40px 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #4CAF50; /* Warna hijau terang */
            color: #ffffff;
        }
        .card-header {
            background-color: #388E3C; /* Warna header lebih gelap */
            font-weight: bold;
            text-align: center;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Tombol */
        .btn-light {
            color: #4CAF50;
            background-color: #ffffff;
            border: 1px solid #4CAF50;
        }
        .btn-light:hover {
            background-color: #388E3C;
            color: #ffffff;
        }

        /* Footer tetap di bawah */
        .footer {
            background-color: #2e7d32;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('golongan.index') }}">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger nav-link text-white border-0">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container">
            <h1 class="mb-4 text-center fw-bold">Selamat Datang di Dashboard</h1>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">Golongan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data golongan di sini.</p>
                            <a href="{{ route('golongan.index') }}" class="btn btn-light w-100">Lihat Golongan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">User</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data user di sini.</p>
                            <a href="{{ route('user.index') }}" class="btn btn-light w-100">Lihat User</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">Pelanggan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data pelanggan di sini.</p>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-light w-100">Lihat Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5>Ini merupakan halaman tampilan dashboard yang terdapat 3 tabel yang menyimpan data</h5>
        <h5>golongan, user, dan pelanggan. Silahkan masuk dan input data!</h5>

    </div>
        
    <!-- Footer -->
    <div class="footer">
        <p class="mb-0">&copy; Muhammad Adam Husaini</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
