<?php include 'basics/header.php' ?>
<main class="house">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1>Puerta Cortés - <?=PUERTA_NAME?></h1>
    <ul class="flex-container">
         <!-- Slider -->
        <li>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/R/img/cortez/colinas/01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/colinas/02.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/colinas/03.jpg" alt="Third slide">
                    </div>
                    <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/cortez/colinas/04.jpg" alt="Fourth slide">
                    </div> -->
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
                <li data-target="#carouselExampleIndicators" data-slide-to="0"><img class="d-block w-100" src="/R/img/cortez/colinas/01.jpg" alt="First slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"><img class="d-block w-100" src="/R/img/cortez/colinas/02.jpg" alt="Second slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"><img class="d-block w-100" src="/R/img/cortez/colinas/03.jpg" alt="Third slide"></li>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"><img class="d-block w-100" src="/R/img/cortez/colinas/04.jpg" alt="Fourth slide"></li> -->
            </ul>
            <p class="house-txt"><?=PUERTA_TEXT?></p>
        </li> 
        <li>
            <!-- Specs -->
            <ul class="specs">
                <li>
                    <span><?=TABLE_DATA?></span>
                </li>
                <li>
                    <span><?=TABLE_TYPE?></span>
                    <span><?=PUERTA_TYPE?></span>
                </li>
                <li>
                    <span><?=TABLE_VIEW?></span>
                    <span><?=PUERTA_VIEW?></span>
                </li>
                <li>
                    <span><?=TABLE_BR?></span>
                    <span><?=PUERTA_HAB?></span>
                </li>
                <li>
                    <span><?=TABLE_BH?></span>
                    <span><?=PUERTA_BH?></span>
                </li>
                <li>
                    <span><?=TABLE_LOT?></span>
                    <span><?=PUERTA_LOT?></span>
                </li>
                <li>
                    <span><?=TABLE_INTERIOR?></span>
                    <span><?=PUERTA_INTERIOR?></span>
                </li>
                <li>
                    <span><?=TABLE_STARTING?></span>
                    <span><?=PUERTA_PRICE?></span>
                </li>
            </ul>
        </li> 
    </ul>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'basics/footer.php' ?>