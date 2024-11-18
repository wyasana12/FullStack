<!DOCTYPE html>
<html>

<head>
    <title>Konfirmasi Pemesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="bg-gradient-to-br from-cyan-500 to-blue-600 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Terima Kasih Pemesanan Anda telah Berhasil!</h1>
        <p class="text-gray-600 mb-6">Anda bisa kembali ke halaman dashboard untuk melihat
            detail pemesanan Anda!</p>
        <p class="text-green-600 font-medium">{{ session('success') }}</p>
        <a href="{{ route('dashboard') }}"
            class="inline-block mt-8 px-5 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg shadow-lg hover:from-cyan-600 hover:to-blue-700 transition-all duration-200">Kembali
            ke Dashboard</a>
    </div>
</body>

</html>
