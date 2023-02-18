<?php 
    // -- VARIABLES --

    // Creacion de una variable
    $nombre = "Juan";

    // -- VARIABLES CONSTANTES -- 

    // Creacion de una variable constante. El primer parametro es el nombre, el segundo es el valor. Buena practica: Definirlas en MAYUSCULAS para diferenciarlas mejor
    define('NUMERO_PI', '3.14');

    // Creacion de un array constante
    define('ANIMALES', [
        'Perro',
        'Gato',
        'Tortuga',
        'Gallina',
        'Vaca'
    ]);

    // El metodo "defined" permite saber si existe una variable constante definida con ese nombre
    if(defined('NUMERO_PI')) {
        echo "Si se ha definido";
    } else {
        echo "No se ha definido";
    }

    // Salto de linea
    echo "<br>";
    echo "<br>";

    // Constantes predefinidas:

    // Muestra la version de PHP
    echo "Mi version de PHP es: " . PHP_VERSION;
    echo "<br>";
    // Muestra el sistema operativo
    echo "Mi sistema operativo es: " . PHP_OS;
    echo "<br>";
    // Muestra la ruta de las extenciones
    echo PHP_EXTENSION_DIR;
    echo "<br>";
    // Muestra la API del servidor
    echo PHP_SAPI;
    echo "<br>";
    // Muestra la linea donde se encuentra
    echo __LINE__;
    echo "<br>";
    // Muestra el archivo actual
    echo __FILE__;

    echo "<br>";
    echo "<br>";

    // -- TIPOS DE DATOS --

    // Dato tipo integer (Numeros)
    $numero = 1;
    // Dato tipo float o double (Numeros con decimales). Se convierte en double cuando tiene muchos decimales
    $decimales = 2.25;
    // Dato tipo String (Palabras). Para almacenar valores que utilizan comillas usar \" \". Para almacenar $ usar \
    $palabra = "Hola \"Juan\" y tengo mucho \$Dinero";
    // Dato tipo bool (True o false). true se representa como 1 y false como 0
    $booleano = true;

    // -- OPERADORES --

    // De asignacion: =
    // De valores unarios: -X (Invierte el signo de una la variable. Ej: -$numero)

    // -- OPERADORES MATEMATICOS --

    // De suma: +
    // De resta: -
    // De multiplicacion: *
    // De divicion: /
    // De modulo(Resto de divicion): %

    // -- OPERADORES DE COMPARACION --

    // Se utiliza para ver true o false en vez de 1 o 0
    var_dump(1 == 0);

    echo "<br>";
    echo "<br>";

    // Igual a: ==
    // Distinto de: <> o !=
    // Mayor que: >
    // Mayor o igual que: >=
    // Menor que: <
    // Menor o igual: <=

    // -- OPERADORES LOGICOS --

    // Si la variable almacena una linea de caracteres vacia ("") se considerara false; de lo contrario se considerara true. La palabra null tambien se considera false

    // And: &&
    // Or: ||

    // -- OPERADORES DE ASIGNACION COMBINADA --

    // ++ y -- se pueden usar delante o detras de la variable. MODIFICA EL ORDEN EN LAS ASIGNACIONES

    // ++: Para aumentar en una unidad
    // --: Para dismunuir en una unidad
    // +=: Para sumar dos variables y asignar el resultado a una variable
    // -=: Para restar dos variables y asignar el resultado a una variable
    // *=: Para multiplicar dos variables y asignar el resultado a una variable
    // /=: Para dividir dos variables y asignar el resultado a una variable
    // %=: Para obtener el resto de dos variables y asignar el resultado a una variable

    // -- ESTRUCTURAS CONDICIONALES --

    // El condicional if permite ejecutar cierto codigo si la condicion es verdadera
    if(1 == 1) {
        echo "1 es igual a 1";

        echo "<br>";
        echo "<br>";

    // El elseif permite aplicar una segunda condicion, si la primera es falsa
    } elseif(1 == 2) { 
        echo "1 es igual a dos";

    // El else se ejecuta cuando ninguna condicion se cumple
    } else { 
        echo "No se encontraron similitudes entre los valores";
    }

    // -- OPERADORES TERNARIOS --

    // Permite crear un condicional en una sola linea de codigo
    $opTer = 10 > 12 ? "Mayor" : "Menor";
    echo $opTer;

    echo "<br>";

    // Permite crear un condicional anidado
    $opTerAni = 10 > 10 ? "Mayor" : ( 10 < 10 ? "Menor" : "Igual" );
    echo $opTerAni;

    echo "<br>";
    echo "<br>";

    // -- ESTRUCTURAS DE SELECCION MULTIPLE --

    $dia = 3;

    // La estructura switch compara una variable con diversos casos
    switch($dia) {
        case 1:
            echo "Lunes <br>";

            // El break define el fin de un case para pasar al siguiente
            break;
        case 2:
            echo "Martes <br>";
            break;
        case 3:
            echo "Miercoles <br>";
            break;
        case 4:
            echo "Jueves <br>";
            break;
        case 5:
            echo "Viernes <br>";
            break;
        case 6:
            echo "Sabado <br>";
            break;
        case 7:
            echo "Domingo <br>";
            break;

        // El default se ejecuta si ninguno de los anteriores es true
        default:
            echo "Opcion invalida <br>";
            break;
    }

    // La estructura match es igual a switch, pero es mas compacta, simple y legible. Solo se puede usar si se va a imprimir algo en pantalla, por eso se declara dentro de un echo
    echo match($dia) {
        1 => "Lunes <br>",
        2 => "Martes <br>",
        3 => "Miercoles <br>",
        4 => "Jueves <br>",
        5 => "Viernes <br>",
        6 => "Sabado <br>",
        7 => "Domingo <br>",
        default => "Opcion invalida <br>"
    };

    echo "<br>";

    // -- ESTRUCTURAS REPETITIVAS (BUCLES) --

    $x = 11;

    // Se ejecuta hasta que la condicion se vuelva false
    while($x <= 10) {
        echo "Soy un bucle WHILE <br>";

        // IMPORTANTE: Aumenta $i para evitar un bucle infinito
        $x++;
    }

    // Se ejecuta AL MENOS UNA VEZ sin importar si la condicion es true o false
    do {
        echo "Soy un bucle DO WHILE <br>";

        $x++;
    } while($x <= 10);

    echo "<br>";

    // -- ESTRUCTURAS REPETITIVAS II --

    // Es igual al while, pero la variable, la condicion y el incremento - decremento se encuentran entre los parentesis 
    for($i = 0; $i <= 10; $i++) {
        echo "Soy un bucle FOR <br>";
    }

    echo "<br>";

    $nombres = ["Juan", "Cata", "Rosalia", "Gustavo"];

    // La estructura foreach sirve para ejecutar comandos sobre cada valor almacenado en un array. El primer parametro corresponde al array de donde se obtienen los valores, el segundo (Opcional) es donde se almacena el indice del elemento, y el tercero es donde se almacena el valor del elemento
    foreach($nombres as $indice => $xNombre) {
        echo $indice . ". " . $xNombre . "<br>";
    }

    echo "<br>";

    // -- BREAK, CONTINUE, EXIT Y DIE --

    for($i = 1; $i <= 20; $i++) {
        if($i == 11) {
            // El break rompe el flujo del bucle, haciendo que el bucle termine donde se encuentra este comando
            /* break; */
        }

        if($i == 7) {
            // El continue salte una iteracion del bucle
            /* continue */;
        }

        if($i == 9) {
            // exit() o die() hacen que el programa finalize completamente
            /* 
            exit();
            die(); 
            */
        }

        echo $i . "<br>";
    }

    echo "<br>";

    // -- FUNCIONES --

    // Funciones predefinidas:
    echo "Marca de tiempo: " . time() . "<br>";
    echo "Raiz cuadrada de 9: " . sqrt(9) . "<br>";
    echo "Numero aleatorio entre 90 y 100: " . rand(90, 100) . "<br>";
    echo "Numero PI: " . pi() . "<br>";

    echo "<br>";

    // Las funciones sirven para reutilizar codigo. Entre los parentesis va una variable que va a recibir datos (Opcional)
    function CalcFactorial($numFact) {
        $resultado = 1;

        for($i = 1; $i <= $numFact; $i++) {
            $resultado *= $i;
        }

        echo "El factorial de $numFact es: $resultado";

        // El return permite retornar el valor de una variable
        /* return $resultado; */
    }

    // Para llamar a una funcion se ddebe poner su nombre, y si tiene parametros, se deben ingresar dentro de los parentesis
    CalcFactorial(5);

    // Si se retorna un valor, se debe almacenar en una variable
    /* $resultado = CalcFactorial(5); */

    echo "<br>";
    echo "<br>";

    // -- AMBITO DE LAS VARIABLES --

    $variableGlobal = 10;
    $varGlobalPar = 5;

    // Al utilizar & antes del nombre de la variable se esta diciendo que se tomo la variable entera y no solo su valor
    function VarGlobal(&$n) {
        // Para poder usar variables globales dentro de una funcion se debe anteponer la palabra global
        global $variableGlobal;

        echo $variableGlobal;

        $n += 10;
    }

    VarGlobal($varGlobalPar);
    echo "<br>" . $varGlobalPar;

    echo "<br>";
    echo "<br>";

    // -- ARGUMENTOS FIJOS Y VARIABLES DE UNA FUNCION --

    // Si a un parametro se le asigna un valor, este sera su valor predeterminado, el cual adoptara cuando no se le pase un valor al llamar la funcion. Esto lo convierte en un parametro OPCIONAL
    function PreciosProductos($producto, $precio = 1000) {
        echo "El $producto vale \$$precio";
    }

    // Funcion SIN el parametro de precio
    PreciosProductos("Cuadro");
    echo "<br>";
    // Funcion CON el parametro de precio
    PreciosProductos("Sillon", 5000);

    echo "<br>";

    // Al poner tres puntos antes del parametro se esta diciendo que no se sabe cuantos valores se le van a pasr a la funcion. Todos los parametros que se pasen se guardaran en un array (En este caso $palabras)
    function ConcatenarPalabras(...$palabras) {
        $resultado = "";

        foreach($palabras as $palabra) {
            $resultado .= $palabra . " ";
        }

        echo $resultado;
    }

    ConcatenarPalabras("Hola", "mundo");

    echo "<br>";
    echo "<br>";

    // -- FUNCIONES CON TIPADO DEFINIDO -- 

    // Si se declara el tipado estricto (Como primer linea de codigo, al principio), la funcion no convertira los float a su entero mas cercano, sino que dara error
    /* declare(strict_types = 1); */

    // Si se pone el tipo de variable que se espera recibir, solo podra recibir valores del mismo tipo. Los dos puntos luego de los parentesis definen el tipo de variable que devuelve la funcion. La barra sirve para añadir mas tipos de salidas
    function SumarEnteros(int $entero1, int $entero2): int | float {
        return $entero1 + $entero2;
    }

    $resultadoSumaEnt = SumarEnteros(2, 3);

    echo $resultadoSumaEnt;

    echo "<br>";
    echo "<br>";

    // -- CADENA DE CARACTERES O STRING --

    $cadena = "AEIOÚI mundo";

    // Al indicar un indice se mostrara la letra que ocupe ese espacio
    echo $cadena[1] . "<br>";
    // Muestra la cantidad de bits de una palabra
    echo strlen($cadena) . "<br>";
    // Muestra la cantidad de letras de una palabra
    echo mb_strlen($cadena) . "<br>";
    // Muestra la posicion de la letra del principio al final
    echo strpos($cadena, 'I') . "<br>";
    // Muestra la posicion de la letra del final al principio
    echo strrpos($cadena, 'I') . "<br>";
    // Devuelve true si la palabra se encuentra dentro de la cadena
    echo str_contains($cadena, 'mundo') ? 'Si se encuentra'  . "<br>" : 'No se encuentra' . "<br>";
    // Devuelve true si la cadena empieza por X palabra
    echo str_starts_with($cadena, 'mundo') ? 'Si se encuentra'  . "<br>" : 'No se encuentra' . "<br>";
    // Devuelve true si la cadena termina en X palabra
    echo str_ends_with($cadena, 'mundo') ? 'Si se encuentra'  . "<br>" : 'No se encuentra' . "<br>";

    echo "<br>";

    $cadena1 = "Prueba";
    $cadena2 = "prueba";

    // Devuelve 0 si las cadenas son exactamente iguales
    if(strcmp($cadena1, $cadena2) == 0) {
        echo "Las cadenas son iguales <br>";
    } else {
        echo "Las cadenas son diferentes <br>";
    }

    // Devuelve 0 si las cadenas son iguales, ignorando las mayusculas y minusculas
    if(strcasecmp($cadena1, $cadena2) == 0) {
        echo "Las cadenas son iguales <br>";
    } else {
        echo "Las cadenas son diferentes <br>";
    }

    echo "<br>";

    // Subtrae letras de una cadena. El primer parametro corresponde a la cadena, el segundo al indice por donde empieza, y el tercero el indice por donde termina (Opcional). Si se ponen cifras negativas inciara desde el final
    echo substr($cadena, 1, 5) . "<br>";
    // Remplaza X palabra por otra
    echo str_replace("mundo", "asassasa", $cadena) . "<br>";
    // Convierte todas las mayusculas en minusculas
    echo strtolower($cadena) . "<br>";
    // Convierte todas las minusculas en mayusculas
    echo strtoupper($cadena) . "<br>";
    // Convierte la primer letra en mayuscula
    echo ucfirst($cadena2) . "<br>";
    // Convierte la primer letra de todas las palabras en mayuscula
    echo ucwords($cadena) . "<br>";

    echo "<br>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Curso PHP y MySQL</title>
</head>
<body>
    <?php
        echo "<br>";
        echo "<br>";
        
        // -- CONCATENACION DE VARIABLES --

        // Escribir dentro de un H1 un texto mas el valor almacenado en la variable
        echo "Hola Mundo! Mi nombre es $nombre"; 

        echo "<br>";

        // Cuando se utilizan comillas simples es necesario concatenar las variables
        echo 'Hola Mundo! Mi nombre es ' . $nombre; 

        echo "<br>";
        echo "<br>";

        // Muestra el valor de la constante NUMERO_PI
        echo NUMERO_PI; 

        echo "<br>";

        // Muestra el elemento en la posicion 0 de la constante ANIMALES
        echo ANIMALES[0];

        echo "<br>";
        echo "<br>";
    ?>
</body>
</html>