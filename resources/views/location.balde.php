@extends('layouts.app')
@section('title','Lokasi')

@section('content')
<div class="space-y-6">

<h1 class="text-3xl font-semibold">Lokasi Kami</h1>

<div class="bg-white rounded-3xl overflow-hidden shadow-sm">
    <iframe
        class="w-full h-96"
        src="https://www.google.com/maps?q=jakarta&output=embed">
    </iframe>
</div>

<div class="bg-white p-6 rounded-2xl shadow-sm">
    <p class="font-medium">Laptop Service Center</p>
    <p class="text-sm text-slate-500">
        Jl. Teknologi No.21, Jakarta
    </p>
</div>

</div>
@endsection
