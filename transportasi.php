<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportasi ke Objek Wisata</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 0.5em;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 0 1em;
        }

        section {
            padding: 2em;
        }

        .transport-info {
            margin-bottom: 20px;
            text-align: center;
        }

        .transport-info img {
            width: 50%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.1s ease-in-out;
        }

        .transport-info img:hover {
            transform: scale(1.1);
        }

        footer {
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            text-align: center;
            padding: 0.1em; /* Atur padding menjadi 0.5em untuk memberikan sedikit ruang */
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px; /* Atur tinggi footer sesuai kebutuhan Anda */
        }
    </style>
</head>

<body>
    <header>
        <h1>Transportasi ke Objek Wisata</h1>
    </header>

    <nav>
        <a href="#bus">Bus</a>
        <a href="#kereta">Kereta</a>
        <a href="#pesawat">Pesawat</a>
    </nav>

    <section id="bus" class="transport-info">
        <h2>Transportasi dengan Bus</h2>
        <img src="admin/image/logo/bus.jpeg" alt="Bus Image">
        <p>
            Jika Anda memilih transportasi dengan bus, Anda dapat menikmati perjalanan yang nyaman dan ekonomis.
            Bus seringkali menjadi pilihan populer untuk perjalanan ke objek wisata dalam kota maupun antar kota.
        </p>
    </section>

    <section id="kereta" class="transport-info">
        <h2>Transportasi dengan Kereta</h2>
        <img src="admin/image/logo/kereta.jpg" alt="Train Image">
        <p>
            Perjalanan dengan kereta dapat menjadi pengalaman yang menyenangkan dan efisien. Nikmati pemandangan
            indah sambil menuju objek wisata favorit Anda dengan kereta.
        </p>
    </section>

    <section id="pesawat" class="transport-info">
        <h2>Transportasi dengan Pesawat</h2>
        <img src="admin/image/logo/pesawat.jpeg" alt="Airplane Image">
        <p>
            Jika Anda ingin mencapai objek wisata dengan cepat, pesawat adalah pilihan yang tepat. Terbang dengan
            pesawat memungkinkan Anda mengeksplorasi objek wisata jarak jauh dengan waktu perjalanan singkat.
        </p>
    </section>

    <footer>
        <section>
            <!-- Tombol untuk kembali ke index.php -->
            <a href="index.php">Kembali ke Beranda</a>
        </section>
    </footer>
</body>

</html>
