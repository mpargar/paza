
import Route from './src/router'

;(function (d, c) {

  const Scaffold = {
    init () {
      /* c('module Scaffold is running...') */
      this.cacheDOM()
      this.bindListeners()
    },
    cacheDOM () {

    },
    bindListeners () {

    }
  }

  Route('/route').use(Scaffold)

})( document, console.log )
