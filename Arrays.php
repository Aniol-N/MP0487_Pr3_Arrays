<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays en PHP</title>
</head>


<body>
    <h1>EJERCICIO 1</h1>
    <?php
    $array = array("dato 1º" => "Sara", "dato 2º" => "Martinez", "dato 3º" => 23, "dato 4º" => "Barcelona");
    //    var_dump(value: $array);

    foreach ($array as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
    <br>


    <h1>EJERCICIO 2</h1>
    <?php

    $array2 = array("Nombre" => "Sara", " Apellido" => "Martinez", " Edad" => 23, " Ciudad" => "Barcelona");

    foreach ($array2 as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
    <br>


    <h1>EJERCICIO 3</h1>
    <?php
    $array["dato 3º"] = 24;
    foreach ($array as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>

    <h1>EJERCICIO 4</h1>
    <?php
    $array4 = array("Nombre" => "Sara", " Apellido" => "Martinez", " Edad" => 24, " Ciudad" => "Barcelona");
    unset($array4[" Ciudad"]);
    var_dump(value: $array4);
    ?>

    <h1>EJERCICIO 5</h1>
    <?php

    $result;

    $letters = 'a,b,c,d,e,f';
    $array5 = array();
    foreach (explode(',', $letters) as $piece) {
        array_push($array5, $piece);
    }
    $arrayDesordenado = rsort($array5);
    print_r($arrayDesordenado);
    /*
    echo "Desordenado: " . "<br>";
    $key5 = "letter_6º, letter_5º, letter_4º, letter_3º, letter_2º, letter_1º";
    $letters = "a,b,c,d,e,f";
    foreach ($array3 as $key5 => $value) {
        echo "$key5: $value <br>";
    }
    echo "Ordenado: ";
    print_r (value: explode(" ", $key5));
    echo "<br>";
    print_r (value: explode(": ", $letters));
    echo "<br>";*/
    ?>

    <h1>EJERCICIO 6</h1>
    <?php
    echo "Notas de los estudiantes: ";
    $array6 = array("Miguel: " => 5, "Luís: " => 7, "Marta: " => 10, "Isabel: " => 8, "Aitor" => 4, "Pepe" => 1);
    arsort(array: $array6);

    foreach ($array6 as $key => $value) {
        echo "$key $value" . " ";
    }

    ?>
    <h1>EJERCICIO 7</h1>
    <?php
    $suma = array_sum($array6);
    $media = $suma / count($array6);
    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    echo "Alumnos con nota por encima de la media: <br>";
    foreach ($array6 as $nombre => $nota) {
        if ($nota > $media) {
            echo $nombre . ": " . $nota . "<br>";
        }
    }
    ?>
    <h1>EJERCICIO 8</h1>
    <?php
    $nota_mas_alta = max($array6);
    $mejor_alumno = array_search($nota_mas_alta, $array6);
    echo "La nota más alta es: " . $nota_mas_alta . "<br>";
    echo "El mejor alumno de la clase es: " . $mejor_alumno
    ?>

</body>

</html>