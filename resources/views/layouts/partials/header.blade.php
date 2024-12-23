<div class="header-marketplace" x-data="searchpublicalin">
    <div class="w-full mx-auto contenedor flex items-center relative">
        <div class="hidden lg:flex items-center h-full flex-shrink-0 max-w-60 lg:max-w-xs">
            <a href="/" class="w-full p-1 lg:p-2 h-[90%]">
                <img class="block mx-auto h-full w-full object-scale-down"
                    src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt="">
            </a>
        </div>

        <div class="flex-shrink-0 lg:pr-5">
            <a class="button-sidebar lg:hidden px-2" href="/">
                <div class="w-full flex-1 p-1 lg:hidden h-full">
                    <img class="h-full w-auto max-h-14 xs:max-h-16  m-auto object-center object-scale-down"
                        src="{{ asset('assets/images/ISOTIPO.svg') }}" alt="">
                </div>
            </a>
        </div>



        <ul class="w-full flex flex-1 sm:flex sm:justify-end gap-1 sm:px-3">
            <li class="relative h-[68%] flex-1 w-full max-w-xs block">
                <form @submit.prevent="fetchOrder" autocomplete="off"
                    class="relative w-full hidden lg:flex bg-none self-center gap-0.5 justify-end cursor-pointer">
                    <input type="search" name="search" autocomplete="off" x-ref="search" x-model="search"
                        @keydown.enter.prevent="fetchOrder"
                        class="w-full flex-1 h-[46px] bg-transparent border-2 border-secondary rounded-xl text-sm leading-5 text-colorsearchmarketplace tracking-wide focus:ring-0 focus:border-secondary outline-none outline-0 focus:outline-none focus:shadow-none shadow-none"
                        placeholder="N° de Orden" id="search">

                    <button type="submit" @click.prevent="fetchOrder"
                        class="bg-secondary text-white rounded-xl focus:ring-2 focus:ring-secondary box-border border-2 border-orange-500 z-10 h-[46px] w-[46px] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="block w-full h-full p-2 text-colorbuttonsearchmarketplace">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                </form>
            </li>
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

    <div class="lg:hidden w-full px-2 py-1 pb-2 flex z-[8]">
        <form @submit.prevent="fetchOrder" autocomplete="off"
            class="w-full max-w-xs mx-auto lg:ml-auto self-center flex gap-0.5 cursor-pointer relative">
            <input type="text" name="search" autocomplete="off" x-model="search" @keydown.enter.prevent="fetchOrder"
                class="w-full flex-1 h-[46px] bg-transparent border-2 border-secondary rounded-xl text-sm leading-5 text-colorsearchmarketplace tracking-wide focus:ring-0 focus:border-secondary outline-none outline-0 focus:outline-none focus:shadow-none shadow-none"
                placeholder="N° de Orden">
            <button type="submit" @click.prevent="fetchOrder"
                class="bg-secondary text-white rounded-xl focus:ring-2 focus:ring-secondary box-border border-2 border-orange-500 z-10 h-[46px] w-[46px] flex justify-center items-center">
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
                                // 'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                search: this.search
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
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
