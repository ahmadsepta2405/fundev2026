@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-14">

    {{-- HERO / PAGE HEADER --}}
    <section class="bg-gradient-to-r from-slate-900 to-slate-700 rounded-3xl p-8 text-white shadow-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h1 class="text-3xl font-semibold tracking-tight">
                    Dashboard Servis
                </h1>
                <p class="text-slate-300 mt-2">
                    Monitoring performa servis, pelanggan, dan lokasi usaha
                </p>
            </div>

            <button
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl
                       bg-white text-slate-900 text-sm font-semibold
                       hover:bg-slate-100 transition shadow">
                + Tambah Servis
            </button>
        </div>
    </section>

    {{-- BANNER IMAGE --}}
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-3xl overflow-hidden shadow-sm">
            <img
                src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04"
                class="w-full h-64 object-cover"
                alt="Service Center">
        </div>

        <div class="bg-slate-900 rounded-3xl p-6 text-white flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-semibold">
                    Service Berkualitas
                </h3>
                <p class="text-slate-300 mt-2 text-sm">
                    Teknisi profesional, cepat & terpercaya
                </p>
            </div>
            <a href="/service"
               class="mt-6 inline-flex justify-center bg-white text-slate-900
                      rounded-xl px-4 py-2 text-sm font-medium hover:bg-slate-100 transition">
                Lihat Layanan
            </a>
        </div>
    </section>

    {{-- KPI / STATISTICS --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

        <div class="stat-card">
            <div class="stat-icon bg-emerald-100 text-emerald-600">✔</div>
            <p class="stat-label">Servis Selesai</p>
            <h2 class="stat-value">{{ $stats['completed'] ?? 50 }}</h2>
            <p class="stat-note text-emerald-600">+12% bulan ini</p>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-blue-100 text-blue-600">⚙</div>
            <p class="stat-label">Dalam Proses</p>
            <h2 class="stat-value">{{ $stats['progress'] ?? 18 }}</h2>
            <p class="stat-note text-blue-600">Aktif</p>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-amber-100 text-amber-600">⏳</div>
            <p class="stat-label">Menunggu Sparepart</p>
            <h2 class="stat-value">{{ $stats['waiting'] ?? 7 }}</h2>
            <p class="stat-note text-amber-600">Perlu follow-up</p>
        </div>

        <div class="stat-card">
            <div class="stat-icon bg-violet-100 text-violet-600">👥</div>
            <p class="stat-label">Total Pelanggan</p>
            <h2 class="stat-value">{{ $stats['customer'] ?? 132 }}</h2>
            <p class="stat-note text-violet-600">Pelanggan aktif</p>
        </div>

    </section>

    {{-- MAIN CONTENT --}}
    <section class="grid grid-cols-1 xl:grid-cols-3 gap-8">

        {{-- ACTIVITY TABLE --}}
        <div class="xl:col-span-2 bg-white rounded-3xl border border-slate-100 shadow-sm">
            <div class="px-6 py-5 border-b flex items-center justify-between">
                <h3 class="font-semibold text-lg text-slate-900">
                    Aktivitas Terbaru
                </h3>
                <span class="text-xs text-slate-400">
                    Update realtime
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-slate-50 text-slate-500">
                        <tr>
                            <th class="px-6 py-4 text-left font-medium">Customer</th>
                            <th class="px-6 py-4 text-left font-medium">Perangkat</th>
                            <th class="px-6 py-4 text-left font-medium">Status</th>
                            <th class="px-6 py-4 text-left font-medium">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr class="hover:bg-slate-50">
                            <td class="px-6 py-4 flex items-center gap-3">
                                <img src="https://i.pravatar.cc/40?img=1" class="w-10 h-10 rounded-full">
                                <span class="font-medium">Andi</span>
                            </td>
                            <td class="px-6 py-4">Laptop Asus</td>
                            <td class="px-6 py-4">
                                <span class="badge success">Selesai</span>
                            </td>
                            <td class="px-6 py-4 text-slate-500">03 Feb 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- LOCATION --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b">
                <h3 class="font-semibold text-lg text-slate-900">
                    Lokasi Service Center
                </h3>
                <p class="text-sm text-slate-500 mt-1">
                    Alamat & peta lokasi
                </p>
            </div>

            <div class="h-64">
                <iframe
                    class="w-full h-full border-0"
                    src="https://www.google.com/maps?q=jakarta&output=embed"
                    loading="lazy">
                </iframe>
            </div>

            <div class="p-6 text-sm text-slate-600 space-y-2">
                <p class="font-medium text-slate-900">
                    Laptop Service Center
                </p>
                <p>Jl. Teknologi No. 21, Jakarta</p>
                <p>Senin – Sabtu · 09.00 – 18.00</p>
            </div>
        </div>

    </section>

</div>

{{-- COMPONENT STYLES --}}
<style>
.stat-card {
    @apply bg-white rounded-3xl p-6 shadow-sm border border-slate-100
           hover:shadow-md transition;
}
.stat-icon {
    @apply w-12 h-12 rounded-xl flex items-center justify-center
           text-lg font-semibold mb-4;
}
.stat-label {
    @apply text-sm text-slate-500;
}
.stat-value {
    @apply text-3xl font-semibold text-slate-900 mt-1;
}
.stat-note {
    @apply text-xs mt-1;
}
.badge {
    @apply inline-flex px-3 py-1 rounded-full text-xs font-medium;
}
.badge.success {
    @apply bg-emerald-100 text-emerald-700;
}
.badge.info {
    @apply bg-blue-100 text-blue-700;
}
</style>
@endsection
