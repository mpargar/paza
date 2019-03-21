
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
*   -> condominiums
*/
function condominios () {
  include_once 'public/condominiums.php';
} function condominiums () { condominios(); }

/* 
*   -> casas
*/
function casas () {
  include_once 'public/houses.php';
} function houses () { casas(); }

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
  include_once 'public/casa-balandra.php';
}

/*
*    -> /casaBalandra
*/
function salvatierra () {
  include_once 'public/salvatierra.php';
}

/*
*    -> /Puerta Cortez
*/
function puertaCortes () {
  include_once 'public/puertaCortes.php';
}

/*
*    -> /Puerta Cortez
*       -> /Colinas
*/
function colinas () {
  include_once 'public/colinas.php';
}
/*
*    -> /Puerta Cortez
*       -> /vistamar
*/
function vistamar () {
  include_once 'public/vistamar.php';
}

function generalRealEstate () {
  include_once 'public/generalRealEstate.php';
}

function terrenos () {
  include_once 'public/lands.php';
} function lands () { terrenos(); }

/*

DEPRECATED

function construccion () {
  include_once 'public/build.php';
} function build () { construccion(); }
*/


?>
