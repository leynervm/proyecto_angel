<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    </x-authentication-card>

    <div class="relative min-h-screen flex flex-col justify-center items-center p-10 md:p-0 bg-white">
        <div class="relative w-full sm:max-w-sm">
            <div class="card bg-blue-200 shadow-lg w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-blue-300 shadow-lg w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl p-3 sm:p-6 bg-white shadow-md">
                <label class="block text-blue-500 text-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-20 h-20 mx-auto">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-16 h-16 mx-auto bg-blue-500 text-white p-3 rounded-2xl">
                        <path fill-rule="evenodd"
                            d="M17.75 7c.138 0 .25.112.25.25v.255c0 .397-.463.495-.808.495l-.543-1h1.101zm-.721 1.753c.32.593.473 1.126.473 1.833 0 .685-.198 1.267-.503 1.991v.923c0 .276-.224.5-.5.5h-.75c-.276 0-.5-.224-.5-.5v-.5h-6.5v.5c0 .276-.224.5-.5.5h-.749c-.276 0-.5-.224-.5-.5v-.924c-.304-.724-.503-1.306-.503-1.991 0-.707.154-1.24.473-1.833.414-.768.926-1.726 1.465-2.626.415-.69.631-.853 1.139-.944.767-.137 1.459-.182 2.426-.182s1.659.045 2.426.182c.508.091.725.253 1.139.945.539.9 1.05 1.857 1.464 2.626zm-8.029 1.497c0-.414-.336-.75-.75-.75s-.75.336-.75.75.336.75.75.75.75-.336.75-.75zm5 .5c0-.138-.112-.25-.25-.25h-3.5c-.138 0-.25.112-.25.25s.112.25.25.25h3.5c.138 0 .25-.112.25-.25zm1.471-2.764s-.37-.913-.815-1.571c-.101-.149-.258-.251-.435-.283-.756-.136-1.418-.179-2.221-.179s-1.465.043-2.22.179c-.177.032-.334.134-.435.283-.445.658-.816 1.571-.816 1.571.821.157 2.155.249 3.471.249s2.65-.092 3.471-.249zm1.029 2.264c0-.414-.336-.75-.75-.75s-.75.336-.75.75.336.75.75.75.75-.336.75-.75zm-9.149-3.25h-1.101c-.138 0-.25.112-.25.25v.255c0 .397.463.495.808.495l.543-1zm4.649-7c-5.523 0-10 4.394-10 9.815 0 5.505 4.375 9.268 10 14.185 5.625-4.917 10-8.68 10-14.185 0-5.421-4.478-9.815-10-9.815zm0 18c-4.419 0-8-3.582-8-8s3.581-8 8-8c4.419 0 8 3.582 8 8s-3.581 8-8 8z"
                            clip-rule="evenodd" />
                    </svg>
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

                        {{-- <div class="w-full inline-flex text-right"> --}}
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="underline inline-flex  text-sm text-gray-600 hover:text-gray-900">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        {{-- </div> --}}
                    </div>

                    <div class="mt-7">
                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button
                            class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner transform hover:-translate-x hover:scale-105 focus:outline-none transition ease-in-out duration-500">
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
