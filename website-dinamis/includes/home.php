<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .feature-card {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }

        /* Animasi Fade-In untuk Teks */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animasi Slide-In untuk Gambar */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Terapkan animasi pada elemen */
        .hero-text {
            animation: fadeIn 1.5s ease-out;
        }

        .hero-image {
            animation: slideIn 2s ease-out;
        }
    </style>
</head>
<body>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-text">Selamat Datang di Website Pribadi Saya</h1>
                    <a href="#" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6">
                    <img src="assets/image/download.webp" class="img-fluid hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
