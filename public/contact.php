<?php include 'basics/header.php' ?>
<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.2.4/email.min.js"></script>
<script type="text/javascript"> emailjs.init("user_flKDAhss9954GRziKhCES") </script>
<main class="contact-main">
  
  <h1><?= CONTACT_H1_TITLE ?></h1>
  <div class="row-flex">
    <?php require('basics/contact-main.php') ?>
    <div style="height: auto;" class="column-big">
        <img src="/R/img/contact.jpeg">
    </div>
  </div>

</main>
<?php include 'basics/footer.php' ?>
