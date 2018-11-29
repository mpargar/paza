<?php
include 'basics/header.php'
?>
<main>
  <!-- <BANNER>  -->
  <div class="banner">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
    <img src="http://placehold.it/940x528">
  </div>
  <!-- </BANNER>  -->
  <!-- <FastLinks> -->
  <div class="fastList">
    <ul>
      <li>
        <img src="/R/img/figure1.png">
        <h3><?=HOME_BUY_TEXT_1?></h3>
        <a href="/<?=LANG?>/<?=BUY_LINK?>" class="button">
          <?=HOME_BUY_TEXT_BUTTON_MORE?>
        </a>
      </li>
      <li>
        <img src="/R/img/figure2.png">
        <h3><?=HOME_BUY_TEXT_2?></h3>
        <a href="/<?=LANG?>/<?=SELL_LINK?>" class="button">
          <?=HOME_BUY_TEXT_BUTTON_MORE?>
        </a>
      </li>
      <li>
        <img src="/R/img/figure3.png">
        <h3><?=HOME_BUY_TEXT_3?></h3>
        <a href="/<?=LANG?>/<?=ADMIN_LINK?>" class="button">
          <?=HOME_BUY_TEXT_BUTTON_MORE?>
        </a>
      </li>
    </ul>
  </div>
  <!-- </FastLinks> -->
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/R/slider.js"></script>
<script>
  $(".banner").slidesjs({
    width: 940,
    height: 528,
    pagination: {
      active: false
    },
    play: {
      interval: 5000
    },
    effect: {
      slide: {
        speed: 700
      }
    }
  });
</script>
<?php include 'basics/footer.php' ?>
