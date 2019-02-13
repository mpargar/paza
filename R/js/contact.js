
import Route from './src/router'
import axios from 'axios'

;(function (d, c) {

  const Contact = {
    init () {
      /* c('module Contact is running...') */
      this.cacheDOM()
      this.bindListeners()
      console.log('Axios --> ', axios);
    },
    handleSubmitButton () {
      this.$sendContactForm.textContent = 'ENVIANDO...'
      const params = new URLSearchParams();
      params.append('name', window.Form.name);
      params.append('email', window.Form.email);
      params.append('phone', window.Form.phone);
      params.append('message', window.Form.message);
      axios.post('/services/contactEmail.php', params)
      .then((response) => {
        this.$sendContactForm.textContent = 'ENVIAR'
        alert('¡Su mensaje fue entregado con éxito!')
        gtag('send', 'event', 'formulario', 'click', 'contacto')
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    handleReactiveInput (e) {
      const $input = e.currentTarget
      const key = $input.getAttribute('e-model')
      const val = $input.value

      window.Form[key] = val
    },
    cacheDOM () {
      window.Form = {}

      this.$eModelsInput = d.querySelectorAll('[e-model]')
      this.$sendContactForm = d.getElementById('send-contact-form')
    },
    bindListeners () {
      this.$eModelsInput.forEach($input =>
        $input.addEventListener('input',
        this.handleReactiveInput.bind(this)
      )
    )
    this.$sendContactForm.addEventListener('click', this.handleSubmitButton.bind(this))
  }
}

/* Route('/', '/').use(Contact) */
Contact.init()

})( document, console.log )
