/******/ (() => { // webpackBootstrap
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
App = {
  init: function init() {
    this.mobileMenu();
    this.btnSaber(); //this.porthole();
  },
  mobileMenu: function mobileMenu() {
    document.getElementById('nav-toggle').onclick = function () {
      document.getElementById("nav-content").classList.toggle("hidden");
    };
  },
  btnSaber: function btnSaber() {
    document.querySelectorAll('a.saber').forEach(function (saber) {
      saber.addEventListener('mouseenter', function (e) {
        var svg = saber.querySelector('svg');
        svg.classList.add('saber-focus-animation');
        setTimeout(function () {
          svg.classList.remove('saber-focus-animation');
        }, 2000);
      });
    });
  },
  porthole: function porthole() {
    document.querySelectorAll('.ship').forEach(function (ship) {
      console.log(ship);
      ship.addEventListener('mouseenter', function (e) {
        var porthole = ship.querySelector('.porthole');
        porthole.classList.add('porthole-focus-animation');
        setTimeout(function () {
          porthole.classList.remove('porthole-focus-animation');
        }, 2000);
      });
    });
  }
};
App.init();
/******/ })()
;