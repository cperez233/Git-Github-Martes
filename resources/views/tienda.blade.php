<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - TechZone</title>
    
    <style>
        /* Reutilizamos el mismo CSS de la landing para consistencia */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
            color: #f0f0f0;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #1a1a1a;
            padding: 20px 0;
            text-align: center;
        }
        
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #990033;
        }

        header h1 {
            font-size: 2.5em;
            color: #990033;
            margin: 0;
        }

        main {
            padding: 50px 0;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .product-card {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(153, 0, 51, 0.4);
        }

        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
            border: 2px solid #990033;
        }

        .product-card h4 {
            margin: 0;
            font-size: 1.2em;
            color: #ff3366;
        }

        .product-card p {
            font-size: 0.9em;
            color: #b0b0b0;
        }

        .product-card span {
            font-weight: bold;
            font-size: 1.3em;
            color: #fff;
            display: block;
            margin-top: 10px;
        }
        
        .product-link {
            text-decoration: none;
            color: inherit;
        }

        .buy-button {
            background-color: #990033;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .buy-button:hover {
            background-color: #660022;
        }

        footer {
            background-color: #1a1a1a;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 0.8em;
            color: #707070;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="{{ url('/') }}">TechZone</a>
            <h1>Nuestra Tienda</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="product-grid">
                @php
                $productos_tienda = [
                    ['id' => 1, 'nombre' => 'PC Gamer Élite', 'descripcion_corta' => 'Intel Core i9, RTX 4080, 32GB RAM', 'precio' => '$2,500', 'imagen' => 'https://images.unsplash.com/photo-1629864275069-1c9f029392e2?q=80&w=2670&auto=format&fit=crop'],
                    ['id' => 2, 'nombre' => 'Audífonos Razer Kraken', 'descripcion_corta' => 'Sonido 7.1 envolvente, micrófono retráctil', 'precio' => '$95', 'imagen' => 'https://images.unsplash.com/photo-1601931846564-96fe744318c3?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 3, 'nombre' => 'Teclado Ducky One 3', 'descripcion_corta' => 'Switches Cherry MX Brown, PBT keycaps', 'precio' => '$150', 'imagen' => 'https://images.unsplash.com/photo-1618296213702-8a9d16a50352?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 4, 'nombre' => 'PC Gamer X2', 'descripcion_corta' => 'Intel Core i7, RTX 3070', 'precio' => '$1,500', 'imagen' => 'https://images.unsplash.com/photo-1616071424168-d05051ed7a5d?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 5, 'nombre' => 'Laptop Gaming', 'descripcion_corta' => 'AMD Ryzen 9, RTX 3080', 'precio' => '$1,900', 'imagen' => 'https://images.unsplash.com/photo-1593642702749-bf2a97097072?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 6, 'nombre' => 'Mouse Logitech G502', 'descripcion_corta' => '11 botones programables', 'precio' => '$60', 'imagen' => 'https://images.unsplash.com/photo-1615617265935-7171d9d40a25?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 7, 'nombre' => 'Monitor Gaming', 'descripcion_corta' => '27 pulgadas, 144Hz', 'precio' => '$250', 'imagen' => 'https://images.unsplash.com/photo-1593642702749-bf2a97097072?q=80&w=2940&auto=format&fit=crop'],
                    ['id' => 8, 'nombre' => 'Silla Gamer', 'descripcion_corta' => 'Ergonómica, reclinable', 'precio' => '$180', 'imagen' => 'https://images.unsplash.com/photo-1629864275069-1c9f029392e2?q=80&w=2670&auto=format&fit=crop']
                ];
                @endphp
                
                @foreach ($productos_tienda as $producto)
                    <a href="{{ url('/productos/' . $producto['id']) }}" class="product-link">
                        <div class="product-card">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
                            <h4>{{ $producto['nombre'] }}</h4>
                            <p>{{ $producto['descripcion_corta'] }}</p>
                            <span>{{ $producto['precio'] }}</span>
                            <button class="buy-button">Comprar</button>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} TechZone. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>