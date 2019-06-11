import Route from './src/router'

;(function ($$d, c) {
  const popUp = {
    init () {
      this.cacheDOM()
      this.bindListeners()
    },
    cacheDOM () {
      this.$fichas = $('.fichas > li a[href="#popUp"]')
      this.$whats = $('#whatsSharePopUp')
      this.$image = $('#popUpImage')
      this.wpText = ''

    },
    handleBodyScroll (e) {
      /* this.$banner.style.backgroundPositionY = '-' + ((e.target.scrollTop + 100) * 0.8) + 'px' */
    },
    bindListeners () {
      this.$fichas.forEach(ficha => {
        ficha.addEventListener('click', e => {
          console.log(this.$image)
          this.$image.setAttribute('src', ficha.getAttribute('route') + '.jpg')
          this.wpText = `${ficha.getAttribute('lang')} ${ficha.getAttribute('name')} (${new URL(window.location.href).origin}${ficha.getAttribute('route')}.pdf)`
        })
      })
      this.$whats.addEventListener('click', e => {
        window.open('https://wa.me/526121390675?text='+escape(this.wpText), '_blank');
      })
    }
  }
  Route('/casas', '/houses').use(popUp)
  Route('/condominios', '/condominiums').use(popUp)
  Route('/terrenos', '/lands').use(popUp)
})( document, console.log )
