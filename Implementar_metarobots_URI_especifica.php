<?php 
//Tienes que definir una regex que coincida con la URI a la que quieres implementar el meta
//Y definir la meta robots concreta que quieres definir (noindex,none,..)
$uri = $_SERVER["REQUEST_URI"];
if(preg_match("/%RegEx%/", $uri)) 
{
 echo '<meta name="robots" content="%lo que quieras%">';
} else {
    echo '';
} 
?>