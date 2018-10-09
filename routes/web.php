
<?php

/* - - - - - - - - - - - - - - - - -
|  ROUTES
|- - - - - - - - - - - - - - - - - -
| Define all routes for use
| remember register on index.php
| before to declare function
|- - - - - - - - - - - - - - - - - */


function home () {
  include_once 'public/home.php';
}

/*
*    -> /contacto
*/
function contacto () {
  include_once 'public/contact.php';
} function contact() { contacto(); }

/*
*    -> /buy
*/
function comprar () {
  include_once 'public/buy.php';
} function buy () { comprar(); }


/*
*    -> /buy
*/
function vende () {
  include_once 'public/sell.php';
} function sell () { vende(); }

?>
