<x-app-layout>
    <section class="my-20 min-h-screen block pt-5 lg:pt-20" data-aos="zoom-in">
        <div class="w-full max-w-6xl px-6 mx-auto flex flex-col justify-center items-center">
            <form class="w-full mx-auto lg:max-w-lg relative flex gap-2 items-centers justify-center"
                action="{{ route('tracking.results') }}" method="GET">
                {{-- @method('get') --}}
                <input type="text" id="search" name="search" placeholder="001" required
                    class="w-full pl-10 block flex-1 p-2.5 text-blue-700 border-blue-500 rounded-lg italic focus:outline-0 focus:border-blue-500 focus:outline-none">
                <button type="submit"
                    class="block p-3 bg-blue-700 rounded-full text-white cursor-pointer focus:ring-2 focus:ring-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <span
                    class="absolute top-0 left-0 h-full flex p-2.5 italic items-center w-10 text-center text-blue-700">N°-</span>
            </form>

            @if (session('message'))
                <p class="text-red-600 font-semibold text-sm mt-2"> {{ session('message') }}</p>
            @endif
        </div>
    </section>
</x-app-layout>
