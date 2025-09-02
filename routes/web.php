<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tienda', function () {
    return view('tienda');
});

// ... (tus otras rutas)

Route::get('/productos/{id}', function ($id) {
    // Aquí puedes buscar el producto en una base de datos con el $id
    $productos = [
        1 => [
            'nombre' => 'PC Gamer Élite',
            'descripcion_corta' => 'Intel Core i9, RTX 4080, 32GB RAM',
            'precio' => '$2,500',
            'imagen' => 'https://images.unsplash.com/photo-1629864275069-1c9f029392e2?q=80&w=2670&auto=format&fit=crop',
            'descripcion_larga' => 'El PC Gamer Élite es la máquina definitiva para los entusiastas del gaming que no aceptan compromisos. Construido con componentes de última generación, este equipo está diseñado para ofrecer un rendimiento inigualable en los títulos más exigentes. Desde gráficos hiperrealistas hasta velocidades de fotogramas ultrarrápidas, el PC Gamer Élite te lleva a la cima de la experiencia de juego.',
            'especificaciones' => [
                'Procesador' => 'Intel Core i9-13900K',
                'Tarjeta Gráfica' => 'NVIDIA GeForce RTX 4080 (16GB)',
                'Memoria RAM' => '32GB DDR5 a 6000MHz',
                'Almacenamiento' => '1TB NVMe Gen4 SSD',
                'Fuente de Poder' => '850W Certificación 80 Plus Gold',
                'Refrigeración' => 'Sistema líquido AIO 240mm'
            ],
            'resenas' => [
                ['autor' => 'ElVikingoGamer', 'puntuacion' => '★★★★★', 'texto' => 'Increíble. Carga todos mis juegos en segundos y puedo streamear en 4K sin ningún problema. La mejor inversión que he hecho. ¡Totalmente recomendado!'],
                ['autor' => 'CyberPro', 'puntuacion' => '★★★★☆', 'texto' => 'Es una bestia, el rendimiento es superior. Le doy 4 estrellas porque la caja es un poco grande para mi escritorio, pero en general, un PC espectacular.'],
                ['autor' => 'Laura_87', 'puntuacion' => '★★★★★', 'texto' => 'Diseño elegante y potencia brutal. No solo para jugar, también lo uso para edición de video y el renderizado es rapidísimo. ¡Una maravilla!']
            ]
        ],
        2 => [
            'nombre' => 'Audífonos Razer Kraken',
            'descripcion_corta' => 'Sonido 7.1 envolvente, micrófono retráctil',
            'precio' => '$95',
            'imagen' => 'https://images.unsplash.com/photo-1601931846564-96fe744318c3?q=80&w=2940&auto=format&fit=crop',
            'descripcion_larga' => 'Los audífonos Razer Kraken ofrecen un sonido envolvente 7.1 para una inmersión total en tus juegos. Su micrófono retráctil con cancelación de ruido asegura una comunicación clara con tu equipo.',
            'especificaciones' => [
                'Conectividad' => 'Jack de 3.5mm',
                'Sonido' => '7.1 envolvente',
                'Micrófono' => 'Retráctil con cancelación de ruido',
                'Compatibilidad' => 'PC, PlayStation, Xbox, Nintendo Switch'
            ],
            'resenas' => [
                ['autor' => 'Player_22', 'puntuacion' => '★★★★★', 'texto' => 'Muy cómodos y el sonido es espectacular. El micro se escucha muy claro.'],
                ['autor' => 'Anita_Games', 'puntuacion' => '★★★★☆', 'texto' => 'Buenos audífonos, un poco apretados al principio pero luego se acomodan.']
            ]
        ]
    ];
    
    // Busca el producto en el array. En un proyecto real, esto sería una consulta a una base de datos.
    $producto = $productos[$id] ?? null;

    if (!$producto) {
        return "Producto no encontrado.";
    }

    return view('producto', ['producto' => $producto]);
});