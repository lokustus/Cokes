var appShellFiles = [
    '/Cokes/Styla.css',
    '/Cokes/fonts/Allura/Allura-Regular.ttf',
    '/Cokes/index.html',
    '/Cokes/Bodega.php',
    '/Cokes/Contacto.php',
    '/Cokes/Noi.php',
    '/Cokes/text.css',
    '/Cokes/Productos.php',
    '/Cokes/img/CokesL3.png',
    '/Cokes/img/Contacto.jpg',
    '/Cokes/img/contactoo.jpg',
    '/Cokes/img/NosotrosImagen.jpg',
    '/Cokes/img/IndustriaPixa.jpg',
    '/Cokes/img/produitos.jpg',
    '/Cokes/img/Ubicacion2.jpg',
    '/Cokes/img/CokesL1.png',
    '/Cokes/img/bocarousel.png',
    '/Cokes/img/bodega.png',
    '/Cokes/img/iconos/atencion.png',
    '/Cokes/img/iconos/bod.png',
    '/Cokes/img/iconos/bodcarga.png',
    '/Cokes/img/iconos/bodengrane.png',
    '/Cokes/img/iconos/domici.png',
    '/Cokes/img/iconos/Mis.png',
    '/Cokes/img/iconos/Tbascula.png',
];

self.addEventListener('install', event => {

    const endInstall = caches.open('box').then(cache => {
        return cache.addAll(appShellFiles);
    });

    event.waitUntil(endInstall);

    self.skipWaiting();
});

self.addEventListener('fetch', e => {

    const respuesta = caches.open('box').then(cache => {

        fetch(e.request).then(newsRes =>
            cache.put(e.request, newsRes));

        return cache.match(e.request);

    });

    e.respondWith(respuesta);
});