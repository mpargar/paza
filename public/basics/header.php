<!DOCTYPE html>
<html lang="<?= $_GET['lang'] ?>">
<head>
  <meta charset="UTF-8">
  <title>Paza Real Estate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/R/bundle.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="icon" type="image/png" href="/R/img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/R/img/favicon-16x16.png" sizes="16x16" />
</head>
<body>
  <header>
    <img src="/R/img/menu.svg" alt="menu" class="hambgr-menu" id="$hambgr">
    <nav id="$nav">
      <!-- <a href="/<?=LANG?>/"> -->
        <div class="header-left">
          <img src="/R/img/logo_paza.png" alt="Paza Real Estate Logo" width="130">
          <ul>
            <li>Teléfono: <a href="tel:+526121234625">+52.612.123.4625</a></li>
            <li>Celular: <a href="tel:+526121390675">+52.612.139.0675</a> <a href="https://wa.me/526121390675" target="_blank"><img src="/R/img/whatsapp.png"> Enviar whatsapp</a></li>
            <li>e-mail: <a href="mailto:info@pazarealestate.com">info@pazarealestate.com</a></li>
          </ul>
        </div>
      <!-- </a> -->
      <ul>
        <li class="close">
          <img src="/R/img/close.svg" alt="Ícono para cerrar">
        </li>
        <li>
          <a href="/<?=LANG?>/">
            <?=HOME_TITLE?>
            <!--
            Caret
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.94 0L4 3.09042L7.06 0L8 0.951417L4 5L0 0.951417L0.94 0Z"/>
            </svg> -->
          </a>
          <!--
           SUBMENU
           <ul>
            <li><a href="#">MENU ITEM 1</a></li>
          </ul> -->
        </li>
        <li>
          <a href="/<?=LANG?>/<?=BUY_LINK?>">
            <?=BUY_TITLE?>
          </a>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=SELL_LINK?>">
            <?=SELL_TITLE?>
          </a>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=RENT_LINK?>">
            <?=RENT_TITLE?>
          </a>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=ADMIN_LINK?>">
            <?=ADMIN_TITLE?>
          </a>
        </li>
        <!-- <li>
          <a href="/<?=LANG?>/<?=B_AND_D_LINK?>">
            <?=B_AND_D_TITLE?>
          </a>
        </li> -->
        <li class="current">
          <a href="/<?=LANG?>/<?=CONTACT_LINK?>">
            <?=CONTACT_TITLE?>
          </a>
        </li>
      </ul>
    </nav>
  </header>
<span id="darkLayer"></span>
