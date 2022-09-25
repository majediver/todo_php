<?php

/*
Los nombres de espacios  o namespaces no son case sesitive
-Se usan para evitar la colision de nombres entre otras bibliotecas o archivos
-Usa la palabra reservada namespace.
- se pueden definir clases, interfaces, funciones y constantes.
-Siempre van en la primera linea.
-Usan el caracter contrabarra (\) para referirse a un subdirectorio o nombre de archivo.

*/

/*
Es muy importante, porque podemos de pronto tener nuestro proyecto en PHP y nosotros necesitamos
alguna librería externa para imprimir, para reportes, para alguna cosa, y resulta que alguno de esos
nombres de clases, de esos archivos, ya existen, ya los tenemos en nuestro proyecto con el mismo
nombre.
Entonces puede haber un conflicto de nombres, de clases o de archivos.
Aquí los los namespace nos ayudan a solucionar este problema.
*/

// incluir namespace

include "ConstantesNameSpaces.php";

// Acceder al namespace
 echo constantes1\NOMBRE_ARCHIVO;
 

?>