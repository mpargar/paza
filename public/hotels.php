<?php include 'basics/header.php' ?>
<main class="hotels buy-main text-page">
  <h1><?=HOTELS_H1_TITLE?></h1>
  <!-- <BANNER>  -->
  <div class="banner">
    <div class="hotels-banner-img"
      style="background-image: url('/R/img/HOTELES/header/1.jpg');"></div>
    <div class="hotels-banner-img"
      style="background-image: url('/R/img/HOTELES/header/2.jpg');"></div>
    <div class="hotels-banner-img"
      style="background-image: url('/R/img/HOTELES/header/3.jpg');"></div>
    <div class="hotels-banner-img"
      style="background-image: url('/R/img/HOTELES/header/4.jpg'); background-position: bottom;"></div>
  </div>
  <!-- </BANNER>  -->
  <div class="centered-text">
    <h4><?=HOTELS_FIND?></h4>
    <h2><?=HOTELS_OPPORTUNITIES?></h2>
    <hr>
    <p>
      <?=HOTELS_QUESTION?> <br>
      <?=HOTELS_BROWSE?>
    </p>
    <p><a href="/<?=LANG?>/<?=CONTACT_LINK?>"><b><?=HOTELS_WRITE_US?></b></a></p>
  </div>
</main>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'basics/footer.php' ?>