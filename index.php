
<?php

function isValid ( &$route ) {

  $validRoutes = [
    'compra',
    'administracion',
    'construccion',
    'decoracion',
    'contact'
  ];

  return in_array($route, $validRoutes);
}

include 'routes/web.php';

if ($_GET['lang']) {
  $lang = $_GET['lang'];
  if (isset($_GET['route']) && $_GET['route'] != '') {
    // require other routes
    if ( isValid($_GET['route']) ) {
      call_user_func($_GET['route'], $lang);
    } else {
      header("HTTP/1.0 404 Not Found");
  		include_once '404.php';
    }
  } else {
    // require home
    call_user_func('home', $lang);
  }
} else {
  header("Location: /es/");
}

?>
