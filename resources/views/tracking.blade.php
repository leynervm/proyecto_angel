<x-app-layout>
    <section class="w-full lg:max-w-6xl p-1 py-10 lg:p-3 lg:py-20 mx-auto flex flex-col justify-center items-center" data-aos="zoom-in">
        <form
            class="w-full h-full mx-auto bg-white rounded-3xl lg:max-w-lg relative flex flex-col gap-2 items-centers justify-center p-3"
            action="{{ route('orders.search.results') }}" method="GET">
            {{-- @method('get') --}}

            <h1 class="text-xl md:text-3xl font-semibold text-center lg:py-3 text-primary leading-none">BUSCAR PEDIDO</h1>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="w-10 sm:w-12 lg:w-24 h-10 sm:h-12 lg:h-24 text-primary block mx-auto">
                <path d="M3.17004 7.43994L12 12.5499L20.77 7.46991" />
                <path d="M12 21.6099V12.5399" />
                <path
                    d="M21.61 12.83V9.17C21.61 7.79 20.62 6.11002 19.41 5.44002L14.07 2.48C12.93 1.84 11.07 1.84 9.92999 2.48L4.59 5.44002C3.38 6.11002 2.39001 7.79 2.39001 9.17V14.83C2.39001 16.21 3.38 17.89 4.59 18.56L9.92999 21.52C10.5 21.84 11.25 22 12 22C12.75 22 13.5 21.84 14.07 21.52" />
                <path
                    d="M19.2 21.4C20.9673 21.4 22.4 19.9673 22.4 18.2C22.4 16.4327 20.9673 15 19.2 15C17.4327 15 16 16.4327 16 18.2C16 19.9673 17.4327 21.4 19.2 21.4Z" />
                <path d="M23 22L22 21" />
            </svg>


            <div class="w-full flex gap-1 relative">
                <input type="text" id="search" name="search" placeholder="XXXXX" required
                    class="w-full pl-10 block flex-1 p-2.5 text-blue-700 border-blue-500 rounded-lg italic focus:outline-0 focus:border-blue-500 focus:outline-none">
                <button type="submit"
                    class="block flex-shrink-0 p-3 bg-blue-700 rounded-full text-white cursor-pointer focus:ring-2 focus:ring-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <span
                    class="absolute top-0 left-0 h-full flex p-2.5 italic items-center w-10 text-center text-blue-700">N°-</span>
            </div>

        </form>

        @if (session('message'))
            <p class="text-red-600 font-semibold text-sm mt-2"> {{ session('message') }}</p>
        @endif
    </section>
</x-app-layout>
