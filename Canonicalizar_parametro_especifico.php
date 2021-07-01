<?php 
//puedes incluir los parametros específicos que quieres canonicalizar , como id_session, gclid, user_id etc
//en el caso de no aparecer el parametro (s) concreto en la URL, se autocanonicaliza
  $urlsinparametros= explode('?', $_SERVER['REQUEST_URI'], 10);
  if(isset($_GET["parametro_1"])||isset($_GET["parametro_2"])){
    echo '<link rel="canonical" href="'.$_SERVER["HTTP_HOST"] . $urlsinparametros[0].'">';
  }else{
    echo '<link rel="canonical" href="'.$_SERVER['HTTP_HOST'].' '.$_SERVER['REQUEST_URI'].'">';
  }
  ?>