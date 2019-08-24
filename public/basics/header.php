<!DOCTYPE html>
<html lang="<?= $_GET['lang'] ?>">
<head>
  <meta charset="UTF-8">
  <title>Paza Real Estate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="/R/bundle.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="icon" type="image/png" href="/R/img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/R/img/favicon-16x16.png" sizes="16x16" />

  <!-- jQuery -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129662429-25"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-129662429-25');
  </script>
  <script>
    jQuery(document).ready(function($) {
      $('a.link-email').click(function() {
          gtag('event', 'click', {'event_category': 'correo','event_label': 'email'});
      });
      $('a.link-tel').click(function() {
          gtag('event', 'click', {'event_category': 'telefono','event_label': 'llamada'});
      });
      $('a.link-whatsapp').click(function() {
          gtag('event', 'click', {'event_category': 'telefono','event_label': 'whatsapp'});
      });
    });
  </script>
</head>
<body>
  <header>
    <img src="/R/img/menu.svg" alt="menu" class="hambgr-menu" id="$hambgr">
    <nav id="$nav">
      <!-- <a href="/<?=LANG?>/"> -->
        <div class="header-left no-current">
          <a href="/<?=LANG?>/">
            <img src="/R/img/logo_paza.png" alt="Paza Real Estate Logo" width="130">
          </a>
          <ul>
            <li><?=CONTACT_FORM_PHONE?>: <a href="tel:+526121234625" class="link-tel">+52.612.123.4625</a></li>
            <li><?=CONTACT_FORM_CELL?>: <a href="tel:+526121390675" class="link-tel">+52.612.139.0675</a></li>
            <li><?=CONTACT_FORM_MAIL?>: <a href="mailto:info@pazarealestate.com" class="link-email">info@pazarealestate.com</a></li>
            <li style="display:flex;">
              Social:
              <a href="https://www.facebook.com/PAZA-Real-Estate-318085008733590/" target="_blank"><img src="/R/img/fb.png"></a>
              <a href="https://wa.me/526121390675" target="_blank" class="link-whatsapp"><img src="/R/img/whatsapp.png"></a>
              <a href="https://www.instagram.com/pazarealestate/" target="_blank"><img src="/R/img/instagram.png"></a>
            </li>
          </ul>
        </div>
      <!-- </a> -->
      <ul>
        <li class="close">
          <img src="/R/img/close.svg" alt="Ícono para cerrar">
        </li>
        <li>
          <a type="menu" href="/<?=LANG?>/">
            <?=HOME_TITLE?>
          </a>
        </li>
        <li>
          <a type="menu" href="#">
            <?=BUY_TITLE?>
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.94 0L4 3.09042L7.06 0L8 0.951417L4 5L0 0.951417L0.94 0Z"/>
            </svg>
          </a>
          <ul>
            <!-- <li><a type="menu" href="/<?=LANG?>/<?=BUY_LINK?>"><?=BUY_GENERAL?></a></li> -->
            <li><a type="menu" href="/<?=LANG?>/<?=BUY_HOUSE_LINK?>"><?=BUY_HOUSES_TITLE?></a></li>
            <li><a type="menu" href="/<?=LANG?>/<?=BUY_CONDOMINIUMS_LINK?>"><?=BUY_CONDOMINIUM_TITLE?></a></li>
            <li><a type="menu" href="/<?=LANG?>/<?=BUY_HOTELS_LINK?>"><?=HOTEL_TITLE?></a></li>
            <li><a type="menu" href="/<?=LANG?>/<?=BUY_LANDS_LINK?>"><?=BUY_LANDS_TITLE?></a></li>
          </ul>
        </li>
        <li>
          <a type="menu" href="/<?=LANG?>/<?=SELL_LINK?>">
            <?=SELL_TITLE?>
          </a>
        </li>
        <?php
          if ($_GET['lang'] == 'es') {
        ?>
        <li>
          <a type="menu" href="/<?=LANG?>/<?=RENT_LINK?>">
            <?=RENT_TITLE?>
          </a>
        </li>
        <li>
          <a type="menu" href="/<?=LANG?>/<?=ADMIN_LINK?>">
            <?=ADMIN_TITLE?>
          </a>
        </li>
        <?php
          }
        ?>
        <li>
          <a type="menu" href="/<?=LANG?>/<?=RESERVATIONS_LINK?>">
            <?=RESERVATIONS_TITLE?>
          </a>
        </li>
        <li>
          <a type="menu" href="/<?=LANG?>/<?=TOURS_LINK?>">
            <?=TOURS_TITLE?>
          </a>
        </li>
        <li class="current">
          <a type="menu" href="/<?=LANG?>/<?=CONTACT_LINK?>">
            <?=CONTACT_TITLE?>
          </a>
        </li>
      </ul>

      <div class="langs">
        <a type="menu" href="/es/"><img src="/R/img/mx.png"> ES</a>
        &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;
        <a type="menu" href="/en/"><img src="/R/img/us.png"> EN</a>
      </div>

    </nav>
  </header>
<span id="darkLayer"></span>
