<?php
/*
 * Taller de PHP desde Cero 
 * 2 de Febrero de 2013
 * Realizo Claudio Morales (@pronuer)
 * www.comunidadphp.org
 */
//Comentario de una sola linea

/* Comentarios
 * Multilinea
 * PHP no hace nada con lo que aparece aqui
 * PHP No manda este texto al Navegador
 */
//Instrucción para mandar salida al navegador
echo "<strong>ddd</strong>";
echo "<div style='text-align:center;' > 
     Titulo </div>";
echo "Hola Mundo desde adentro <br>";
//Declarar una variable de tipo Intenger
$edadPersona = 17;
//Declarar una variable de tipo Alfanumerico 
$nombrePersona = "claudios";
//Mandar una cadena de texto con una concatenación de una variable a la salida del navegador 
echo "Edad: ".$edadPersona."<br>";
//Declarar una variable de tipo Arreglo
$arrreglo[0] = 1;
$arrreglo[1] = 45;
//segunda forma para declarar un arreglo
$arreglo2 = array('Valor Uno','Valor dos');
echo $arrreglo[1];
// Operadores aritmeticos + - / * %
// Oper Compara ==, !=, <, > 
// oper Logicos  and, Or 
// oper incremento $a++ $a-- --- $a = $a+1;
//concatenar una variable con el contenido de la posicion cero de un arreglo
$resultado = $edadPersona+$arrreglo[0];
//almacenar  el resto de la division entre dos numeros;
$res2= 5%2;
echo "<br>las edades sumadas: ".$resultado;
echo "<br> mod: ".$res2;
$a = 2;
echo "<br>";
echo $a;
//incrementar el valor de la variable $a en uno de forma simple que es igual a decir $a=$a+1;
$a++;
echo $a;

//Se realiza una decision para mostrar un texto si el $edadPersona es mayor a 18 
if($edadPersona > 18)
{
   echo "<br>Puedes Votar"; 
}
else if($edadPersona == 17)
{
    echo "<br>Animo ya pronto votaras";
}
else
{
    echo "<br>No puedes Votar";
}
//se realiza otra decision mostrando un texto cuando la variable $nombrePersona es igual a la palabra claudio
if($nombrePersona == "claudio")
{
   echo "<br>Hola Amigo"; 
}
 else {
     echo "<br>Hola Cuate";
}

echo "<br>continua";
?>