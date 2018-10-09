
import Route from './src/router'

;(function (d, c) {

  const Contact = {
    init () {
      c('module Contact is running...')
      this.cacheDOM()
      this.bindListeners()
    },
    handleSubmitButton () {
      // Aquí se invoca el servicio ajax
      // window.Form <- contiene los datos
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

  Route('/contacto', '/contact').use(Contact)

})( document, console.log )
