<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Modern</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .hero {
            background: url('{{ asset('images/library-hero-2.jpg') }}') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 2.5em;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        .hero p {
            font-size: 1.2em;
            position: relative;
            z-index: 1;
        }
        .button {
            background-color: #e74c3c;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
            position: relative;
            z-index: 1;
        }
        .button:hover {
            background-color: #c0392b;
        }
        .about {
            padding: 40px;
            text-align: center;
            background-color: white;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 30px 0;
        }
        .service {
            background: #fff;
            margin: 15px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 280px;
            text-align: center;
            transition: transform 0.3s;
        }
        .service:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan Modern</h1>
        <p>Temukan pengetahuan tanpa batas di sini.</p>
    </header>

    <div class="hero">
        <h1>Selamat Datang di Perpustakaan Kami!</h1>
        <p>Jelajahi koleksi buku, artikel, dan sumber daya lainnya dengan mudah.</p>
        <a href="#services" class="button">Jelajahi Layanan</a>
    </div>

    <div class="about">
        <h2>Tentang Perpustakaan</h2>
        <p>Kami adalah perpustakaan yang berkomitmen untuk menyediakan akses informasi dan pengetahuan yang berkualitas bagi semua anggota.</p>
    </div>

    <section id="services">
        <h2>Layanan Kami</h2>
        <div class="services">
            <div class="service">
                <h3>Peminjaman Buku</h3>
                <p>Peminjaman buku fisik dan digital untuk semua anggota.</p>
            </div>
            <div class="service">
                <h3>Ruang Baca Nyaman</h3>
                <p>Ruang baca yang tenang dan nyaman untuk belajar.</p>
            </div>
            <div class="service">
                <h3>Acara dan Workshop</h3>
                <p>Ikuti acara dan workshop menarik untuk meningkatkan pengetahuan.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Perpustakaan Modern. Semua hak dilindungi.</p>
    </footer>
</body>
</html>