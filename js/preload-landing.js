window.addEventListener("load", function () {
    // CSS is now loaded in head, just load JS bundle
    var script = document.createElement('script');
    script.src = "/dist/landing.bundle.js";
    document.body.appendChild(script);

    // Hide preloader after resources load
    resourceLoaded();
});

function performPostLoadAction() {

    //console.log("Retrasado js.");

    var scripta = document.createElement('script');
    scripta.src = '/dist/landingdev.bundle.js';
    scripta.onload = resourceLoaded;
    document.body.appendChild(scripta);


}

function resourceLoaded() {

    //console.log("mostrando.");

    var preloader = document.getElementById("preloader");

    var fadeEffect = setInterval(function () {

        if (preloader.style.opacity > 0) {
            preloader.style.opacity -= 0.1;
        } else {

            preloader.style.display = 'none';
            clearInterval(fadeEffect);
        }

    }, 60);


}