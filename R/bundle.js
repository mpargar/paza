!function(e){var t={};function n(o){if(t[o])return t[o].exports;var i=t[o]={i:o,l:!1,exports:{}};return e[o].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(o,i,function(t){return e[t]}.bind(null,i));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s="./R/js/index.js")}({"./R/js/header.js":
/*!************************!*\
  !*** ./R/js/header.js ***!
  \************************/
/*! no static exports found */function(e,t){!function(e,t){({init:function(){t("module Header is running..."),this.cacheDOM(),this.bindListeners()},openMenu:function(){this.$ul.addClass("open")},closeMenu:function(){this.$ul.removeClass("open")},cacheDOM:function(){this.$navbar=$("nav"),this.$ul=this.$navbar.find("ul"),this.$hambgr=e.getElementById("$hambgr"),this.$close=this.$navbar.find(".close")},bindListeners:function(){this.$hambgr.on("click",this.openMenu.bind(this)),this.$close.on("click",this.closeMenu.bind(this))}}).init()}(document,console.log)},"./R/js/index.js":
/*!***********************!*\
  !*** ./R/js/index.js ***!
  \***********************/
/*! no exports provided */function(e,t,n){"use strict";n.r(t);n(/*! ../sass/index.scss */"./R/sass/index.scss"),n(/*! ./src/polyfills */"./R/js/src/polyfills.js"),n(/*! ./header */"./R/js/header.js")},"./R/js/src/polyfills.js":
/*!*******************************!*\
  !*** ./R/js/src/polyfills.js ***!
  \*******************************/
/*! no static exports found */function(e,t){HTMLElement.prototype.addClass=function(e){this.classList.add(e)},NodeList.prototype.addClass=function(e){this.forEach(function(t){t.classList.add(e)})},HTMLElement.prototype.removeClass=function(e){this.classList.remove(e)},NodeList.prototype.removeClass=function(e){this.forEach(function(t){t.classList.remove(e)})},NodeList.prototype.find=function(e){return this.querySelectorAll(e)},HTMLElement.prototype.find=function(e){return this.querySelectorAll(e)},NodeList.prototype.on=function(e,t){this.forEach(function(n){n.addEventListener(e,function(e){e.$this=e.currentTarget,e.$prev=e.preventDefault,t(e)})})},HTMLElement.prototype.on=function(e,t){this.addEventListener(e,function(e){e.$this=e.currentTarget,e.$prev=e.preventDefault,t(e)})},window.$=function(e){var t=document.querySelectorAll(e);return t.length>1?t:t[0]}},"./R/sass/index.scss":
/*!***************************!*\
  !*** ./R/sass/index.scss ***!
  \***************************/
/*! no static exports found */function(e,t){}});
//# sourceMappingURL=bundle.js.map