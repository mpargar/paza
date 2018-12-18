<!-- <script>


(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script> -->

<footer>
  <div class="flex-container">

    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : 'your-app-id',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.2'
      });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <div
      class="fb-customerchat"
      attribution=setup_tool
      page_id="318085008733590"
      theme_color="#6470B1">
    </div>

  <!-- <div>
    <img src="/R/img/logo_paza.png" alt="Paza Real Estate Logo" width="100">
  </div>
  <div>
    <p><?=CONTACT_FORM_PHONE?>: <a href="tel:+526121234625">+52.612.123.4625</a></p>
    <p><?=CONTACT_FORM_CELL?>: <a href="tel:+526121390675">+52.612.139.0675</a></p>
    <p><?=CONTACT_FORM_MAIL?>: <a href="mailto:info@pazarealestate.com">info@pazarealestate.com</a></p>
    <p style="display:flex;">
      Social:
      <a href="https://www.facebook.com/PAZA-Real-Estate-318085008733590/" target="_blank"><img src="/R/img/fb.png"></a>
      <a href="https://wa.me/526121390675" target="_blank"><img src="/R/img/whatsapp.png"></a>
      <a href="https://www.instagram.com/pazarealestate/" target="_blank"><img src="/R/img/instagram.png"></a>
    </p>
  </div> -->
</div>

<div class="floating-action-menu hidden" id="floating-action-menu">
  <?php require('contact-main.php') ?>
  <img src="/R/img/close-black.svg" id="close-action-menu">
</div>

<div class="floating-action-button" id="floating-action-button" style="display: none;">
  <img src="/R/img/mail-icon.png">
</div>

<script> /* Esta etiqueta script va al footer.js */

;(function (d, c) {

  const FloatingActionButton = {
    init () {
      this.cacheDOM()
      this.bindListeners()

      /* displaying button */
      this.$floatingActionButton.style.display = 'flex'
    },
    cacheDOM () {
      this.$floatingActionButton = d.getElementById('floating-action-button')
      this.$floatingActionMenu = d.getElementById('floating-action-menu')
      this.$closeActionMenu = d.getElementById('close-action-menu')
    },
    toggleContactMenu () {
      this.$floatingActionMenu
        .classList.toggle('hidden')
    },
    bindListeners () {
      this.$floatingActionButton.addEventListener(
        'click',
        this.toggleContactMenu.bind(this)
      )
      this.$closeActionMenu.addEventListener(
        'click',
        this.toggleContactMenu.bind(this)
      )
    }
  }

  console.log(!(
    location.pathname.includes('contact') ||
    location.pathname.includes('contacto')
  ))

  if (!(
    location.pathname.includes('contact') ||
    location.pathname.includes('contacto')
  )) {
    FloatingActionButton.init()
  }

})(document, console.log)

</script>

</footer>
<script type="text/javascript" src="/R/bundle.js"></script>
</body>
</html>
