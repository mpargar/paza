<?php
include 'basics/header.php'
?>
<main id="home">
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
