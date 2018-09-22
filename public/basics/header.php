<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <title>Paza real state</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/R/bundle.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
</head>
<body>
  <header>
    <img src="/R/img/menu.svg" alt="menu" class="hambgr-menu" id="$hambgr">
    <nav id="$nav">
      <a href="/<?=LANG?>/">
        <img src="/R/img/logo_paza.png" alt="Paza Real Estate Logo" width="130">
      </a>
      <ul>
        <li class="close">
          <img src="/R/img/close.svg" alt="Ícono para cerrar">
        </li>
        <li class="<?= ($site==1?'current':'') ?>">
          <a href="/<?=LANG?>/">
            <?=HOME_TITLE?>
          </a>
        </li>
        <li>
          <a href="#">
            <?=BUY_TITLE?>
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.94 0L4 3.09042L7.06 0L8 0.951417L4 5L0 0.951417L0.94 0Z"/>
            </svg>
          </a>
          <ul>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 1</a></li>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 2</a></li>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 3</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <?=ADMIN_TITLE?>
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.94 0L4 3.09042L7.06 0L8 0.951417L4 5L0 0.951417L0.94 0Z"/>
            </svg>
          </a>
          <ul>
            <li><a href="/<?=LANG?>/<?=ADMIN_LINK?>">MENU ITEM 1</a></li>
            <li><a href="/<?=LANG?>/<?=ADMIN_LINK?>">MENU ITEM 2</a></li>
            <li><a href="/<?=LANG?>/<?=ADMIN_LINK?>">MENU ITEM 3</a></li>
          </ul>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=BUILD_LINK?>">
            <?=BUILD_TITLE?>
          </a>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=DECOR_LINK?>">
            <?=DECOR_TITLE?>
          </a>
        </li>
        <li>
          <a href="/<?=LANG?>/<?=CONTA_LINK?>">
            <?=CONTA_TITLE?>
          </a>
        </li>
      </ul>
    </nav>
  </header>
