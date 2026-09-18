<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Teman - TemanKU</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col antialiased">

    <!-- Navbar Sederhana -->
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-2xl mx-auto px-4 py-4 flex items-center justify-between">
            <a class="text-xl font-bold text-gray-900 tracking-tight">
                Teman<span class="text-blue-600">KU</span>
            </a>
        </div>
    </header>

    <!-- Konten Form Utama -->
    <main class="max-w-2xl mx-auto px-4 py-8 flex-1 w-full">

        <div class="mb-6">
            <h1 class="text-xl font-bold text-gray-900">Tambah Data Teman</h1>
            <p class="text-sm text-gray-500 mt-1">Masukkan informasi teman sekelas di formulir bawah ini.</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 shadow-xs p-6">
            <form action="/simpan_teman" method="POST" class="space-y-4">
                @csrf

                <!-- Nama Teman -->
                <div>
                    <label for="nama_teman" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Teman <span class="text-red-500">*</span>
                    </label>
                    <input type="text"
                           id="nama_teman"
                           name="nama_teman"
                           value="{{ old('nama_teman') }}"
                           placeholder="Masukkan nama teman..."
                           class="w-full px-3.5 py-2.5 bg-white border rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-colors @error('nama_teman') border-red-400 bg-red-50/20 @else border-gray-300 @enderror">
                    @error('nama_teman')
                        <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Grid: Tanggal Lahir & Nomor Kursi -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">
                            Tanggal Lahir <span class="text-red-500">*</span>
                        </label>
                        <input type="date"
                               id="tanggal_lahir"
                               name="tanggal_lahir"
                               value="{{ old('tanggal_lahir') }}"
                               class="w-full px-3.5 py-2.5 bg-white border rounded-lg text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-colors @error('tanggal_lahir') border-red-400 bg-red-50/20 @else border-gray-300 @enderror">
                        @error('tanggal_lahir')
                            <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor Kursi -->
                    <div>
                        <label for="nomor_kursi" class="block text-sm font-medium text-gray-700 mb-1">
                            Nomor Kursi (1-36) <span class="text-red-500">*</span>
                        </label>
                        <input type="number"
                               id="nomor_kursi"
                               name="nomor_kursi"
                               min="1"
                               max="36"
                               value="{{ old('nomor_kursi') }}"
                               placeholder="Contoh: 12"
                               class="w-full px-3.5 py-2.5 bg-white border rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-colors @error('nomor_kursi') border-red-400 bg-red-50/20 @else border-gray-300 @enderror">
                        @error('nomor_kursi')
                            <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Grid: Hobi & Makanan Favorit -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Hobi -->
                    <div>
                        <label for="hobi" class="block text-sm font-medium text-gray-700 mb-1">
                            Hobi <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               id="hobi"
                               name="hobi"
                               value="{{ old('hobi') }}"
                               placeholder="Contoh: Membaca"
                               class="w-full px-3.5 py-2.5 bg-white border rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-colors @error('hobi') border-red-400 bg-red-50/20 @else border-gray-300 @enderror">
                        @error('hobi')
                            <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Makanan Favorit -->
                    <div>
                        <label for="makanan_favorit" class="block text-sm font-medium text-gray-700 mb-1">
                            Makanan Favorit <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               id="makanan_favorit"
                               name="makanan_favorit"
                               value="{{ old('makanan_favorit') }}"
                               placeholder="Contoh: Nasi Goreng"
                               class="w-full px-3.5 py-2.5 bg-white border rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-colors @error('makanan_favorit') border-red-400 bg-red-50/20 @else border-gray-300 @enderror">
                        @error('makanan_favorit')
                            <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                    <a href="/" class="px-4 py-2 border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-xs">
                        Simpan
                    </button>
                </div>

            </form>
        </div>

    </main>

    <!-- Footer Simpel -->
    <footer class="border-t border-gray-200 bg-white py-4 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} TemanKU
    </footer>

</body>
</html>
