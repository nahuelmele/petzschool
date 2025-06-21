// Service Worker for Petz School - Critical Resource Caching
const CACHE_NAME = 'petzschool-v1';
const CRITICAL_RESOURCES = [
    '/js/face.js',
    '/css/preload.css',
    '/js/preload-landing.js',
    '/dist/landing.bundle.js',
    '/dist/landingcritical.bundle.css'
];

// Install Service Worker
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) {
                return cache.addAll(CRITICAL_RESOURCES);
            })
    );
});

// Fetch Strategy - Cache First for critical resources
self.addEventListener('fetch', function(event) {
    // Only handle GET requests for our critical resources
    if (event.request.method === 'GET' && 
        CRITICAL_RESOURCES.some(resource => event.request.url.includes(resource))) {
        
        event.respondWith(
            caches.match(event.request)
                .then(function(response) {
                    // Return cached version or fetch from network
                    return response || fetch(event.request);
                })
        );
    }
});

// Activate Service Worker and clean old caches
self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
}); 