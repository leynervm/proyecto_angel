<x-guest-layout>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="relative min-h-screen flex flex-col justify-center items-center p-10 md:p-0 bg-white">
        <div class="relative w-full sm:max-w-sm">
            <div class="card bg-blue-200 shadow-lg w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-orange-300 shadow-lg w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl p-3 sm:p-6 bg-white shadow-md">
                <img class="w-full h-24 mx-auto p-1" src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt="">

                <label class="block text-primary text-center">
                    <span class="block font-semibold text-md my-3">LOGIN</span>
                </label>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-2">
                        <label for="dni" class="block text-xs font-semibold text-gray-600 uppercase">DNI</label>
                        <input id="dni" type="text" name="dni" placeholder="DNI"
                            value="{{ old('dni') }}"
                            class="block w-full text-xs sm:text-sm border-0 h-11 rounded-sm border-b border-gray-300 focus:border-gray-400 focus:ring-0"
                            required autofocus />
                    </div>

                    <div class="mt-3">
                        <label for="password"
                            class="block text-xs font-semibold text-gray-600 uppercase">CONTRASEÑA</label>
                        <input id="password" type="password" name="password" placeholder="Contraseña"
                            autocomplete="current-password"
                            class="mt-1 block w-full text-xs sm:text-sm border-0 h-11 rounded-sm border-b border-gray-300 focus:border-gray-400 focus:ring-0"
                            required />
                    </div>

                    <div class="mt-7 flex flex-wrap gap-3 justify-center sm:justify-between">
                        <label for="remember_me" class="inline-flex  items-center cursor-pointer">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-blue-500 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-7">
                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button
                            class="bg-primary w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner transform hover:-translate-x hover:scale-105 focus:outline-none transition ease-in-out duration-500">
                            <span class="inline-block mr-2">{{ __('Log in') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
