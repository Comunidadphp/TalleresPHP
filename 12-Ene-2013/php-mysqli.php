<?php
/*NameBase = tallerPHPMysqli
*user = root
*password = pronuer
*Los datos anteriores son de ejemplo
*/
/*
* Script para crear la tabla de ejemplo
*create table registro_padre (
*id int auto_increment not null,
*dato_uno varchar(200) not null,
*dato_2 int not null,
*constraint id_pk
*primary key(id)        
*        )ENGINE = INNODB;
*/
$conexion = new mysqli('localhost','root','pronuer','tallerPHPMysqli');
//print_r($conexion);
if($conexion->connect_errno){
    echo "no conexion";
}
 else {
    echo "si conexion";
}
$sql ="
insert into registro_padre
(dato_uno,dato_2)
values
('Dato Char',56)";

if($conexion->query($sql))
{    
   echo "se inserto: ".$conexion->insert_id;
   //print_r($conexion);
}
else
{   
   echo "fallo el insert <br>";
   //print_r($conexion);
}
$sqlS= "Select id, dato_uno
from registro_padre
order by id";
$res = $conexion->query($sqlS);
while($fila = $res->fetch_assoc())
{
   echo "<br> id".$fila["dato_uno"]; 
}
$conexion->close();
?>