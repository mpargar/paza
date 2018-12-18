
<div class="row-flex">
  <div class="column-small">
    <p class="c__purple">
      <a href="tel:+526121234625"><?=CONTACT_FORM_PHONE?>: +52.612.123.4625</a>, <a href="tel:+526121390675"><?=CONTACT_FORM_CELL?>: +52.612.139.0675</a> <?=O?> <a href="mailto:info@pazarealestate.com">e-mail: info@pazarealestate.com</a>
    </p>
    <p class="c__purple"><?= CONTACT_P_ONE ?>.</p>

    <input type="text" placeholder="<?=CONTACT_FORM_NAME?>" e-model="name">
    <input type="text" placeholder="<?=CONTACT_FORM_PHONE?>" e-model="phone">
    <input type="text" placeholder="<?=CONTACT_FORM_MAIL?>" e-model="email">
    <textarea placeholder="<?=CONTACT_FORM_SMS?>" e-model="messaje"></textarea>
    <br>

    <button id="send-contact-form">ENVIAR</button>

  </div>
</div>