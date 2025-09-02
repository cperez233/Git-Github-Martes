<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Tu tienda de Gaming</title>
    
    <style>
        /* Estilos generales */
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

        /* Header */
        header {
            background-color: #1a1a1a;
            padding: 40px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3.5em;
            color: #990033;
            margin: 0;
        }

        /* Sección principal (hero) */
        .hero-section {
            position: relative;
            text-align: center;
            padding: 100px 20px;
            background: url('https://images.unsplash.com/photo-1542751371-adc954848d0e?q=80&w=2940&auto=format&fit=crop') no-repeat center center/cover;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-section h2, .hero-section p, .hero-section a {
            position: relative;
            z-index: 1;
        }

        .hero-section h2 {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .cta-button {
            background-color: #990033;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #660022;
        }

        /* Productos destacados */
        .featured-products {
            padding: 50px 20px;
            text-align: center;
        }

        .featured-products h3 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #f0f0f0;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .product-card {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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

        /* Footer */
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
            <h1>TechZone</h1>
            <p>El poder del juego en tus manos</p>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container">
                <h2>Computadoras y accesorios para gamers</h2>
                <p>Equípate con lo mejor para dominar cualquier campo de batalla. 🔥</p>
                <a href="{{ url('/tienda') }}" class="cta-button">Ver productos</a>
            </div>
        </section>

        <section class="featured-products">
            <div class="container">
                <h3>Productos destacados</h3>
                <div class="product-grid">
                    @php
                    $productos = [
                        [
                            'nombre' => 'PC Gamer Élite',
                            'descripcion' => 'Intel Core i9, RTX 4080, 32GB RAM',
                            'precio' => '$2,500',
                            'imagen' => 'https://images.unsplash.com/photo-1629864275069-1c9f029392e2?q=80&w=2670&auto=format&fit=crop'
                        ],
                        [
                            'nombre' => 'Audífonos Razer Kraken',
                            'descripcion' => 'Sonido 7.1 envolvente, micrófono retráctil',
                            'precio' => '$95',
                            'imagen' => 'https://images.unsplash.com/photo-1601931846564-96fe744318c3?q=80&w=2940&auto=format&fit=crop'
                        ],
                        [
                            'nombre' => 'Teclado Ducky One 3',
                            'descripcion' => 'Switches Cherry MX Brown, PBT keycaps',
                            'precio' => '$150',
                            'imagen' => 'https://images.unsplash.com/photo-1618296213702-8a9d16a50352?q=80&w=2940&auto=format&fit=crop'
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
</body>
</html>