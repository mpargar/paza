
/*
* Register funtion for new route
*/
window.route = function (rt) {
  const currentRoute = location.pathname.replace(/^\/e[s|n]/, '')
  if (rt) {
    return (currentRoute === 'rt')
  } else {
    return currentRoute
  }
}

HTMLElement.prototype.addClass = function (clss) {
  this.classList.add(clss)
}

NodeList.prototype.addClass = function (clss) {
  this.forEach (function ($el) {
    $el.classList.add(clss)
  })
}

HTMLElement.prototype.removeClass = function (clss) {
  this.classList.remove(clss)
}

NodeList.prototype.removeClass = function (clss) {
  this.forEach (function ($el) {
    $el.classList.remove(clss)
  })
}

HTMLElement.prototype.toggleClass = function (clss) {
  this.classList.toggle(clss)
}

NodeList.prototype.toggleClass = function (clss) {
  this.forEach (function ($el) {
    $el.classList.toggle(clss)
  })
}

NodeList.prototype.find = function (str) {
  return this.querySelectorAll(str)
}

HTMLElement.prototype.find = function (str) {
  return this.querySelectorAll(str)
}

NodeList.prototype.on = function ($ev, callback) {
  this.forEach (function ($el) {
    $el.addEventListener($ev, function (e) {
      e.$this = e.currentTarget
      e.$prev = e.preventDefault
      callback(e)
    })
  })
};

HTMLElement.prototype.on = function ($ev, callback) {
  this.addEventListener($ev, function (e) {
    e.$this = e.currentTarget
    e.$prev = e.preventDefault
    callback(e)
  })
};

window.$ = function (str) {
  var $reqDOM = document.querySelectorAll(str)

  return $reqDOM.length > 1
    ? $reqDOM
    : $reqDOM[0]
}

document
  .querySelector('a[href="' + location.pathname + '"]')
  .parentNode
  .addClass('current')
