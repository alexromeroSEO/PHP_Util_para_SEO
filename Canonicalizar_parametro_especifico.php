<?php 
  // pintar canonical hacia URL sin parametros
  $urlsinparametros= explode('?', $_SERVER['REQUEST_URI'], 2);
    if($_GET){
      
      echo '<link rel="canonical" href="'.$_SERVER["HTTP_HOST"] . $urlsinparametros[0].'">';
    }
  ?>