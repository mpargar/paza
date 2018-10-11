
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
      /* console.log(e.target.scrollTop); */
      this.$banner.style.backgroundPositionY = '-' + (e.target.scrollTop * 0.2) + 'px'
    },
    bindListeners () {
      document.body.on('scroll', this.handleBodyScroll.bind(this))
    }
  }

  Route('/', '/').use(Home)

})( document, console.log )
