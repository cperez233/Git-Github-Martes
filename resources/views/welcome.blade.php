<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Tu tienda de Gaming</title>
    
    <style>
        /* Estilos generales */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #e0e0e0;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #1f1f1f;
            padding: 40px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3em;
            color: #00ff66;
            margin: 0;
        }

        /* Sección principal (hero) */
        .hero-section {
            text-align: center;
            padding: 100px 20px;
            background-color: #2c2c2c;
        }

        .hero-section h2 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #fff;
        }

        .cta-button {
            background-color: #00ff66;
            color: #121212;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #00cc55;
        }

        /* Productos destacados */
        .featured-products {
            padding: 50px 20px;
            text-align: center;
        }

        .featured-products h3 {
            font-size: 2em;
            margin-bottom: 40px;
            color: #fff;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .product-card {
            background-color: #1f1f1f;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-card h4 {
            margin: 0;
            font-size: 1.2em;
            color: #00ff66;
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

        /* Footer */
        footer {
            background-color: #1f1f1f;
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
            <h1>TechZone</h1>
            <p>El poder del juego en tus manos</p>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container">
                <h2>Computadoras y accesorios para gamers</h2>
                <p>Equípate con lo mejor para dominar cualquier campo de batalla. 🔥</p>
                <button id="cta-button" class="cta-button">Ver productos</button>
            </div>
        </section>

        <section class="featured-products">
            <div class="container">
                <h3>Productos destacados</h3>
                <div class="product-grid">
                    @php
                    // En un proyecto real, aquí iría la lógica para obtener productos de una base de datos
                    $productos = [
                        [
                            'nombre' => 'PC Gamer X1',
                            'descripcion' => 'Intel Core i7, RTX 3060, 16GB RAM',
                            'precio' => '$1,200',
                            'imagen' => 'https://via.placeholder.com/300x200'
                        ],
                        [
                            'nombre' => 'Audífonos HyperX',
                            'descripcion' => 'Sonido envolvente 7.1, micrófono con cancelación de ruido',
                            'precio' => '$80',
                            'imagen' => 'https://via.placeholder.com/300x200'
                        ],
                        [
                            'nombre' => 'Teclado Mecánico RGB',
                            'descripcion' => 'Switches Cherry MX, iluminación personalizable',
                            'precio' => '$110',
                            'imagen' => 'https://via.placeholder.com/300x200'
                        ]
                    ];
                    @endphp
                    
                    @foreach ($productos as $producto)
                        <div class="product-card">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
                            <h4>{{ $producto['nombre'] }}</h4>
                            <p>{{ $producto['descripcion'] }}</p>
                            <span>{{ $producto['precio'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} TechZone. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.getElementById('cta-button').addEventListener('click', function() {
            alert('¡Explora nuestros increíbles productos gaming!');
        });
    </script>
</body>
</html>