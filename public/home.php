<?php
include 'basics/header.php'
?>
<main>
  <!-- <BANNER>  -->
  <div class="banner">
    <img src="/R/img/__1.jpg">
    <img src="/R/img/__3.jpg">
    <img src="/R/img/__4.jpg">
    <img src="/R/img/__2.jpg">
    <img src="/R/img/__5.jpg">
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
    width: 1920,
    height: 1080,
    pagination: {
      active: false
    },
    play: {
      active: true,
      effect: "slide",
      interval: 10000,
      auto: true,
      swap: true,
      pauseOnHover: false,
      restartDelay: 2500
    },
    effect: {
      slide: {
        speed: 700
      }
    }
  });
</script>
<?php include 'basics/footer.php' ?>
