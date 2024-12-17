<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'server')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to top, #28a745, #34d058, #b8f5c1, #f2fff5); /* Gradasi hijau kombinasi putih */
            color: #333; /* Warna teks default */
            padding-top: 70px; /* Space for fixed navbar */
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container-content {
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.25);
            margin-top: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out;
        }

        .container-content:hover {
            box-shadow: 0 12px 16px rgba(0, 128, 0, 0.3); /* Efek bayangan hijau */
        }

        .btn-back {
            background-color: #28a745; /* Warna hijau */
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .btn-back:hover {
            background-color: #218838; /* Warna hijau gelap saat hover */
            color: white;
        }

        .footer {
            background: linear-gradient(to right, #28a745, #34d058);
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <!-- Tombol kembali -->
    <a href="javascript:history.back()" class="btn-back mb-3">← Kembali</a>

    <!-- Konten Utama -->
    <div class="container">
        <div class="container-content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; Muhammad Adam Husaini
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
