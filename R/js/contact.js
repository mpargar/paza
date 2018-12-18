
import Route from './src/router'

;(function (d, c) {

  const Contact = {
    init () {
      /* c('module Contact is running...') */
      this.cacheDOM()
      this.bindListeners()
    },
    handleSubmitButton () {
      this.$sendContactForm.textContent = 'ENVIANDO...'
      emailjs.send(
        "smtp_server",
        "template_USWFHOpx",
        {
          name: window.Form.name,
          email: window.Form.email,
          phone: window.Form.phone,
          messaje: window.Form.messaje
        }
      )
      .then(response => {
        this.$sendContactForm.textContent = 'ENVIAR'
        /* console.log('SUCCESS!', response.status, response.text) */
        alert('¡Su mensaje fue entregado con éxito!')
      }, error => {
        // alert('¡Su mensaje fue entregado con éxito!')        
        /* console.log('FAILED...', error); */
      })
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

Route('/', '/').use(Contact)

})( document, console.log )
