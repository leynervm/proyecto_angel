<x-app-layout>
    <div class="w-full max-w-6xl p-1 sm:p-3 mx-auto">
        <section class="block py-3 lg:py-10">
            <div class="w-full flex flex-col justify-center items-center">
                <h2 class="text-xl sm:text-2xl lg:text-5xl text-center font-semibold text-blue-700">
                    {{ __('Nosotros') }}</h2>
            </div>
        </section>

        <div class="flex md:flex-row flex-col md:space-x-8">
            <div class="md:w-5/12 lg:w-4/12 w-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets\images\publicidad.jpg') }}" alt="Image of Glass bottle" class="w-full block" />
            </div>
            <div class="md:w-7/12 lg:w-8/12 w-full md:mt-0 sm:mt-14 mt-10">
                <div>
                    <div data-aos="fade-right" class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl  leading-5 text-gray-800">MISIÓN</h3>
                        <button aria-label="too"
                            class="text-blue-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            onclick="openAnsSection(1)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path1" class="" d="M10 4.1665V15.8332" stroke="currentColor"
                                    stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para1"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">We
                        are covering every major country worldwide. The shipment leaves from US as it is our
                        headquarter. Some extra information you probably need to add here so that the customer is clear
                        of their wanted expectations.</p>
                </div>

                <hr class="my-7 bg-blue-400" />

                <div>
                    <div data-aos="fade-right" class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl  leading-5 text-gray-800">VISIÓN</h3>
                        <button aria-label="too"
                            class="text-blue-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            onclick="openAnsSection(2)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path2" class="" d="M10 4.1665V15.8332" stroke="currentColor"
                                    stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para2"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">We
                        are covering every major country worldwide. The shipment leaves from US as it is our
                        headquarter. Some extra information you probably need to add here so that the customer is clear
                        of their wanted expectations.</p>
                </div>

                <hr class="my-7 bg-blue-400" />

                <div>
                    <div data-aos="fade-right" class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl  leading-5 text-gray-800">VALORES</h3>
                        <button aria-label="too"
                            class="text-blue-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            onclick="openAnsSection(3)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path3" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para3"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">We
                        are covering every major country worldwide. The shipment leaves from US as it is our
                        headquarter. Some extra information you probably need to add here so that the customer is clear
                        of their wanted expectations.</p>
                </div>

                <hr class="my-7 bg-blue-400" />

                <div>
                    <div data-aos="fade-right" class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl  leading-5 text-gray-800">FORTALEZAS</h3>
                        <button aria-label="too"
                            class="text-blue-800 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
                            onclick="openAnsSection(4)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="path4" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para4"
                        class="hidden font-normal dark:text-gray-400 text-base leading-6 text-gray-600 mt-4 w-11/12">We
                        are covering every major country worldwide. The shipment leaves from US as it is our
                        headquarter. Some extra information you probably need to add here so that the customer is clear
                        of their wanted expectations.</p>
                </div>

                <hr class="my-7 bg-blue-400" />
            </div>
        </div>
    </div>

    <script>
        function openAnsSection(val) {
            var p = document.getElementById("para" + val);
            var svg = document.getElementById("path" + val);

            if (p.classList.contains("hidden")) {
                p.classList.remove("hidden");
                p.classList.add("block");
            } else {
                p.classList.remove("block");
                p.classList.add("hidden");
            }

            if (svg.classList.contains("hidden")) {
                svg.classList.remove("hidden");
                svg.classList.add("block");
            } else {
                svg.classList.remove("block");
                svg.classList.add("hidden");
            }
        }
    </script>
</x-app-layout>
