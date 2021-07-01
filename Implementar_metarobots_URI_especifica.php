<?php 
//Tienes que definir una regex que coincida con la URI a la que quieres implementar el meta
$uri = $_SERVER["REQUEST_URI"];
if(preg_match("/%RegEx%/", $uri)) 
{
 echo '<meta name="robots" content="%lo que quieras%">';
} else {
    echo '';
} 
?>