
<?php

include 'routes/web.php';

function isValid ( &$route ) {

  $validRoutes = [
    /*
     español                 ingles        */
    'comprar',               'buy',
    'vende',                 'sell',
    'casas',                 'houses',
    'condominios',           'condominiums',
    'renta',                 /*'rent',*/
    'administracion',        /*'administration',*/
    /*'construccion',          'build',*/
    'contacto',              'contact',
    'casaBalandra',           /*  */
    'puertaCortes',
    'salvatierra',
    'colinas',
    'vistamar'
  ];

  return in_array($route, $validRoutes);
}

if ($_GET['lang']) {
  // import current lang
  $lang = $_GET['lang'];
  $route = $_GET['route'];
  require('resources/lang/' . $lang . '_lang.php');
  if (isset($route) && $route != '') {
    // require other routes
    if ( isValid($route) ) {
      call_user_func($route, $lang);
    } else {
      header("HTTP/1.0 404 Not Found");
  		include_once '404.php';
    }
  } else {
    // require home
    call_user_func('home', $lang);
  }
} else {
  header("Location: /en/");
}

?>
