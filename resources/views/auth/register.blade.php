<x-guest-layout>
    @section('title', 'Register Form | PMB Dyah Sumarmo')
    <div class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full mx-auto bg-white rounded-xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Daftar Akun</h2>
                <p class="text-gray-600 mt-2">Silakan lengkapi data diri Anda</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div class="relative">
                    <x-input-label for="name" :value="__('Nama Lengkap')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-user"></i>
                        </span>
                        <x-text-input id="name"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            placeholder="Masukkan nama lengkap" />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Email Address -->
                <div class="relative">
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-envelope"></i>
                        </span>
                        <x-text-input id="email"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="email" name="email" :value="old('email')" required autocomplete="username"
                            placeholder="nama@email.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="relative">
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-lock-alt"></i>
                        </span>
                        <x-text-input id="password"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="password" name="password" required autocomplete="new-password"
                            placeholder="Minimal 8 karakter" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="relative">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')"
                        class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1 flex items-center">
                        <span class="absolute left-3 text-2xl text-gray-400 flex items-center">
                            <i class="bx bxs-lock-alt"></i>
                        </span>
                        <x-text-input id="password_confirmation"
                            class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="password" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Ulangi password" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all duration-200">
                        {{ __('Daftar Sekarang') }}
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-medium text-cyan-600 hover:text-cyan-500 ml-1">
                            Masuk di sini
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
