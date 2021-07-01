<?php 
  $urlsinparametros= explode('?', $_SERVER['REQUEST_URI'], 2);
  if(isset($_GET["gclid"])){
    echo '<link rel="canonical" href="'.$_SERVER["HTTP_HOST"] . $urlsinparametros[0].'">';
  }else{
    echo '<link rel="canonical" href="'.$_SERVER['HTTP_HOST'].' '.$_SERVER['REQUEST_URI'].'">';
  }
  ?>