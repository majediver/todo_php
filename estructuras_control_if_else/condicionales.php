

<?php
//ejercicio 1 if else
    $edad = 12;
    if($edad >= 18){
        echo "Es mayor de edad";
    } else{
        "Es un menor de edad";
    }

//Ejercicio 2
    //&& es Y  si o si las dos condiciones deben cumplirse.
    //|| o or cualquiera de las condiciones ingresa.

    $identificacion = true;
    if($edad >= 18 && $identificacion == true){
        echo "Puede ingresar";
    } else{
        echo "no puede ingresar";
    }

    //la forma corta y correcta porque ya es true
    if ($edad >= 18 && $identificacion) {
        echo "Puede ingresar";
    } else {
        echo "no puede ingresar";
    }
//Ejercicio3
    $nombreCompleto = "Jose Montoya";
    if (!is_null($nombreCompleto)) {
        echo "El nombre no esta vacío";
    }else{
        echo "el nombre si está vacío";
    }