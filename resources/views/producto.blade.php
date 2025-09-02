<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $producto['nombre'] }} - TechZone</title>
    
    <style>
        /* Estilos del producto */
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
            position: relative;
        }
        
        header h1 {
            font-size: 2.5em;
            color: #990033;
            margin: 0;
        }
        
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-right: 20px;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #990033;
        }
        
        .cart-link {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff3366;
            font-size: 1.2em;
        }

        .product-detail-container {
            display: flex;
            flex-direction: column;
            gap: 40px;
            padding: 50px 0;
        }

        .product-image {
            flex-basis: 50%;
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 10px;
            border: 2px solid #990033;
        }

        .product-info {
            flex-basis: 50%;
        }

        .product-info h2 {
            font-size: 2.5em;
            color: #ff3366;
            margin-top: 0;
        }

        .product-info .price {
            font-size: 2em;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }

        .product-info .buy-button {
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
        }

        .product-info .buy-button:hover {
            background-color: #660022;
        }

        .specs-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        
        .specs-list li {
            background-color: #1a1a1a;
            margin-bottom: 10px;
            padding: 10px;
            border-left: 3px solid #990033;
        }

        .reviews-section {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
        }

        .reviews-section h3 {
            font-size: 2em;
            margin-top: 0;
            margin-bottom: 20px;
            color: #ff3366;
            text-align: center;
        }

        .review-card {
            background-color: #0d0d0d;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #333;
        }

        .review-card .rating {
            color: #ffcc00;
            font-size: 1.2em;
        }
        
        .review-card .author {
            font-weight: bold;
            color: #fff;
            margin-bottom: 5px;
        }

        @media (min-width: 768px) {
            .product-detail-container {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="{{ url('/tienda') }}">Volver a la tienda</a>
            <h1>TechZone</h1>
            <a href="{{ url('/carrito') }}" class="cart-link">Carrito ({{ count(session('carrito', [])) }})</a>
        </div>
    </header>

    <main>
        <div class="container product-detail-container">
            <div class="product-image">
                <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
            </div>

            <div class="product-info">
                <h2>{{ $producto['nombre'] }}</h2>
                <div class="price">{{ $producto['precio_formateado'] }}</div>
                <p>{{ $producto['descripcion_larga'] }}</p>
                
                <h3>Especificaciones:</h3>
                <ul class="specs-list">
                    @foreach ($producto['especificaciones'] as $especificacion => $valor)
                        <li><strong>{{ $especificacion }}:</strong> {{ $valor }}</li>
                    @endforeach
                </ul>
                
                <form action="{{ url('/carrito/agregar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto['id'] }}">
                    <button type="submit" class="buy-button">Añadir al carrito</button>
                </form>
            </div>
        </div>
        
        <div class="container">
            <div class="reviews-section">
                <h3>Reseñas de clientes</h3>
                @foreach ($producto['resenas'] as $resena)
                    <div class="review-card">
                        <div class="rating">{{ $resena['puntuacion'] }}</div>
                        <div class="author">"{{ $resena['autor'] }}"</div>
                        <p>{{ $resena['texto'] }}</p>
                    </div>
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