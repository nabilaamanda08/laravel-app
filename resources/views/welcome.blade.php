<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MyThriftShoes</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff; 
            color: #1b1b18;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #D18B8D; 
            color: white;
            padding: 2rem;
            text-align: center;
            width: 100%;
            margin-bottom: 3rem;
            border-bottom: 2px solid #C66B66;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        main {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
        }

        .content {
            width: 100%;
            max-width: 800px;
            text-align: center;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-bottom: 2rem;
            border-top: 2px solid #D18B8D;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 1.5rem;
        }

        ul li {
            margin-bottom: 1rem;
            font-size: 1.2rem;
            color: #333;
        }

        ul li a {
            color: #D18B8D;
            text-decoration: none;
            font-weight: bold;
        }

        .btn {
            padding: 12px 25px;
            background-color: #D18B8D;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 1.5rem;
        }

        .btn:hover {
            background-color: #C66B66; 
        }

        footer {
            background-color: #D18B8D;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
            margin-top: 3rem;
            border-radius: 20px;
            width: 100%;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px; 
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card .card-body {
            padding: 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to MyThriftShoes!</h1>
        <p>Kami menyediakan berbagai pilihan sepatu bekas berkualitas dengan harga terjangkau dan pengiriman cepat ke seluruh Indonesia. Mari mulai perjalanan belanja Anda dengan kami!</p>
    </header>

    <!-- Main Content -->
    <main>
        <div class="content">
            <!-- Keunggulan Toko -->
            <ul>
                <li>✨ Sepatu Bekas Berkualitas Terbaik</li>
                <li>🚚 Pengiriman Cepat ke Seluruh Indonesia</li>
                <li>💸 Harga Terjangkau dengan Diskon Menarik</li>
            </ul>

            <!-- Tombol Call to Action -->
            <a href="{{ route('login') }}" class="btn">
                Mulai Belanja Sekarang
            </a>
        </div>
    </main>

    <footer>
        <p>© 2026 MyThriftShoes. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
