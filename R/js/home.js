
import Route from './src/router'

;(function (d, c) {

  const Home = {
    init () {
      c('module Home is running...')
      this.cacheDOM()
      this.bindListeners()
    },
    cacheDOM () {

    },
    bindListeners () {

    }
  }

  Route('/').use(Home)

})( document, console.log )
