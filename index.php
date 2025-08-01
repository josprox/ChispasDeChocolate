<?php
// imprime un mensaje de bienvenida en español como C
//printf( "¡Bienvenidos a Chispas de Chocolate!");
// imprime un mensaje de bienvenida en inglés como php
echo "Welcome to Chocolate Chips!\n";

// Declarar las variables antes de usarlas
$x = 0;
$y = 0;
echo "Enter two numbers: ";
// significado de fscanf: lee datos de la entrada estándar
fscanf(STDIN, "%d", $x);
fscanf(STDIN, "%d", $y);
$resultado = $x + $y;

/*
 * La función printf se utiliza para imprimir un mensaje formateado.
 * En este caso, imprime el resultado de la suma de dos números.
printf("The sum is: %d\n", $resultado);
*/
echo "The sum is: $resultado\n";

?>