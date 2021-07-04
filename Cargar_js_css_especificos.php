<?php 
//Tienes que definir una regex que coincida con la URI a la que quieres cargar el js o css depurado
//Si coincide te carga el css depurado, y si no, te pinta el css normal
$uri = $_SERVER["REQUEST_URI"];
if(preg_match("/%RegEx%/", $uri)) 
{
 echo '<link href="https://domain.com/css/css-depurado.css" rel="stylesheet">';
} else {
    echo '<link href="https://domain.com/css/css-normal.css" rel="stylesheet">';
} 
?>

<?php 
//Tienes que definir una regex que coincida con la URI a la que quieres cargar el js o css depurado
//Si coincide te carga el js depurado, y si no, te pinta el js normal
$uri = $_SERVER["REQUEST_URI"];
if(preg_match("/%RegEx%/", $uri)) 
{
 echo '<script src="https://domain.com/js/js-depurado.js"></script>';
} else {
    echo '<script src="https://domain.com/js/js-normal.js"></script>';
} 
?>