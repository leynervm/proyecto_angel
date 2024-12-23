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
                    <img class="h-full max-w-28 sm:max-w-40 w-auto m-auto object-center object-scale-down"
                        src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt="">
                </div>
            </a>
        </div>

        <div class="mr-6 relative flex-1 hidden xl:flex">
            <form @submit.prevent="fetchOrder" autocomplete="off"
                class="w-full ml-auto max-w-xl bg-none self-center flex gap-2 justify-end cursor-pointer">
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
        </div>

        <div class="w-full flex flex-1 sm:w-auto sm:flex-none sm:ml-auto sm:px-3">
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
        <form @submit.prevent="fetchOrder" autocomplete="off" class="w-full self-center flex gap-2 px-2 cursor-pointer relative">
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
