<footer class="w-full relative bg-blue-800 pt-8 pb-6">
    <div class="max-w-6xl px-6 grid grid-cols-1 md:grid-cols-2 mx-auto">
        <div class="">
            <div class="w-full h-24">
                <img class="h-full w-auto max-w-xs object-scale-down block mx-auto text-center"
                    src="{{ asset('assets/images/LOGOLOGOBLANCOPARAFONDOAZUL.svg') }}" alt="">
            </div>
            <div class="text-center p-3 w-full block">
                <span
                    class="inline-block bg-secondary text-xs text-white p-1.5 px-5 rounded-xl tracking-widest">ATENCIÓN</span>
            </div>
            <div class="w-full p-3 text-center space divide-x-2 divide-orange-500 text-white text-xs font-medium">
                <ul class="inline-block px-3 text-center">
                    <li>Lunes a Viernes</li>
                    <li>8:00am - 1:00pm</li>
                    <li>3:00pm - 7:00pm</li>
                </ul>
                <ul class="inline-block px-3 text-center">
                    <li>Sábado</li>
                    <li>8:00am - 1:00pm</li>
                    <li>2:00pm - 7:00pm</li>
                </ul>
            </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row gap-2">
            <div class="w-full text-center lg:text-start lg:w-[40%]">
                <div class="w-full block">
                    <span
                        class="inline-block bg-secondary text-xs text-white p-1.5 px-5 rounded-xl tracking-widest">CONTÁCTANOS</span>
                </div>
                <div class="my-3">
                    <ul class="text-white text-xs font-medium">
                        <li>996 976 634</li>
                        <li>976 120 205</li>
                        <li>gigantocalin@outlook.es</li>
                    </ul>
                </div>

                <div class="w-full block">
                    <span
                        class="inline-block bg-secondary text-xs text-white p-1.5 px-5 rounded-xl tracking-widest">SÍGUENOS</span>
                </div>
                <div class="my-3 w-full flex gap-1 justify-center lg:justify-start">
                    <a class="shadow-lg block font-normal h-8 w-8 rounded-full outline-none focus:outline-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="currentColor" fill="solid"
                            class="w-full h-full rounded-full p-1 block bg-white text-blue-800" stroke="currentColor"
                            stroke-width="1.5" stroke-linejoin="round">
                            <path fill-rule="solid" fill="#FFF" clip-rule="evenodd"
                                d="M6.18182 10.3333C5.20406 10.3333 5 10.5252 5 11.4444V13.1111C5 14.0304 5.20406 14.2222 6.18182 14.2222H8.54545V20.8889C8.54545 21.8081 8.74951 22 9.72727 22H12.0909C13.0687 22 13.2727 21.8081 13.2727 20.8889V14.2222H15.9267C16.6683 14.2222 16.8594 14.0867 17.0631 13.4164L17.5696 11.7497C17.9185 10.6014 17.7035 10.3333 16.4332 10.3333H13.2727V7.55556C13.2727 6.94191 13.8018 6.44444 14.4545 6.44444H17.8182C18.7959 6.44444 19 6.25259 19 5.33333V3.11111C19 2.19185 18.7959 2 17.8182 2H14.4545C11.191 2 8.54545 4.48731 8.54545 7.55556V10.3333H6.18182Z" />
                        </svg>
                    </a>
                    <a class="shadow-lg block font-normal h-8 w-8 rounded-full outline-none focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="currentColor" fill="none"
                            class="w-full h-full rounded-full p-1 block bg-white text-blue-800">
                            <path
                                d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path d="M17.5078 6.5L17.4988 6.5" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full lg:flex-1 p-3 rounded-xl shadow border">
                <div id="map" class="map" style="width: 100%; height: 350px;"></div>
                MOSTRAR MAPA
            </div>
        </div>
        {{-- Copyright © <span id="get-current-year">2024</span>
            <span class="text-gray-500 hover:text-gray-800" target="_blank">
                Angel </span> --}}
    </div>




    <script>
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                d[l](f, ...n))
        })
        ({
            key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg",
            v: "weekly"
        });
    </script>

    <script>
        async function initMap() {
            // Request needed libraries.
            const {
                Map
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement
            } = await google.maps.importLibrary("marker");

            const map = new Map(document.getElementById("map"), {
                center: {
                    lat: -5.713773757079347,
                    lng: -78.80426541280418
                },
                zoom: 18,
                mapId: "4504f8b37365c3d0",
            });

            const marker = new AdvancedMarkerElement({
                map,
                position: {
                    lat: -5.713773757079347,
                    lng: -78.80426541280418
                },
            });
        }
        initMap();

        document.addEventListener('DOMContentLoaded', () => {
            // var map = new ol.Map({
            //     target: 'map',
            //     layers: [
            //         new ol.layer.Tile({
            //             source: new ol.source.OSM()
            //         })
            //     ],
            //     view: new ol.View({
            //         center: ol.proj.fromLonLat(['-5.713773757079347', '-78.80426541280418']),
            //         zoom: 10
            //     })
            // });
            // showGoogleMaps();
        })

        // function showGoogleMaps() {
        // //Creamos el punto a partir de la latitud y longitud de una dirección:
        // var point = new google.maps.LatLng('-5.713773757079347,', '-78.80426541280418');

        // //Configuramos las opciones indicando zoom, punto y tipo de mapa
        // var myOptions = {
        // zoom: 15,
        // center: point,
        // mapTypeId: google.maps.MapTypeId.ROADMAP
        // };

        // //Creamos el mapa y lo asociamos a nuestro contenedor
        // var map = new google.maps.Map(document.getElementById("showMap"), myOptions);

        // //Mostramos el marcador en el punto que hemos creado
        // var marker = new google.maps.Marker({
        // position: point,
        // map: map,
        // title: "Publicalin - Parque Alfonso Arana Vidal, Jaén"
        // });
        // }
    </script>
</footer>
