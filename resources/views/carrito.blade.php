<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - TechZone</title>
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
        
        main {
            padding: 50px 0;
        }

        .cart-item {
            display: flex;
            align-items: center;
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            margin-right: 20px;
            border: 2px solid #990033;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-details h4 {
            margin: 0;
            color: #ff3366;
            font-size: 1.2em;
        }

        .item-details p {
            margin: 5px 0 0;
            color: #b0b0b0;
        }
        
        .item-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .item-actions .quantity {
            font-weight: bold;
            font-size: 1.1em;
        }

        .remove-btn {
            background-color: #ff3366;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #cc0044;
        }
        
        .cart-summary {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            margin-top: 40px;
            text-align: right;
        }

        .cart-summary h3 {
            margin: 0 0 10px;
            color: #ff3366;
            font-size: 1.8em;
        }

        .cart-summary .total-price {
            font-size: 2.2em;
            font-weight: bold;
            color: #fff;
        }
        
        .empty-cart-message {
            text-align: center;
            font-size: 1.5em;
            color: #b0b0b0;
            margin-top: 50px;
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
            <a href="{{ url('/tienda') }}">Volver a la tienda</a>
            <h1>Carrito de Compras</h1>
        </div>
    </header>

    <main>
        <div class="container">
            @if(session('success'))
                <div style="background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
                    {{ session('success') }}
                </div>
            @endif

            @if(count($carrito) > 0)
                @foreach ($carrito as $id => $item)
                    <div class="cart-item">
                        <img src="{{ $item['imagen'] }}" alt="{{ $item['nombre'] }}">
                        <div class="item-details">
                            <h4>{{ $item['nombre'] }}</h4>
                            <p>Precio: ${{ number_format($item['precio'], 0, ',', '.') }}</p>
                            <p>Cantidad: {{ $item['cantidad'] }}</p>
                        </div>
                        <div class="item-actions">
                            <form action="{{ url('/carrito/quitar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <button type="submit" class="remove-btn">Quitar</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="cart-summary">
                    <h3>Total</h3>
                    <div class="total-price">${{ number_format($total, 0, ',', '.') }}</div>
                    <button class="buy-button" style="background-color: #4CAF50; margin-top: 20px;">Finalizar Compra</button>
                </div>
            @else
                <p class="empty-cart-message">Tu carrito de compras está vacío.</p>
            @endif
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} TechZone. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>