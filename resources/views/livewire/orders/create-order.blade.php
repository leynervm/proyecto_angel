<div x-data="data">

    {{-- ADD PHONE_NUMBER="51970412547" --}}
    <x-button wire:click="$set('open', true)">NUEVO PEDIDO</x-button>

    <x-dialog-modal wire:model="open" maxWidth="4xl" footerAlign="justify-end">
        <x-slot name="title">
            <h1 class="font-semibold text-[10px]">REGISTRAR NUEVO PEDIDO</h1>
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="save" class="w-full">
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
                    <div class="">
                        <x-label value="DOCUMENTO CLIENTE :" />
                        <x-input class="block w-full" wire:model.defer="document" />
                        <x-input-error for="document" />
                    </div>
                    <div class="lg:col-span-2">
                        <x-label value="NOMBRES CLIENTE :" />
                        <x-input class="block w-full" wire:model.defer="name" />
                        <x-input-error for="name" />
                    </div>
                    <div class="">
                        <x-label value="FECHA ENTREGA SOLICITADA:" />
                        <x-input class="block w-full" wire:model.defer="dateentrega" type="date" />
                        <x-input-error for="dateentrega" />
                    </div>
                </div>

                @if (count($itemservices) > 0)
                    <div class="w-full flex flex-col gap-1 mt-2">
                        @foreach ($itemservices as $key => $item)
                            <div class="w-full rounded-xl p-3 text-xs shadow">
                                {{ print_r($item) }}

                                <div class="w-full flex justify-end">
                                    <x-button-delete wire:key="delservice_{{ $item->id }}"
                                        wire:click="removeitem({{ $key }})" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-red-600 font-semibold text-xs mt-2">No existen servicios agregados.</p>
                @endif

                <h1 class="text-xs font-semibold text-neutral-800 pt-8 pb-3">AGREGAR SERVCIOS AL PEDIDO</h1>

                <div>

                    <div class="flex w-full flex-col gap-1" x-on:keydown="handleKeydownOnOptions($event)"
                        x-on:keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                        <x-label value="Seleccionar producto :" />
                        <div class="relative">
                            <button type="button"
                                class="inline-flex w-full items-center justify-between gap-2 border border-next-300 rounded-lg px-3 pr-6 py-2 text-sm font-medium tracking-wide text-colorinput transition"
                                role="combobox" aria-controls="statesList" aria-haspopup="listbox"
                                x-on:click="isOpen = ! isOpen" x-on:keydown.down.prevent="openedWithKeyboard = true"
                                x-on:keydown.enter.prevent="openedWithKeyboard = true"
                                x-on:keydown.space.prevent="openedWithKeyboard = true"
                                x-bind:aria-expanded="isOpen || openedWithKeyboard"
                                x-bind:aria-label="producto_id ? selectedOption.name : 'Seleccionar'">
                                <span class="text-xs w-full text-left truncate font-normal text-colorsubtitleform"
                                    x-text="producto_id ? selectedOption.name : 'Seleccionar...'"></span>

                                <svg class="w-5 h-5 block" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" />
                                </svg>

                            </button>

                            <input id="state" name="state" autocomplete="off" x-ref="hiddenTextField"
                                hidden="" />
                            <div style="display: none;" x-cloak x-show="isOpen || openedWithKeyboard" id="statesList"
                                class="absolute left-0 top-0 z-10 w-full overflow-hidden bg-white rounded-lg mt-10 shadow-lg"
                                role="listbox" aria-label="states list"
                                x-on:click.outside="isOpen = false, openedWithKeyboard = false"
                                x-on:keydown.down.prevent="$focus.wrap().next()"
                                x-on:keydown.up.prevent="$focus.wrap().previous()" x-transition
                                x-trap="openedWithKeyboard">

                                <div class="">
                                    <div class="relative p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke="currentColor" fill="none" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="absolute left-4 top-1/2 w-5 h-5 -translate-y-1/2 text-colorsubtitleform">
                                            <path
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>
                                        <x-input class="w-full block p-2 pl-11 pr-4" name="search" aria-label="Search"
                                            @input="getFilteredOptions(search)" x-ref="search" x-model="search"
                                            placeholder="Search" autocomplete="off" {{--  @input.debounce.300ms="fetchProducts" --}} />
                                    </div>

                                    <ul class="flex max-h-60 p-1 flex-col overflow-y-auto">
                                        <li class="hidden px-4 py-2 text-sm text-neutral-900 " x-ref="noResultsMessage">
                                            <span>No matches found</span>
                                        </li>
                                        <template x-for="(item, index) in filteredProducts"
                                            x-bind:key="item.id">
                                            <li class="combobox-option rounded-md inline-flex cursor-pointer justify-between items-center gap-2 p-1 text-xs text-neutral-900 hover:bg-neutral-300 focus-visible:border-none focus-visible:bg-neutral-300 focus-visible:outline-none"
                                                role="option" x-on:click="setSelectedOption(item)"
                                                x-on:keydown.enter="setSelectedOption(item)"
                                                x-bind:id="'option-' + index" tabindex="0"
                                                :class="(producto_id == item.id) ? 'bg-neutral-300' : 'bg-white'">

                                                <div class="w-full flex items-center gap-2">
                                                    <div class="w-16 xs:w-28 h-16 xs:h-20 rounded-lg">
                                                        <template x-if="item.image_url">
                                                            <img x-bind:src="item.image_url" alt=""
                                                                class="object-scale-down w-full h-full overflow-hidden">
                                                        </template>
                                                        <template x-if="item.image_url == null">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="text-neutral-500 block h-full w-full">
                                                                <circle cx="16.5" cy="7.5" r="1.5" />
                                                                <path
                                                                    d="M2 14.1354C2.66663 14.0455 3.3406 14.0011 4.01569 14.0027C6.87163 13.9466 9.65761 14.7729 11.8765 16.3342C13.9345 17.7821 15.3805 19.7749 16 22" />
                                                                <path d="M13.5 17.5C14.5 16.5 15.1772 16.2768 16 16" />
                                                                <path
                                                                    d="M20 20.2132C18.6012 21.5001 16.3635 21.5001 12 21.5001C7.52166 21.5001 5.28249 21.5001 3.89124 20.1089C2.5 18.7176 2.5 16.4785 2.5 12.0001C2.5 7.63653 2.5 5.39882 3.78701 4" />
                                                                <path
                                                                    d="M20.0002 16C20.5427 16 21.048 16.2945 21.3967 16.5638C21.5 15.3693 21.5 13.8825 21.5 12C21.5 7.52166 21.5 5.28249 20.1088 3.89124C18.7175 2.5 16.4783 2.5 12 2.5C9.59086 2.5 7.82972 2.5 6.5 2.71659" />
                                                                <path d="M2 2L22 22" />
                                                            </svg>
                                                        </template>
                                                    </div>

                                                    <div class="flex-1 w-full text-[10px] sm:text-xs">
                                                        <p class="text-neutral-900 leading-3"
                                                            x-bind:class="producto_id == item.id ? 'font-bold' : null"
                                                            x-text="item.name"></p>
                                                        <p class="text-neutral-700 text-[10px] font-semibold"
                                                            x-text="item.price"></p>
                                                        <span class="sr-only"
                                                            x-text="producto_id == item.id ? 'selected' : null"></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <x-input-error for="producto_id" />
                    </div>






                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 mt-2">
                        <div class="">
                            <x-label value="CANTIDAD" />
                            <x-input class="block w-full" wire:model.defer="cantidad"
                                wire:keydown.enter.prevent="addservice" />
                            <x-input-error for="cantidad" />
                        </div>
                        <div class="">
                            <x-label value="PRECIO :" />
                            <x-input class="block w-full" wire:model.defer="price"
                                wire:keydown.enter.prevent="addservice" />
                            <x-input-error for="price" />
                        </div>
                        <div class="sm:col-span-2 md:col-span-3">
                            <x-label value="ESPECIFICACIONES DEL PEDIDO :" />
                            <x-input class="block w-full" wire:model.defer="detalle"
                                wire:keydown.enter.prevent="addservice" />
                            <x-input-error for="detalle" />
                        </div>
                    </div>

                    <div class="w-full mt-2 flex">
                        <x-button type="button" wire:loading.attr="disabled">
                            {{ __('Add item') }}</x-button>
                    </div>
                </div>

                <div class="w-full mt-2 flex pt-4 justify-end">
                    <x-button type="submit" wire:loading.attr="disabled">
                        {{ __('Save') }}</x-button>
                </div>
            </form>
        </x-slot>
    </x-dialog-modal>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                open: false,
                search: '',
                products: [],
                filteredProducts: [],
                isOpen: false,
                openedWithKeyboard: false,
                selectedOption: null,
                producto_id: @entangle('service_id').defer,
                price: @entangle('price').defer,
                importe: 0,
                amount: @entangle('amount').defer,

                init() {
                    this.fetchProducts();
                    // this.$watch("typedescuento", (value) => {
                    //     console.log(value);
                    // })


                },
                numeric() {

                    // this.price = toDecimal(this.price > 0 ? this.price : 0);
                },

                addproducto() {
                    // this.$wire.call('addproducto', this.selectedOption).then(result => {
                    // console.log('completed succesfull');
                    // });
                },
                clearproducto() {
                    this.search = ''
                    this.product = null
                    this.selectedOption = null
                    this.isOpen = false
                    this.openedWithKeyboard = false
                    this.producto_id = null
                    this.price = 0
                    this.subtotal = 0
                    this.$wire.$refresh()
                },
                fetchProducts() {
                    this.error = '',
                        fetch(`{{ route('dashboard.services.json') }}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                // search: this.search
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            // console.log(data);
                            if (data.error) {
                                this.error = data.error;
                            } else {
                                this.products = data;
                                this.filteredProducts = data;
                            }
                        })
                        .catch(() => {
                            this.error = 'There was an error processing your request.';
                            // console.log(this.error);
                        });
                },
                setSelectedOption(option) {
                    this.producto_id = option.id
                    this.selectedOption = option
                    this.isOpen = false
                    this.openedWithKeyboard = false
                    this.$refs.hiddenTextField.value = option.value
                    // this.almacens = almacens;
                    // this.$wire.almacens = almacens
                    // this.$wire.$refresh()

                },
                getFilteredOptions(query) {
                    this.filteredProducts = this.products.filter((product) =>
                        product.name.toLowerCase().includes(query.toLowerCase()));

                    if (this.filteredProducts.length === 0) {
                        this.$refs.noResultsMessage.classList.remove('hidden');
                    } else {
                        this.$refs.noResultsMessage.classList.add('hidden');
                    }
                },
                handleKeydownOnOptions(event) {
                    // if the user presses backspace or the alpha-numeric keys, focus on the search field
                    if ((event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode >= 48 &&
                            event
                            .keyCode <=
                            57) || event.keyCode === 8) {
                        this.$refs.search.focus()
                    }
                }
            }))
        })
    </script>
</div>
