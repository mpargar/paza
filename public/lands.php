<?php include 'basics/header.php' ?>
<main class="house">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1><?=BUY_LANDS_H1_TITLE?></h1>
    <ul class="fichas">
        <li>
            <img src="/R/img/LOTES/4.jpg">
            <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/LOTES/4" name="Transpeninsular a Cabo"><?=VIEW?></a>
        </li>
        <li>
            <img src="/R/img/LOTES/5.jpg">
            <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/LOTES/5" name="Maravia 54"><?=VIEW?></a>
        </li>
        <li>
            <img src="/R/img/LOTES/7.jpg">
            <a href="#popUp" lang="<?=WP_MESSAGE?>" route="/R/img/LOTES/7" name="Las Lomas 14"><?=VIEW?></a>
        </li>
    </ul>
    <a href="#_" class="lightbox" id="popUp">
        <img id="popUpImage" src="">
        <button id="whatsSharePopUp"><?=WP_MESSAGE_BUTTON?></button>
    </a>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'basics/footer.php' ?>