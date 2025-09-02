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

$productos = [
    1 => [
        'id' => 1,
        'nombre' => 'PC Gamer Élite',
        'descripcion_corta' => 'Intel Core i9, RTX 4080, 32GB RAM',
        'precio' => 2500,
        'precio_formateado' => '$2,500',
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
        'id' => 2,
        'nombre' => 'Audífonos Razer Kraken',
        'descripcion_corta' => 'Sonido 7.1 envolvente, micrófono retráctil',
        'precio' => 95,
        'precio_formateado' => '$95',
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
    ],
    3 => [
        'id' => 3,
        'nombre' => 'Teclado Ducky One 3',
        'descripcion_corta' => 'Switches Cherry MX Brown, PBT keycaps',
        'precio' => 150,
        'precio_formateado' => '$150',
        'imagen' => 'https://images.unsplash.com/photo-1618296213702-8a9d16a50352?q=80&w=2940&auto=format&fit=crop',
        'descripcion_larga' => 'El Teclado Ducky One 3 es la elección perfecta para los que buscan durabilidad y una experiencia de tecleo superior. Sus switches mecánicos Cherry MX y sus teclas PBT de alta calidad garantizan un rendimiento duradero y un tacto inmejorable.',
        'especificaciones' => [
            'Switches' => 'Cherry MX Brown',
            'Material de las teclas' => 'PBT',
            'Conectividad' => 'USB-C',
            'Retroiluminación' => 'RGB'
        ],
        'resenas' => [
            ['autor' => 'TecladoMaster', 'puntuacion' => '★★★★★', 'texto' => 'Simplemente el mejor teclado que he tenido. Sólido y con un sonido de tecleo muy satisfactorio.'],
        ]
    ],
    4 => [
        'id' => 4,
        'nombre' => 'PC Gamer X2',
        'descripcion_corta' => 'Intel Core i7, RTX 3070',
        'precio' => 1500,
        'precio_formateado' => '$1,500',
        'imagen' => 'https://images.unsplash.com/photo-1616071424168-d05051ed7a5d?q=80&w=2940&auto=format&fit=crop',
        'descripcion_larga' => 'Una opción de entrada de alta gama, ideal para los que buscan un rendimiento sólido sin gastar una fortuna. Capaz de correr los juegos más populares en alta definición sin problemas.',
        'especificaciones' => [
            'Procesador' => 'Intel Core i7-12700K',
            'Tarjeta Gráfica' => 'NVIDIA GeForce RTX 3070',
            'Memoria RAM' => '16GB DDR4',
            'Almacenamiento' => '512GB SSD'
        ],
        'resenas' => [
            ['autor' => 'Juan_G', 'puntuacion' => '★★★★☆', 'texto' => 'Funciona perfecto, es muy rápido. Un poco ruidoso a veces pero nada grave.']
        ]
    ],
    5 => [
        'id' => 5,
        'nombre' => 'Laptop Gaming',
        'descripcion_corta' => 'AMD Ryzen 9, RTX 3080',
        'precio' => 1900,
        'precio_formateado' => '$1,900',
        'imagen' => 'https://images.unsplash.com/photo-1593642702749-bf2a97097072?q=80&w=2940&auto=format&fit=crop',
        'descripcion_larga' => 'Potencia en movimiento. Esta laptop gaming ofrece un rendimiento de escritorio en un formato portátil, ideal para jugar en cualquier lugar.',
        'especificaciones' => [
            'Procesador' => 'AMD Ryzen 9 6900HS',
            'Tarjeta Gráfica' => 'NVIDIA GeForce RTX 3080',
            'Pantalla' => '15.6" Full HD 120Hz'
        ],
        'resenas' => [
            ['autor' => 'MovilGamer', 'puntuacion' => '★★★★★', 'texto' => 'Increíble para jugar y trabajar. Ligera y potente.']
        ]
    ],
    6 => [
        'id' => 6,
        'nombre' => 'Mouse Logitech G502',
        'descripcion_corta' => '11 botones programables',
        'precio' => 60,
        'precio_formateado' => '$60',
        'imagen' => 'https://images.unsplash.com/photo-1615617265935-7171d9d40a25?q=80&w=2940&auto=format&fit=crop',
        'descripcion_larga' => 'El mouse más vendido del mundo, ahora con tecnología inalámbrica. Con su sensor de alta precisión y botones programables, tendrás el control total en tus manos.',
        'especificaciones' => [
            'Conectividad' => 'Inalámbrica Lightspeed',
            'Sensor' => 'Hero 25K',
            'Botones' => '11 programables'
        ],
        'resenas' => [
            ['autor' => 'Pedro_99', 'puntuacion' => '★★★★★', 'texto' => 'Perfecto para cualquier tipo de juego. Me encanta la personalización.']
        ]
    ],
    7 => [
        'id' => 7,
        'nombre' => 'Monitor Gaming',
        'descripcion_corta' => '27 pulgadas, 144Hz',
        'precio' => 250,
        'precio_formateado' => '$250',
        'imagen' => 'https://images.unsplash.com/photo-1593642702749-bf2a97097072?q=80&w=2940&auto=format&fit=crop',
        'descripcion_larga' => 'Un monitor que te da la ventaja competitiva. Su alta tasa de refresco y tiempo de respuesta ultrarrápido garantizan una experiencia de juego fluida y sin interrupciones.',
        'especificaciones' => [
            'Tamaño' => '27 pulgadas',
            'Tasa de refresco' => '144Hz',
            'Tecnología' => 'IPS',
            'Resolución' => '1080p'
        ],
        'resenas' => [
            ['autor' => 'Visionary', 'puntuacion' => '★★★★★', 'texto' => 'La diferencia se nota. Colores vibrantes y sin ghosting.']
        ]
    ],
    8 => [
        'id' => 8,
        'nombre' => 'Silla Gamer',
        'descripcion_corta' => 'Ergonómica, reclinable',
        'precio' => 180,
        'precio_formateado' => '$180',
        'imagen' => 'https://images.unsplash.com/photo-1629864275069-1c9f029392e2?q=80&w=2670&auto=format&fit=crop',
        'descripcion_larga' => 'Comodidad para maratones de juego. Esta silla ergonómica te permite mantener la postura correcta durante horas, evitando la fatiga y el dolor de espalda.',
        'especificaciones' => [
            'Material' => 'Cuero sintético',
            'Reclinación' => '180 grados',
            'Soporte' => 'Lumbar y de cuello ajustable'
        ],
        'resenas' => [
            ['autor' => 'ComfyGamer', 'puntuacion' => '★★★★★', 'texto' => 'Muy cómoda, vale cada céntimo. Me ha salvado la espalda en las largas sesiones.']
        ]
    ]
];

// Ruta principal que ahora muestra la lista de productos
Route::get('/', function () use ($productos) {
    return view('listaproductos', ['productos' => $productos]);
});
