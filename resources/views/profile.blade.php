@extends('layouts.app')
@section('title','Profile')

@section('content')
<div class="space-y-16">

    {{-- HERO SECTION --}}
    <section class="relative h-72 rounded-3xl overflow-hidden">
        <img
            src="https://images.unsplash.com/photo-1521791136064-7986c2920216"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 to-slate-700/40"></div>

        <div class="relative z-10 h-full flex items-center px-8">
            <div class="max-w-2xl text-white">
                <h1 class="text-4xl font-bold tracking-tight">
                    Tentang Kami
                </h1>
                <p class="mt-3 text-slate-200">
                    Service center profesional dengan standar kualitas tinggi
                </p>
            </div>
        </div>
    </section>

    {{-- ABOUT CONTENT --}}
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- TEXT --}}
        <div class="lg:col-span-2 bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
            <h2 class="text-2xl font-semibold text-slate-900">
                Solusi Servis Terpercaya
            </h2>

            <p class="mt-4 text-slate-600 leading-relaxed">
                Kami adalah service center profesional yang berfokus pada
                perbaikan laptop, komputer, dan perangkat mobile dengan
                teknisi berpengalaman dan proses kerja yang transparan.
            </p>

            <p class="mt-4 text-slate-600 leading-relaxed">
                Sejak berdiri, kami telah membantu ribuan pelanggan dengan
                layanan cepat, akurat, dan bergaransi. Kepuasan pelanggan
                adalah prioritas utama kami.
            </p>

            <div class="mt-6 flex flex-wrap gap-4">
                <span class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium">
                    Teknisi Bersertifikat
                </span>
                <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
                    Bergaransi
                </span>
                <span class="px-4 py-2 rounded-full bg-violet-100 text-violet-700 text-sm font-medium">
                    Pelayanan Cepat
                </span>
            </div>
        </div>

        {{-- STATS --}}
        <div class="bg-slate-900 rounded-3xl p-8 text-white flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-semibold">
                    Kepercayaan Pelanggan
                </h3>
                <p class="text-slate-300 mt-2 text-sm">
                    Bukti kualitas layanan kami
                </p>
            </div>

            <div class="grid grid-cols-2 gap-6 mt-8">
                <div>
                    <p class="text-3xl font-bold">10+</p>
                    <p class="text-sm text-slate-300">Tahun Pengalaman</p>
                </div>
                <div>
                    <p class="text-3xl font-bold">3.000+</p>
                    <p class="text-sm text-slate-300">Pelanggan</p>
                </div>
                <div>
                    <p class="text-3xl font-bold">98%</p>
                    <p class="text-sm text-slate-300">Kepuasan</p>
                </div>
                <div>
                    <p class="text-3xl font-bold">24 Jam</p>
                    <p class="text-sm text-slate-300">Respon Support</p>
                </div>
            </div>

            <a href="#"
               class="mt-8 inline-flex justify-center rounded-xl bg-white text-slate-900 px-4 py-2 text-sm font-semibold hover:bg-slate-100 transition">
                Hubungi Kami
            </a>
        </div>

    </section>

</div>
@endsection
