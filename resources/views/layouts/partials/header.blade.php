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

        <div class="mr-6 relative flex-1 hidden xl:flex" @click.away="products= [],selectedIndex=-1">
            <form @submit.prevent="handleEnter" autocomplete="off"
                class="w-full ml-auto max-w-xl bg-none self-center flex justify-end cursor-pointer">
                <div class="w-full flex h-[46px] m-0 bg-blue-100 justify-center items-center pl-6 rounded-3xl border-0.5 border-fondobuttonsearchmarketplace"
                    :class="products.length ? 'rounded-b-none' : ''">
                    <label for="searchheader-xl" class="absolute w-[1px] h-[1px] p-0 overflow-hidden">
                        Barra de búsqueda</label>
                    <input type="search" name="search" autocomplete="off" x-ref="search" x-model="search"
                        @input.debounce.300ms="fetchProducts" @keydown.enter.prevent="handleEnter"
                        @keydown.arrow-down.prevent="navigate(1)" @blur="handleBlur"
                        @keydown.arrow-up.prevent="navigate(-1)"
                        class="bg-transparent border-0 border-none w-full text-sm h-full leading-5 text-colorsearchmarketplace tracking-wide ring-0 focus:border-0 focus:ring-0 outline-none outline-0 focus:outline-none focus:border-none focus:shadow-none shadow-none"
                        placeholder="Buscar N° orden" id="search">
                </div>
                <button type="submit" @click.prevent="handleEnter;"
                    class="bg-principal text-white rounded-3xl focus:ring focus:ring-white absolute right-0 box-border border-2 border-principal z-10 h-[46px] w-[46px] flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="block w-full h-full p-2 text-colorbuttonsearchmarketplace">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </form>

            <ul class="w-full block absolute py-2 left-0 top-[100%] rounded-b-3xl bg-fondominicard z-[999]"
                x-show="products.length">
                <div class="rounded p-1 overflow-hidden xl:overflow-y-auto xl:max-h-[360px]">
                    <template x-for="(product, index) in products" :key="product.id">
                        <li class="w-full flex p-1">
                            <template x-if="product.image">
                                <div class="size-16 flex-shrink-0 rounded overflow-hidden">
                                    <img :src="product.image" alt="" class="w-full h-full object-scale-down">
                                </div>
                            </template>
                            <a x-html="highlight(product.name, search)"
                                :class="{ 'bg-fondohoverselect2': index === selectedIndex }"
                                class="block w-full flex-1 rounded text-colorsubtitleform p-2.5 text-xs leading-none hover:bg-fondohoverselect2"
                                :href="route('productos.show', product.slug)" {{--  @mouseenter="setSelected(index)" --}}></a>
                        </li>
                    </template>
                </div>
            </ul>
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

    <div class="xl:hidden w-full px-0 xs:px-3 py-1 pb-2 flex z-[8]" @click.away="products= [],selectedIndex=-1">
        <form @submit.prevent="handleEnter" autocomplete="off" class="w-full self-center flex cursor-pointer relative">
            <div class="w-full flex h-10 m-0 bg-blue-100 justify-center items-center rounded-3xl border-0.5 border-fondobuttonsearchmarketplace"
                :class="products.length ? 'rounded-b-none' : ''">
                <label for="searchheader-sm" class="absolute w-[1px] h-[1px] p-0 overflow-hidden">
                    Barra de búsqueda</label>
                <input type="text" name="search" autocomplete="off" x-model="search"
                    @input.debounce.300ms="fetchProducts" @keydown.enter.prevent="handleEnter" @blur="handleBlur"
                    class="bg-transparent border-0 border-none w-full text-sm h-full leading-5 text-principal tracking-wide ring-0 focus:border-0 focus:ring-0 outline-none outline-0 focus:outline-none focus:border-none focus:shadow-none shadow-none"
                    placeholder="Buscar N° orden">
            </div>
            <button type="submit" @click.prevent="handleEnter"
                class="bg-principal rounded-3xl text-white focus:ring focus:ring-white absolute right-0 box-border border-2 border-principal z-0 h-10 w-10 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="block w-full h-full p-2 text-colorbuttonsearchmarketplace">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </button>

            <ul class="w-full block absolute left-0 top-[100%] py-2 rounded-b-3xl bg-fondominicard z-[999]"
                x-show="products.length">
                <div class="rounded p-1 overflow-y-auto max-h-[calc(100vh-125px)]">
                    <template x-for="product in products" :key="product.id">
                        <li class="w-full flex p-1">
                            <template x-if="product.image">
                                <div class="size-16 flex-shrink-0 rounded overflow-hidden">
                                    <img :src="product.image" alt=""
                                        class="w-full h-full object-scale-down">
                                </div>
                            </template>
                            <a x-html="highlight(product.name, search)"
                                class="block w-full flex-1 rounded text-colorsubtitleform p-2.5 px-1 text-[10px] leading-none hover:bg-fondohoverselect2"
                                :href="route('productos.show', product.slug)"></a>
                        </li>
                    </template>
                </div>
            </ul>
        </form>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('searchpublicalin', () => ({
                search: '',
                products: [],
                error: '',
                selectedIndex: -1,
                coincidencias: '',
                init() {
                    const url = new URL(window.location.href);
                    if (url.searchParams.get('coincidencias')) {
                        this.search = url.searchParams.get('coincidencias');
                    }
                    url.searchParams.forEach((value, key) => {
                        if (key == 'coincidencias') {
                            this.coincidencias = value
                        }
                    })
                },
                fetchProducts() {
                    this.error = '',
                        fetch(`{{ route('api.order.search') }}`, {
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
                            // console.log(data);
                            if (data.error) {
                                this.error = data.error;
                            } else {
                                // console.log(data.length);
                                this.products = data;
                                // console.log(this.products);
                                this.selectedIndex = -1;
                                if (data.length > 0) {
                                    this.backdrop = true;
                                    this.sidebar = this.isXL ? true : false;
                                    document.body.style.overflow = 'hidden';
                                }
                            }
                        })
                        .catch(() => {
                            this.error = 'There was an error processing your request.';
                            // console.log(this.error);
                        });
                },
                highlight(text, search) {
                    if (!search) return text;
                    const regex = new RegExp(`(${search.split(' ').join('|')})`, 'gi');
                    return text.replace(regex, '<span class="highlight">$1</span>');
                },
                route(name, id) {
                    const routes = {
                        'orders.search.results': '{{ route('orders.search.results', ':id') }}',
                    };

                    return routes[name].replace(':id', id);
                },
                redirectEnter() {
                    if (this.search.trim().length > 0) {
                        if (this.products.length == 0) {
                            window.location.href =
                                `{{ route('orders.search.results') }}?coincidencias=${encodeURIComponent(this.search)}`;
                        }
                        if (this.products.length > 1) {
                            window.location.href =
                                `{{ route('orders.search.results') }}?coincidencias=${encodeURIComponent(this.search)}`;
                        } else {
                            if (this.products.length == 1) {
                                window.location.href = this.route('productos.show', this.products[0]
                                    .slug);
                            }
                        }
                    } else {
                        this.handleBlur();
                    }
                },
                navigate(direction) {
                    if (this.products.length === 0) return;
                    if (direction === -1 && this.selectedIndex <= 0) {
                        this.selectedIndex = -1;
                        document.getElementById('search').focus();
                        return;
                    }
                    this.selectedIndex = (this.selectedIndex + direction + this.products.length) %
                        this.products.length;
                },
                setSelected(index) {
                    this.selectedIndex = index;
                },
                handleEnter() {
                    if (this.selectedIndex >= 0 && this.selectedIndex < this.products.length) {
                        window.location.href = this.route('productos.show', this.products[this
                            .selectedIndex].slug);
                    } else {
                        // Si no hay producto seleccionado, realizar la búsqueda general
                        this.redirectEnter();
                    }
                },
                handleBlur() {
                    const newURL = this.updateQueryString('coincidencias', this.search);
                    let coincidencias = '';
                    newURL.searchParams.forEach((value, key) => {
                        if (key == 'coincidencias') {
                            coincidencias = value
                        }
                    })

                    if (coincidencias != this.coincidencias) {
                        window.location.href = `{{ route('orders.search.results') }}${newURL.search}`;
                    }
                },
                updateQueryString(param, value) {
                    const url = new URL(window.location.href);
                    // // Reemplaza la URL en el navegador sin recargar la página
                    if (value == '') {
                        url.searchParams.delete(param);
                    } else {
                        url.searchParams.set(param, value);
                    }
                    window.history.replaceState(null, '', url);
                    return url;
                }
            }))
        })
    </script>
</div>
