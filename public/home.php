<?php
include 'basics/header.php'
?>
<main id="home">
  <!-- <BANNER>  -->
  <div class="banner">
    <img src="/R/img/__4.jpg" style="bottom: 0!important;">
    <img src="/R/img/__1.jpg" style="bottom: 0!important;">
    <img src="/R/img/__2.jpg" style="bottom: 0!important;">
    <img src="/R/img/__3.jpg" style="bottom: 0!important;">
    <img src="/R/img/__5.jpg" style="bottom: 0!important;">
  </div>
  <!-- </BANNER>  -->
  <!-- <FastLinks> -->
  <?php require('basics/fast-links.php') ?>
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
      interval: 4000,
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
