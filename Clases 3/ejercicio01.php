<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .producto {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            display: inline-block;
            text-align: left;
        }

        img {
            width: 100px; /* Establece el ancho fijo para todas las imágenes */
            border-radius: 8px;
        }

        h2 {
            color: #333;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>

    <?php
    // Simular datos de productos (puedes agregar más según sea necesario)
    $productos = array(
        array(
            'nombre' => 'Producto 1',
            'descripcion' => 'Descripción del Producto 1',
            'precio' => 20.99,
            'imagen' => 'imagen1.jpg'
        ),
        array(
            'nombre' => 'Producto 2',
            'descripcion' => 'Descripción del Producto 1',
            'precio' => 20.99,
            'imagen' => 'imagen2.jpg'
        ),
        
        
        // Agrega más productos según sea necesario
    );

    // Mostrar el primer producto
    $producto = $productos[0];
    echo "<div class='producto'>";
    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
    echo "<h2>{$producto['nombre']}</h2>";
    echo "<p>{$producto['descripcion']}</p>";
    echo "<p>Precio: $ {$producto['precio']}</p>";
    echo "<button onclick=\"agregarAlCarrito('{$producto['nombre']}', {$producto['precio']})\">Agregar al Carrito</button>";
    echo "</div>";

    // Mostrar el segundo producto
    $producto = $productos[1];
    echo "<div class='producto'>";
    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
    echo "<h2>{$producto['nombre']}</h2>";
    echo "<p>{$producto['descripcion']}</p>";
    echo "<p>Precio: $ {$producto['precio']}</p>";
    echo "<button onclick=\"agregarAlCarrito('{$producto['nombre']}', {$producto['precio']})\">Agregar al Carrito</button>";
    echo "</div>";
    ?>

    <script>
        function agregarAlCarrito(nombre, precio) {
            alert('Producto agregado al carrito: ' + nombre + ' - Precio: $' + precio);
        }
    </script>
</body>
</html>
