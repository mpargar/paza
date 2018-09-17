
;(function (d, c) {

  const Header = {
    init () {
      c('module Header is running...')
      this.cacheDOM()
      this.bindListeners()
    },
    openMenu () {
      this.$ul.addClass('open')
    },
    closeMenu () {
      this.$ul.removeClass('open')
    },
    cacheDOM () {
      this.$navbar = $('nav')
      this.$ul = this.$navbar.find('ul')
      this.$hambgr = d.getElementById('$hambgr')
      this.$close = this.$navbar.find('.close')
    },
    bindListeners () {
      this.$hambgr.on('click', this.openMenu.bind(this))
      this.$close.on('click', this.closeMenu.bind(this))
    }
  }

  Header.init()

})( document, console.log )
