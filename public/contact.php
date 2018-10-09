<?php include 'basics/header.php' ?>
<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.2.4/email.min.js"></script>
<script type="text/javascript"> emailjs.init("user_flKDAhss9954GRziKhCES") </script>
<main class="contact-main">
  <h1><?= CONTACT_H1_TITLE ?></h1>

  <div class="row-flex">
    <div class="column-small">
      <p class="c__purple">
        <a href="#">612 134 7236</a> ó <a href="#">contacto@pazarealstate.com</a>
      </p>
      <p><?= CONTACT_P_ONE ?>.</p>
      <input type="text" placeholder="Nombre" e-model="name">
      <input type="text" placeholder="Teléfono" e-model="phone">
      <input type="text" placeholder="Email" e-model="email">
      <textarea placeholder="Mensaje" e-model="messaje"></textarea>
      <br>
      <button id="send-contact-form">ENVIAR</button>

    </div>
    <div class="column-big">
      <img src="/R/img/contact.jpeg">
    </div>
  </div>

</main>
<?php include 'basics/footer.php' ?>
