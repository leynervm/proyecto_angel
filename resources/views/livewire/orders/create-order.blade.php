<div x-data="data">

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
                        <x-input type="number" class="block w-full" x-model="document"
                            x-on:keydown.enter.prevent="searchcliente" onkeypress="return validarNumero(event,11)" />
                        <x-input-error for="document" />
                    </div>
                    <div class="lg:col-span-2">
                        <x-label value="NOMBRES CLIENTE :" />
                        <x-input class="block w-full" x-model="name" />
                        <x-input-error for="name" />
                    </div>
                    <div class="">
                        <x-label value="FECHA ENTREGA SOLICITADA:" />
                        <x-input class="block w-full" wire:model.defer="fechaentrega" type="date" />
                        <x-input-error for="fechaentrega" />
                    </div>
                </div>

                @if (count($itemservices) > 0)
                    <div class="w-full flex flex-col gap-1 mt-2">
                        @foreach ($itemservices as $key => $item)
                            <div class="w-full rounded-xl p-2 text-xs shadow">
                                <h1 class="w-full text-blue-700 text-sm">{{ $item['name'] }}</h1>
                                <p class="text-xs text-neutral-500">{{ $item['detalle'] }}</p>
                                <div class="w-full grid grid-cols-2 text-neutral-900">
                                    <div>
                                        <span class="font-semibold text-lg">{{ $item['cantidad'] }} UND</span>
                                        <small class=""> \ P.UNIT. :{{ $item['price'] }}</small>
                                    </div>
                                    <small class="text-end">IMPORTE :
                                        <span
                                            class="text-end font-semibold text-xl">{{ number_format($item['importe'], 2, '.', ', ') }}</span>
                                    </small>
                                </div>

                                <div class="w-full flex justify-end pt-2">
                                    <x-button-delete wire:key="delservice_{{ $item['service_id'] }}"
                                        wire:click="removeitem({{ $key }})" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-red-600 font-semibold text-xs mt-2">No existen servicios agregados.</p>
                @endif

                <div class="w-full text-neutral-900 mt-3">
                    <p class="text-end text-xl font-semibold">
                        <small class="text-xs font-normal">TOTAL : S/.</small>
                        {{ number_format($amount, 2, '.', ', ') }}
                    </p>
                </div>


                <hr class="mt-5 mb-3">
                <label for="showformadd" class="cursor-pointer text-xs font-semibold text-neutral-800 pt-8 pb-3">
                    <input class="cursor-pointer" type="checkbox" x-model="showformadd" id="showformadd">
                    AGREGAR SERVCIOS AL PEDIDO
                </label>

                <div class="w-full block mt-3" x-show="showformadd" style="display: none" x-cloak x-transition>
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
                                x-bind:aria-label="service_id ? selectedOption.name : 'Seleccionar'">
                                <span class="text-xs w-full text-left truncate font-normal text-colorsubtitleform"
                                    x-text="service_id ? selectedOption.name : 'Seleccionar...'"></span>

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

                                <div class="" wire:ignore>
                                    <div class="relative p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke="currentColor" fill="none" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="absolute left-4 top-1/2 w-5 h-5 -translate-y-1/2 text-colorsubtitleform">
                                            <path
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>
                                        <x-input class="w-full block p-2 pl-11 pr-4" name="search"
                                            aria-label="Search" @input="getFilteredOptions" x-ref="search"
                                            x-model="search" placeholder="Search" autocomplete="off"
                                            {{--  @input.debounce.300ms="fetchServices" --}} />
                                    </div>

                                    <ul class="flex max-h-60 p-1 flex-col overflow-y-auto">
                                        <li class="hidden px-4 py-2 text-sm text-neutral-900 "
                                            x-ref="noResultsMessage">
                                            <span>No se encontraron resultados</span>
                                        </li>
                                        <template x-for="(item, index) in filteredServices" key="item.id">
                                            <li class="combobox-option rounded-md inline-flex cursor-pointer justify-between items-center gap-2 p-1 text-xs text-neutral-900 hover:bg-neutral-300 focus-visible:border-none focus-visible:bg-neutral-300 focus-visible:outline-none"
                                                x-show="filteredServices.length > 0" role="option"
                                                x-on:click="setSelectedOption(item)"
                                                x-on:keydown.enter="setSelectedOption(item)"
                                                x-bind:id="'option-' + index" tabindex="0"
                                                :class="(service_id == item.id) ? 'bg-neutral-300' : 'bg-white'">

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
                                                            x-bind:class="service_id == item.id ? 'font-bold' : null"
                                                            x-text="item.name"></p>
                                                        <p class="text-neutral-700 text-[10px] font-semibold"
                                                            x-text="item.price"></p>
                                                        <span class="sr-only"
                                                            x-text="service_id == item.id ? 'selected' : null"></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <x-input-error for="service_id" />
                    </div>

                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 mt-2">
                        <div class="">
                            <x-label value="CANTIDAD" />
                            <x-input type="number" class="block w-full" x-model="cantidad"
                                wire:model.defer="cantidad" wire:keydown.enter.prevent="addservice"
                                onkeypress="return validarDecimal(event,12)" />
                            <x-input-error for="cantidad" />
                        </div>
                        <div class="">
                            <x-label value="PRECIO :" />
                            <x-input type="number" class="block w-full" x-model="price" wire:model.defer="price"
                                wire:keydown.enter.prevent="addservice"
                                onkeypress="return validarDecimal(event,11)" />
                            <x-input-error for="price" />
                        </div>
                        <div class="sm:col-span-2 md:col-span-3">
                            <x-label value="ESPECIFICACIONES DEL PEDIDO :" />
                            <x-input class="block w-full" x-model="detalle" wire:model.defer="detalle"
                                wire:keydown.enter.prevent="addservice" />
                            <x-input-error for="detalle" />
                        </div>
                    </div>

                    <div class="w-full mt-2 flex">
                        <x-button type="button" wire:loading.attr="disabled" wire:click="addservice">
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

    <x-loading style="display: flex" x-show="searching" />
    <x-loading wire:loading.flex />

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                open: false,
                searching: false,
                showformadd: true,
                document: @entangle('document').defer,
                name: @entangle('name').defer,
                search: '',
                services: [],
                filteredServices: [],
                isOpen: false,
                openedWithKeyboard: false,
                selectedOption: null,
                service_id: @entangle('service_id').defer,
                price: @entangle('price').defer,
                importe: 0,
                amount: @entangle('amount').defer,
                cantidad: @entangle('cantidad').defer,
                detalle: @entangle('detalle').defer,
                init() {
                    this.fetchServices();
                    this.$watch("cantidad", (value) => {
                        if (value > 0) {
                            this.importe = value * this.price;
                        }
                    })

                    this.$watch("price", (value) => {
                        if (value > 0) {
                            this.importe = value * this.cantidad;
                        }
                    })
                },
                searchcliente() {
                    this.searching = true;
                    fetch(`{{ route('api.admin.searchcliente') }}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                document: this.document
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                this.name = data.name;
                            } else {
                                alert(data.error);
                            }
                            this.searching = false;
                        }).catch((e) => {
                            console.log(e);
                            this.searching = false;
                        });
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
                    this.service_id = null
                    this.price = 0
                    this.subtotal = 0
                    this.$wire.$refresh()
                },
                fetchServices() {
                    this.error = '',
                        fetch(`{{ route('admin.services.json') }}`, {
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
                            if (data.error) {
                                this.error = data.error;
                            } else {
                                this.services = data;
                                this.filteredServices = data;
                            }
                        })
                        .catch(() => {
                            this.error = 'There was an error processing your request.';
                            // console.log(this.error);
                        });
                },
                setSelectedOption(option) {
                    this.service_id = option.id
                    this.selectedOption = option
                    this.price = option.price
                    this.isOpen = false
                    this.openedWithKeyboard = false
                    this.$refs.hiddenTextField.value = option.value
                },
                getFilteredOptions() {
                    this.filteredServices = this.services.filter((item) =>
                        item.name.toLowerCase().includes(this.search.toLowerCase()));
                    console.log(this.filteredServices);
                    if (this.filteredServices.length === 0) {
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
