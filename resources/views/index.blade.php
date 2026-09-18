<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TemanKU</title>
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
        <div class="max-w-5xl mx-auto px-4 py-4 flex items-center justify-between">
            <a class="text-xl font-bold text-gray-900 tracking-tight">
                Teman<span class="text-blue-600">KU</span>
            </a>
            <a href="/tambah_teman" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-xs">
                Tambah Teman
            </a>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="max-w-5xl mx-auto px-4 py-8 flex-1 w-full">

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-800 text-sm flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="text-green-600 hover:text-green-900 font-bold ml-4">&times;</button>
            </div>
        @endif

        <!-- Header Halaman -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-900">Daftar Teman</h1>
                <p class="text-sm text-gray-500 mt-0.5">Total {{ count($semuateman) }} teman terdaftar</p>
            </div>
        </div>

        <!-- Grid Kartu Teman -->
        @if(count($semuateman) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($semuateman as $teman)
                    <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-xs hover:border-gray-300 transition-colors flex flex-col justify-between">
                        <div>
                            <!-- Header Kartu: Nama & Nomor Kursi -->
                            <div class="flex items-start justify-between gap-2 mb-3">
                                <div>
                                    <h3 class="font-semibold text-gray-900 text-base">
                                        {{ $teman->nama_teman }}
                                    </h3>
                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Lahir: {{ \Carbon\Carbon::parse($teman->tanggal_lahir)->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                                <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-gray-100 text-gray-700 border border-gray-200 shrink-0">
                                    Kursi #{{ $teman->nomor_kursi }}
                                </span>
                            </div>

                            <hr class="border-gray-100 my-3">

                            <!-- Detail Singkat -->
                            <div class="space-y-2 text-sm text-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-400">Hobi</span>
                                    <span class="font-medium text-gray-800">{{ $teman->hobi }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-400">Makanan Favorit</span>
                                    <span class="font-medium text-gray-800">{{ $teman->makanan_favorit }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Kondisi Kosong -->
            <div class="bg-white rounded-xl border border-gray-200 p-8 text-center max-w-md mx-auto my-8">
                <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-3 text-xl">
                    👥
                </div>
                <h3 class="font-semibold text-gray-900">Belum ada data teman</h3>
                <p class="text-sm text-gray-500 mt-1 mb-4">Tambahkan data teman pertamamu sekarang.</p>
                <a href="/tambah_teman" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors">
                    + Tambah Teman
                </a>
            </div>
        @endif

    </main>

    <!-- Footer Simpel -->
    <footer class="border-t border-gray-200 bg-white py-4 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} TemanKU
    </footer>

</body>
</html>
