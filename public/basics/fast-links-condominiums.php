<div class="fastList">
  <ul>
    <li>
      <a href="/<?=LANG?>/salvatierra">
        <figure style="background-image: url('/R/img/hotlink-1.jpg')">
        </figure>
        <h3><?=HOME_BUY_TEXT_1?></h3>
        <h2><?=STARTING_AT?> $<?=SALVATIERRA_PRICE?></h2>
      </a>
    </li>
    <li>
      <a href="/<?=LANG?>/vistamar">
          <figure style="background-image: url('/R/img/cortez/vistamar/01.jpeg')">
          </figure>
          <h3><?=PUERTA_NAME_2?></h3>
          <h2>$<?=PUERTA_PRICE_2?></h2>
      </a>
    </li>
  </ul>
</div>

<ul class="fichas">
  <li>
    <img src="/R/img/CONDOS/1.jpg">
    <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/CONDOS/1" name="Colinas del Sol"><?=VIEW?></a>
  </li>
  <li>
    <img src="/R/img/CONDOS/3.jpg">
    <div class="doubleBtn">
      <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/CONDOS/3" name="Salvatierra"><?=VIEW?></a>
      <a href="/<?=LANG?>/salvatierra"><?=DETAILS?></a>
    </div>
  </li>
  <li>
    <img src="/R/img/CONDOS/4.jpg">
    <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/CONDOS/4" name="Bel Air Residences"><?=VIEW?></a>
  </li>
</ul>

<a href="#_" class="lightbox" id="popUp">
    <img id="popUpImage" src="">
    <button id="whatsSharePopUp"><?=WP_MESSAGE_BUTTON?></button>
</a>