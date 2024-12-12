<div class="header-marketplace" x-data="searchpublicalin">
    <div class="w-full mx-auto flex items-center relative">
        <div class="hidden xl:flex items-center h-full">
            <a href="/" class="w-full p-1 xl:p-2 h-[90%]">
                <img class="block mx-auto h-full w-full object-scale-down"
                    src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt="">
            </a>
        </div>

        <div class="flex-shrink-0 xl:pr-5">
            <a class="button-sidebar xl:hidden px-2" href="/">
                <div class="w-full flex-1 p-1 xl:hidden h-full">
                    <img class="h-full max-w-40 w-auto m-auto object-center object-scale-down"
                        src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt="">
                </div>
            </a>
        </div>

        <div class="mr-6 relative flex-1 hidden xl:flex">
            <form @submit.prevent="fetchOrder" autocomplete="off"
                class="w-full ml-auto max-w-xl bg-none self-center flex justify-end cursor-pointer">
                <div
                    class="w-full flex h-[46px] m-0 bg-blue-100 justify-center items-center pl-6 rounded-3xl border-0.5 border-fondobuttonsearchmarketplace">
                    <label for="searchheader-xl" class="absolute w-[1px] h-[1px] p-0 overflow-hidden">
                        Barra de búsqueda</label>
                    <input type="search" name="search" autocomplete="off" x-ref="search" x-model="search"
                        @keydown.enter.prevent="fetchOrder"
                        class="bg-transparent border-0 border-none w-full text-sm h-full leading-5 text-colorsearchmarketplace tracking-wide ring-0 focus:border-0 focus:ring-0 outline-none outline-0 focus:outline-none focus:border-none focus:shadow-none shadow-none"
                        placeholder="Buscar N° orden" id="search">
                </div>
                <button type="submit" @click.prevent="fetchOrder;"
                    class="bg-principal text-white rounded-3xl focus:ring focus:ring-white absolute right-0 box-border border-2 border-principal z-10 h-[46px] w-[46px] flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="block w-full h-full p-2 text-colorbuttonsearchmarketplace">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="w-full flex flex-1 sm:w-auto sm:flex-none sm:ml-auto px-3">
            <ul class="w-full sm:w-auto flex gap-1 items-center justify-end h-full m-0 p-0">
                <li class="relative h-[68%] flex items-center self-center">
                    <a href="{{ route('nosotros') }}"
                        class="item-link-header {{ request()->routeIs('nosotros') ? 'link-header-active' : '' }}">
                        {{ __('Nosotros') }}
                    </a>
                </li>
                <li class="relative h-[68%] flex items-center self-center">
                    <a href="{{ route('services') }}"
                        class="{{ request()->routeIs('services') ? 'link-header-active' : '' }} item-link-header">
                        {{ __('Services') }}
                    </a>
                </li>
                @auth
                    <li class="relative h-[68%] flex items-center self-center">
                        <a href="{{ route('admin') }}"
                            class="{{ request()->routeIs('admin') ? 'link-header-active' : '' }} item-link-header">
                            {{ __('Dashboard') }}
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

    <div class="xl:hidden w-full px-0 xs:px-3 py-1 pb-2 flex z-[8]">
        <form @submit.prevent="fetchOrder" autocomplete="off" class="w-full self-center flex cursor-pointer relative">
            <div
                class="w-full flex h-10 m-0 bg-blue-100 justify-center items-center rounded-3xl border-0.5 border-fondobuttonsearchmarketplace">
                <label for="searchheader-sm" class="absolute w-[1px] h-[1px] p-0 overflow-hidden">
                    Barra de búsqueda</label>
                <input type="text" name="search" autocomplete="off" x-model="search"
                    @keydown.enter.prevent="fetchOrder"
                    class="bg-transparent border-0 border-none w-full text-sm h-full leading-5 text-principal tracking-wide ring-0 focus:border-0 focus:ring-0 outline-none outline-0 focus:outline-none focus:border-none focus:shadow-none shadow-none"
                    placeholder="Buscar N° orden">
            </div>
            <button type="submit" @click.prevent="fetchOrder"
                class="bg-principal rounded-3xl text-white focus:ring focus:ring-white absolute right-0 box-border border-2 border-principal z-0 h-10 w-10 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="block w-full h-full p-2 text-colorbuttonsearchmarketplace">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </button>
        </form>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('searchpublicalin', () => ({
                search: '',
                fetchOrder() {
                    fetch(`{{ route('api.admin.searchorder') }}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                search: this.search
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect;
                            } else {
                                alert(data.error);
                            }
                        }).catch((e) => {
                            console.log(e);
                        });
                }
            }))
        })
    </script>
</div>
