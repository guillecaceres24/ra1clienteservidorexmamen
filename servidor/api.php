<?php

header('Access-Control-Allow-Origin: *');

$productos = [
    [
        "id" => 1,
        "nombre" => "Camiseta básica",
        "descripcion" => "Camiseta de algodón 100% en varios colores.",
        "precio" => 12.99,
        "img" => "https://euroserigrafia.com/26137-large_default/camiseta-basica-de-algodon-personalizada.jpg",//Añado un nuevo campo para la imagen
        "categoria" => "Ropa"//Añado un nuevo campo para la categoría

    ],
    [
        "id" => 2,
        "nombre" => "Pantalón vaquero",
        "descripcion" => "Pantalón de mezclilla azul clásico.",
        "precio" => 29.95,
        "img" => "https://www.masproteccionlaboral.com/5947-large_default/pantalon-vaquero-103018s-denim-stretch.jpg",
        "categoria" => "Ropa"
    ],
    //Añado nuevos productos a la web:
    [
        "id" => 3,
        "nombre" => "Zapatillas deportivas",
        "descripcion" => "Zapatillas ligeras y cómodas para el día a día.",
        "precio" => 45.50,
        "img" => "https://zapatosbaratos-lowcost.com/127861-large_default/zapatilla-cv-roja.jpg",
        "categoria" => "Calzado"
    ],
    [
        "id" => 5,
        "nombre" => "Gafas de sol",
        "descripcion" => "Gafas bonitas y cómodas para el día a día.",
        "precio" => 25.50,
        "img" => "https://m.media-amazon.com/images/I/613iCSsUzYL.jpg",
        "categoria" => "Accesorios"
    ],
    [
        "id" => 6,
        "nombre" => "Botas de montaña",
        "descripcion" => "Perfectas para la montaña",
        "precio" => 72.20,
        "img" => "https://lavalencianacalzados.com/blog/wp-content/uploads/2023/03/07384B1A-B082-4CC4-89B3-42CE4D1BA4F0-1-1024x1020.jpg",
        "categoria" => "Calzado"
    ],
    [
        "id" => 7,
        "nombre" => "Gorra de béisbol",
        "descripcion" => "Para cubrirte del sol",
        "precio" => 12,
        "img" => "https://is4.revolveassets.com/images/p4/n/tv/QUIR-MA12_V1.jpg",
        "categoria" => "Accesorios"
    ],
    [
        "id" => 8,
        "nombre" => "Sudadera gris",
        "descripcion" => "Para el invierno",
        "precio" => 30.99,
        "img" => "https://cdn.palbincdn.com/users/31244/images/SUDADERA-CAPUCHA-CLASICA-CUSTOMIZASHOP-NINO-COLOR-GRIS-MEZCLA-1612033290.jpg",
        "categoria" => "Ropa"
    ],
    [
        "id" => 9,
        "nombre" => "Chanclas",
        "descripcion" => "Para la playa",
        "precio" => 8.50,
        "img" => "https://images.napali.app/global/quiksilver-products/all/default/xlarge/aqyl101357_quiksilver,p_cvj1_frt1.jpg",
        "categoria" => "Calzado"
    ],
        
];

if (isset($_GET['id'])) {
    header('Content-Type: application/json');
    $id = intval($_GET['id']);
    foreach ($productos as $p) {
        if ($p['id'] === $id) {
            echo json_encode($p);
            exit;
        }
    }
    echo json_encode(["error" => "Producto no encontrado"]);
 }else if (isset($_GET['modo']) && $_GET['modo'] === 'texto') {
    header('Content-Type: text/html; charset=UTF-8');
    mostrarProductosJSON($productos);
} //Pista debes detectar el max con  el get para el ejercicio--> Ejercicio 4: Filtrado de productos por GET
else {
    echo json_encode($productos);
}


///Función que muestra por pantalla un listado de productos.
//http://localhost/ra1clienteservidorexmamen/servidor/api.php?modo=texto
function mostrarProductosJSON($productos) {
    echo "--- Lista de productos ---<br>";
    $json = json_encode($productos);
    $array = json_decode($json, true);
    foreach ($array as $producto) {
        echo $producto['nombre'] . " - " . $producto['precio'] . " $ <br>";
    }
    //Crear un foreach para recorrerlo  y pintar por pantalla, el id, nombre y precio del producto
}


   
