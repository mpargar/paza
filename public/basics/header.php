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
        <li>
          <a href="/<?=LANG?>/">
            <?=HOME_TITLE?>
          </a>
        </li>
        <li>
          <a href="#">
            <?=BUY_TITLE?> <span>⌃</span>
          </a>
          <ul>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 1</a></li>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 2</a></li>
            <li><a href="/<?=LANG?>/<?=BUY_LINK?>">MENU ITEM 3</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <?=ADMIN_TITLE?> <span>⌃</span>
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
