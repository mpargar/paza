<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.2.4/email.min.js"></script>
<script type="text/javascript"> emailjs.init("user_flKDAhss9954GRziKhCES") </script>

<div class="column-small">
  <p class="c__purple">
    <a href="tel:+526121234625" class="link-tel"><?=CONTACT_FORM_PHONE?>: +52.612.123.4625</a>, <a href="tel:+526121390675" class="link-tel"><?=CONTACT_FORM_CELL?>: +52.612.139.0675</a> <?=O?> <a href="mailto:info@pazarealestate.com" class="link-email">e-mail: info@pazarealestate.com</a>
  </p>
  <p class="c__purple"><?= CONTACT_P_ONE ?>.</p>
  <!-- <p class="c__purple"><b>Pablo González</b><br>
    e-mail: <a href="email:pabloglez40@gmail.com">pabloglez40@gmail.com</a></p> -->

  <input type="text" placeholder="<?=CONTACT_FORM_NAME?>" e-model="name">
  <input type="text" placeholder="<?=CONTACT_FORM_PHONE?>" e-model="phone">
  <input type="text" placeholder="<?=CONTACT_FORM_MAIL?>" e-model="email">
  <textarea placeholder="<?=CONTACT_FORM_SMS?>" e-model="message"></textarea>
  <br>

  <button id="send-contact-form"><?= CONTACT_SEND ?></button>

</div>
