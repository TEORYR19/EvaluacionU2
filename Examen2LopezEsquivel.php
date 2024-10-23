<?php
/*CBTIS 89 
programa que calcula el IVA de algunos productos
Jesus Andres Lopez Esquivel
3°A Programacion Matutino
*/
// Definir los arreglos iniciales con precios
$arrayPrecios = [500, 400, 200,700,100];
$arrayIVA = [];
$arraySubtotal = [];
$arrayDescuentos = [];
$arrayTotal = [];

// Función para calcular el IVA (16%)
function calcularIVA($precio) {
    return $precio * 0.16;
}

// Función para calcular el subtotal (precio + IVA)
function calcularSubtotal($precio, $iva) {
    return $precio + $iva;
}

// Función para aplicar descuento del 10%
function aplicarDescuento($subtotal) {
    return $subtotal * 0.90; // Se aplica un 10% de descuento
}

// Recorrer los precios para calcular IVA, Subtotal, Descuentos y Total
for ($i = 0; $i < count($arrayPrecios); $i++) {
    // Calcular IVA
    $iva = calcularIVA($arrayPrecios[$i]);
    $arrayIVA[] = $iva;

    // Calcular Subtotal (precio + IVA)
    $subtotal = calcularSubtotal($arrayPrecios[$i], $iva);
    $arraySubtotal[] = $subtotal;

    // Aplicar descuento del 10%
    $descuento = aplicarDescuento($subtotal);
    $arrayDescuentos[] = $descuento;

    // Almacenar el total en el arreglo arrayTotal
    $arrayTotal[] = $descuento;
}

// Imprimir los resultados
echo "ARREGLO PRECIOS: " . implode(", ", $arrayPrecios) . "\n";
echo "ARREGLO IVA: " . implode(", ", $arrayIVA) . "\n";
echo "ARREGLO SUBTOTAL: " . implode(", ", $arraySubtotal) . "\n";
echo "ARREGLO DESCUENTOS: " . implode(", ", $arrayDescuentos) . "\n";
echo "ARREGLO TOTAL: " . implode(", ", $arrayTotal) . "\n";
?>
	
