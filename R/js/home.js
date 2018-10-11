
import Route from './src/router'

;(function (d, c) {

  const Home = {
    init () {
      /* c('module Home is running...') */
      this.cacheDOM()
      this.bindListeners()
    },
    cacheDOM () {
      this.$banner = $('.banner')
    },
    handleBodyScroll (e) {
      this.$banner.style.backgroundPositionY = '-' + ((e.target.scrollTop + 100) * 0.8) + 'px'
    },
    bindListeners () {
      document.body.on('scroll', this.handleBodyScroll.bind(this))
    }
  }

  Route('/', '/').use(Home)

})( document, console.log )
