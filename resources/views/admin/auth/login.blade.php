<x-guest-layout>
    @section('title', 'Login Admin | PMB Dyah Sumarmo')
    <div class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-32 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full mx-auto bg-white rounded-xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Admin Panel</h2>
                <p class="text-gray-600 mt-2">Silakan masuk ke akun admin Anda</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div class="relative">
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-envelope"></i>
                        </span>
                        <x-text-input id="email"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                            placeholder="admin@email.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <x-input-label for="password" :value="__('Password')"
                            class="block text-sm font-medium text-gray-700" />
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:text-blue-500 font-medium"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-lock-alt"></i>
                        </span>
                        <x-text-input id="password"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Masukkan password" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" name="remember">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                        {{ __('Ingat saya') }}
                    </label>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all duration-200">
                        {{ __('Masuk sebagai Admin') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
