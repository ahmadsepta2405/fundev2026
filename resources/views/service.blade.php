@extends('layouts.app')
@section('title','Service')

@section('content')
<div class="space-y-16">

    {{-- HERO --}}
    <section class="bg-gradient-to-r from-slate-900 to-slate-700 rounded-3xl p-10 text-white">
        <div class="max-w-2xl">
            <h1 class="text-4xl font-bold tracking-tight">
                Layanan Servis Kami
            </h1>
            <p class="mt-3 text-slate-300 leading-relaxed">
                Menyediakan solusi servis profesional untuk berbagai perangkat
                dengan teknisi berpengalaman dan proses transparan.
            </p>
        </div>
    </section>

    {{-- SERVICE LIST --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
        @foreach ([
            [
                'title' => 'Laptop',
                'img' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8',
                'icon' => '💻'
            ],
            [
                'title' => 'Smartphone',
                'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9',
                'icon' => '📱'
            ],
            [
                'title' => 'Komputer',
                'img' => 'https://images.unsplash.com/photo-1587202372775-e229f172b9d3',
                'icon' => '🖥'
            ]
        ] as $item)
        <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition">

            {{-- IMAGE --}}
            <div class="relative h-48 overflow-hidden">
                <img
                    src="{{ $item['img'] }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                <span class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold">
                    {{ $item['icon'] }} {{ $item['title'] }}
                </span>
            </div>

            {{-- CONTENT --}}
            <div class="p-6 space-y-3">
                <h3 class="text-xl font-semibold text-slate-900">
                    Servis {{ $item['title'] }}
                </h3>

                <p class="text-sm text-slate-600 leading-relaxed">
                    Penanganan profesional untuk perbaikan hardware dan software
                    dengan standar kualitas tinggi dan garansi servis.
                </p>

                <div class="flex items-center justify-between pt-4">
                    <span class="text-xs px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 font-medium">
                        Bergaransi
                    </span>

                    <a href="#"
                       class="text-sm font-semibold text-slate-900 hover:text-slate-700 transition">
                        Detail →
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </section>

</div>
@endsection
