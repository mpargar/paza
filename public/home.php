<?php include 'basics/header.php' ?>
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
  <?php require('basics/fast-links-home.php') ?>
  <!-- </FastLinks> -->
  <h4 class="map-title"><?=MAP_TITLE?></h4>
  <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3640.108979651333!2d-110.3125486!3d24.1679105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86afd51176503f3d%3A0x6ed7e4ef0f2cfa50!2sPAZA+REAL+ESTATE!5e0!3m2!1ses!2smx!4v1559670365049!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
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
