<x-guest-layout>
    @section('title', 'Lupa Password | PMB Dyah Sumarmo')
    <div class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-32 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full mx-auto bg-white rounded-xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Lupa Password?</h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Jangan khawatir. Cukup masukkan alamat email Anda dan kami akan mengirimkan link untuk mengatur
                    ulang password Anda.
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                    <div class="mt-1">
                        <x-text-input id="email"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            type="email" name="email" :value="old('email')" required autofocus
                            placeholder="nama@email.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all duration-200">
                        {{ __('Kirim Link Reset Password') }}
                    </button>
                </div>

                <!-- Back to Login -->
                <div class="text-center mt-6">
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center text-sm text-cyan-600 hover:text-cyan-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali ke halaman login
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
