<?php include 'basics/header.php' ?>
<main class="house">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1>Puerta Cortés - <?=PUERTA_NAME_2?></h1>
    <ul class="flex-container">
         <!-- Slider -->
        <li>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/01.jpeg" alt="01 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/02.jpg" alt="02 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/03.jpg" alt="03 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/04.jpeg" alt="04 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/05.jpeg" alt="05 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/06.jpeg" alt="06 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/07.jpeg" alt="07 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/08.jpeg" alt="08 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/09.jpeg" alt="09 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/10.jpeg" alt="10 - slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/vistamar/11.jpeg" alt="11 - slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Slider -->
            <ul class="thumbnails">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"><img class="d-block w-100" src="/R/img/cortez/vistamar/01.jpeg" alt="01 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"><img class="d-block w-100" src="/R/img/cortez/vistamar/02.jpg" alt="02 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"><img class="d-block w-100" src="/R/img/cortez/vistamar/03.jpg" alt="03 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"><img class="d-block w-100" src="/R/img/cortez/vistamar/04.jpeg" alt="04 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"><img class="d-block w-100" src="/R/img/cortez/vistamar/05.jpeg" alt="05 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"><img class="d-block w-100" src="/R/img/cortez/vistamar/06.jpeg" alt="06 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"><img class="d-block w-100" src="/R/img/cortez/vistamar/07.jpeg" alt="07 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"><img class="d-block w-100" src="/R/img/cortez/vistamar/08.jpeg" alt="08 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"><img class="d-block w-100" src="/R/img/cortez/vistamar/09.jpeg" alt="09 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"><img class="d-block w-100" src="/R/img/cortez/vistamar/10.jpeg" alt="10 - slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"><img class="d-block w-100" src="/R/img/cortez/vistamar/11.jpeg" alt="11 - slide"></li>
            </ul>
            <p class="house-txt"><?=PUERTA_TEXT_2?></p>
        </li> 
        <li>
            <!-- SPECS 2 -->
            <ul class="specs">
                <li>
                    <span><?=TABLE_DATA?></span>
                </li>
                <li>
                    <span><?=TABLE_TYPE?></span>
                    <span><?=PUERTA_TYPE_2?></span>
                </li>
                <li>
                    <span><?=TABLE_VIEW?></span>
                    <span><?=PUERTA_VIEW_2?></span>
                </li>
                <li>
                    <span><?=TABLE_BR?></span>
                    <span><?=PUERTA_HAB_2?></span>
                </li>
                <li>
                    <span><?=TABLE_BH?></span>
                    <span><?=PUERTA_BH_2?></span>
                </li>
                <li>
                    <span><?=TABLE_LOT?></span>
                    <span><?=PUERTA_LOT_2?></span>
                </li>
                <li>
                    <span><?=TABLE_INTERIOR?></span>
                    <span><?=PUERTA_INTERIOR_2?></span>
                </li>
                <li>
                    <span><?=TABLE_STARTING?></span>
                    <span><?=PUERTA_PRICE_2?></span>
                </li>
            </ul>
        </li> 
    </ul>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'basics/footer.php' ?>