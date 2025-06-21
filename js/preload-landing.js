window.addEventListener("load", function () {

    // Register Service Worker for better caching (optional)
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js').catch(function() {
            // Service worker registration failed, continue normally
        });
    }

    //setTimeout(() => {
        //console.log("Retrasado css.");

        // Only load critical CSS if not already loaded in head
        if (!window.CRITICAL_CSS_LOADED) {
            var linka = document.createElement('link');
            linka.rel = 'stylesheet';
            linka.media = 'all';
            linka.href = '/dist/landingcritical.bundle.css';
            linka.id = 'dynamicStylesheet';
            linka.onload = resourceLoaded;
            document.body.appendChild(linka);
        } else {
            // Critical CSS already loaded, proceed directly
            resourceLoaded();
        }

         
        function loadStyle() {
            var linkaLast = document.createElement('link');
            linkaLast.rel = 'stylesheet';
            linkaLast.media = 'all';
            linkaLast.href = '/dist/landing.bundle.css';
            document.body.appendChild(linkaLast);

            // Elimina los event listeners una vez que el script se carga
            document.removeEventListener('mousemove', loadStyle);
            document.removeEventListener('keydown', loadStyle);
            document.removeEventListener('scroll', loadStyle);

            var stylesheet = document.getElementById('dynamicStylesheet');
            if (stylesheet) {
                //stylesheet.parentNode.removeChild(stylesheet);
            }
        }

        // A�ade event listeners que cargar�n el script cuando el usuario interact�e
        document.addEventListener('mousemove', loadStyle, { once: true });
        document.addEventListener('keydown', loadStyle, { once: true });
        document.addEventListener('scroll', loadStyle, { once: true });
        
    //}, "0");

    //function loadScript() {
        var script = document.createElement('script');
        script.src = "/dist/landing.bundle.js"; // Ruta a tu script JS
        document.body.appendChild(script);

        // Elimina los event listeners una vez que el script se carga
        //document.removeEventListener('mousemove', loadScript);
        //document.removeEventListener('keydown', loadScript);
        //document.removeEventListener('scroll', loadScript);
    //}

    // A�ade event listeners que cargar�n el script cuando el usuario interact�e
    //document.addEventListener('mousemove', loadScript, { once: true });
    //document.addEventListener('keydown', loadScript, { once: true });
    //document.addEventListener('scroll', loadScript, { once: true });


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