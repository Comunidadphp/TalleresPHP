<?php
/*
 * Segunda Sesion taller de PHP con Mysqli
 * 26 de Enero de 2013
 * Realizo Claudio Morales (@pronuer)
 * www.comunidadphp.org
 */
//Establecer conexion a base de datos
$conexion = new mysqli('localhost','root','pronuer','tallerPHPMysqli');
if($conexion->connect_errno)
{
    echo "fallo la conexion";
    die();
}
//---Se realiza una Consulta SQL preparada 
/*$sql = "insert into registro_padre
(dato_uno, dato_2)
values
(?,?)
";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("si",$a,$b);
//$a= "texto enviado";
//$b= 5;
//$sentencia->execute();
for($b=1; $b<=5; $b++)
{
    $a = "texto_dinamico_".$b;
    $sentencia->execute();
}
 * $sentencia->close();
*/

//--- Se realiza multiples consultas
/*
$sql = "select count(*) as cant from registro_padre;";
$sql .= "insert into registro_padre 
    (dato_uno, dato_2) values
    ('multi consulta',99);";
$sql .= "select count(*) as cant from registro_padre;";
if(!$conexion->multi_query($sql))
{
    echo "error";
}
do{
    if($res = $conexion->store_result())
    {
        $dato = $res->fetch_all(MYSQLI_ASSOC);
        echo "<br>-".$dato[0]["cant"];
        $res->free();
    }
    
}while($conexion->more_results() && $conexion->next_result() );
*/
//--- Se realizan consultas controlando el Commit y el rollback de las transacciones
$conexion->autocommit(false);
$sql = "insert into registro_padre 
    (dato_uno, dato_2) values
    ('no registro',44);";
$conexion->query($sql);
$conexion->rollback();
$sql2 = "insert into registro_padre 
    (dato_uno, dato_2) values
    ('SI registro',22);";
$conexion->query($sql2);
$conexion->commit();



?>
