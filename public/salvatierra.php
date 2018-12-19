<?php include 'basics/header.php' ?>
<main class="house">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1>Salvatierra</h1>
    <ul class="flex-container">
         <!-- Slider -->
        <li>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/R/img/salvatierra/01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/salvatierra/02.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/R/img/salvatierra/03.jpg" alt="Third slide">
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
            <ul class="thumbnails">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"><img class="d-block w-100" src="/R/img/salvatierra/01.jpg" alt="First slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"><img class="d-block w-100" src="/R/img/salvatierra/02.png" alt="Second slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"><img class="d-block w-100" src="/R/img/salvatierra/03.jpg" alt="Third slide"></li>
            </ul>
            <!-- /Slider -->
            <p class="house-txt">Salvatierra Residencial combina lujo y comodidad en sus diferentes modelos de condominio que seguro te cautivaran, disfrutando de vivir en el centro histórico de la ciudad</p>
        </li> 
        <li>
            <!-- Specs -->
            <ul class="specs">
                <li>
                    <span><?=TABLE_DATA?></span>
                </li>
                <li>
                    <span><?=TABLE_TYPE?></span>
                    <span><?=SALVATIERRA_TYPE?></span>
                </li>
                <li>
                    <span><?=TABLE_INTERIOR?></span>
                    <span><?=SALVATIERRA_INTERIOR?></span>
                </li>
                <li>
                    <span><?=TABLE_BR?></span>
                    <span><?=SALVATIERRA_BR?></span>
                </li>
                <li>
                    <span><?=TABLE_BH?></span>
                    <span><?=SALVATIERRA_BH?></span>
                </li>
                <li>
                    <span><?=TABLE_GARAGE?></span>
                    <span><?=SALVATIERRA_GARAGE?></span>
                </li>
                <li>
                    <span><?=TABLE_VIEW?></span>
                    <span><?=SALVATIERRA_VIEW?></span>
                </li>
                <li>
                    <span><?=TABLE_PRICE?></span>
                    <span><?=SALVATIERRA_PRICE?></span>
                </li>
            </ul>
        </li> 
    </ul>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'basics/footer.php' ?>