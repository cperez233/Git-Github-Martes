<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - TechZone</title>
    
    <style>
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
        
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
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
            <a href="{{ url('/') }}">Volver al inicio</a>
            <h1>Nuestra Tienda</h1>
            <a href="{{ url('/carrito') }}" class="cart-link">Carrito ({{ count(session('carrito', [])) }})</a>
        </div>
    </header>

    <main>
        <div class="container">
            @if(session('success'))
                <div style="background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="product-grid">
                @foreach ($productos as $producto)
                    <div class="product-card">
                        <a href="{{ url('/productos/' . $producto['id']) }}" class="product-link">
                            <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}">
                            <h4>{{ $producto['nombre'] }}</h4>
                            <p>{{ $producto['descripcion_corta'] }}</p>
                            <span>{{ $producto['precio_formateado'] }}</span>
                        </a>
                        <form action="{{ url('/carrito/agregar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $producto['id'] }}">
                            <button type="submit" class="buy-button">Añadir al carrito</button>
                        </form>
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