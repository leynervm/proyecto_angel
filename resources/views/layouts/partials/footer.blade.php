<footer class="relative bg-gray-200 pt-8 pb-6">
    <div class="contenedor mx-auto">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-bold text-blue-700">PUBLICALIN</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-600">
                    Líderes en el mercado
                </h5>
                <div class="my-6">
                    <button
                        class="bg-white text-neutral-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="currentColor" fill="none"
                            class="w-6 h-6 mx-auto">
                            <path
                                d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path d="M17.5078 6.5L17.4988 6.5" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button
                        class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="currentColor" fill="none"
                            class="w-6 h-6 mx-auto">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.18182 10.3333C5.20406 10.3333 5 10.5252 5 11.4444V13.1111C5 14.0304 5.20406 14.2222 6.18182 14.2222H8.54545V20.8889C8.54545 21.8081 8.74951 22 9.72727 22H12.0909C13.0687 22 13.2727 21.8081 13.2727 20.8889V14.2222H15.9267C16.6683 14.2222 16.8594 14.0867 17.0631 13.4164L17.5696 11.7497C17.9185 10.6014 17.7035 10.3333 16.4332 10.3333H13.2727V7.55556C13.2727 6.94191 13.8018 6.44444 14.4545 6.44444H17.8182C18.7959 6.44444 19 6.25259 19 5.33333V3.11111C19 2.19185 18.7959 2 17.8182 2H14.4545C11.191 2 8.54545 4.48731 8.54545 7.55556V10.3333H6.18182Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-gray-500 text-sm font-semibold mb-2">
                            {{ __('Links') }}</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('about') }}">{{ __('About Us') }}</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('services') }}">
                                    {{ __('Popular Services') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-gray-500 text-sm font-semibold mb-2">
                            {{ __('Other Resources') }}</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-500 font-semibold py-1">
                    Copyright © <span id="get-current-year">2024</span>
                    <span class="text-gray-500 hover:text-gray-800" target="_blank">
                        Angel
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
