
;(function (d, c) {

  const Header = {
    init () {
      /* c('module Header is running...') */
      this.cacheDOM()
      this.bindListeners()
    },
    openMenu () {
      this.$ul.addClass('open')
      this.$darkLayer.addClass('open')
    },
    closeMenu () {
      this.$ul.removeClass('open')
      this.$darkLayer.removeClass('open')
    },
    handleHideMenu (e) {
      this.$hambgr.style.display =  (e.target.scrollTop > 30)
        ? 'none'
        : 'initial'
    },
    cacheDOM () {
      this.$navbar = $('nav')
      this.$ul = this.$navbar.find('ul')
      this.$hambgr = d.getElementById('$hambgr')
      this.$close = this.$navbar.find('.close')
      this.$darkLayer = d.getElementById('darkLayer')
    },
    bindListeners () {
      this.$hambgr.on('click', this.openMenu.bind(this))
      this.$darkLayer.on('click', this.closeMenu.bind(this))
      this.$close.on('click', this.closeMenu.bind(this))
      document.body.addEventListener('scroll', this.handleHideMenu.bind(this))
    }
  }

  Header.init()


})( document, console.log )
