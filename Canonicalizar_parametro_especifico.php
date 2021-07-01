<?php 
//con este codigo podemos canonicalizar URLs con parametros especificos. Por ejemplo, los parametros de seguimiento o IDs de usuarios/sesion
  $urlsinparametros= explode('?', $_SERVER['REQUEST_URI'], 5);
  isset($_GET["parametro"]) ? print '<link rel="canonical" href="'.$_SERVER["HTTP_HOST"] . $urlsinparametros[0].'">' : '';
?>