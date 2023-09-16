App = {
    init: function () {
        this.mobileMenu();
        this.btnSaber();
        //this.porthole();
    },

    mobileMenu: function (){
        document.getElementById('nav-toggle').onclick = function(){
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    },
    btnSaber: function () {
        document.querySelectorAll('a.saber').forEach(saber => {
            saber.addEventListener('mouseenter', (e) => {
                const svg = saber.querySelector('svg');
                svg.classList.add('saber-focus-animation');
                setTimeout(function () {
                    svg.classList.remove('saber-focus-animation')
                },2000);
            });
        });
    },
    porthole: function () {
        document.querySelectorAll('.ship').forEach(ship => {
            console.log(ship);
            ship.addEventListener('mouseenter', (e) => {
                const porthole = ship.querySelector('.porthole');
                porthole.classList.add('porthole-focus-animation');
                setTimeout(function () {
                    porthole.classList.remove('porthole-focus-animation')
                },2000);
            });
        });
    }
}

App.init();