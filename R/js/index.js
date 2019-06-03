/*
import Styles * * * * * * * */
import '../sass/index.scss'
/* * * * * * * * * * * * * */



/*
import Scripts * * * * * * */

/*
import Scripts * * * * * * */
import './src/polyfills'

// import './home'
import './header'
import './contact'
/* * * * * * * * * * * * * */

window.sendWP = function (type, name, url, lang) {
  console.log(
    type, name, url, lang
  )
  switch (lang) {
    case 'es':
       
    break;
    case 'en': 
    break;

  }
  let text = ``
  window.open('https://wa.me/526121390675?text='+escape(text), '_blank');
}