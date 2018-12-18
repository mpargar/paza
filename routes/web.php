
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
*    -> /sell
*/
function vende () {
  include_once 'public/sell.php';
} function sell () { vende(); }


/*
*    -> /rent
*/
function renta () {
  include_once 'public/rent.php';
} // function rent () { renta(); }


/*
*    -> /administration
*/
function administracion () {
  include_once 'public/administration.php';
} // function administration () { administracion(); }

/*
*    -> /casaBalandra
*/
function casaBalandra () {
  include_once 'public/casaBalandra.php';
}

/*

DEPRECATED

function construccion () {
  include_once 'public/build.php';
} function build () { construccion(); }
*/


?>
